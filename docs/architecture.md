# Architecture

## Layer chain

```
caller
  └─ TIClient                  lazy factory, holds token + TLS bundle + options
      └─ *ServiceDecorator     no real methods — pure __call + @method docblock
          └─ BaseDecorator     unwraps [$payload, $status], retries, throws TIException
              └─ *Service      builds the protobuf request, returns the raw tuple
                  └─ *ServiceClient   generated gRPC stub (src/Library/)
```

Each layer has exactly one job. The two that matter for correctness are `*Service` (never inspects
status) and `BaseDecorator` (the sole error boundary).

## TIClient

`src/TIClient.php`. Constructed with a token and an options array:

```php
$client = new TIClient($token, ['isRateLimitRetry' => true]);
```

The constructor reads the TLS trust bundle eagerly — `file_get_contents(__DIR__ . '/../etc/tbank.pem')`
— so a missing or unreadable `etc/tbank.pem` fails at construction, not at first call.

Four lazy getters, all identical in shape:

```php
public function getUser(): UsersServiceDecorator
{
    if ($this->userService === null) {
        $this->userService = new UsersServiceDecorator($this);
    }
    return $this->userService;
}
```

Instantiating a decorator constructs its `*Service`, which constructs the generated
`*ServiceClient` — so a gRPC channel is opened on **first access to that service**, not on
`new TIClient()`. This matters for tests: touching a getter requires `ext-grpc`.

Public helpers consumed by the service layer (and by callers who want to drive a generated client
directly, as `README.md` "Advance usage" shows):

- `getHostName(): string` → `invest-public-api.tbank.ru`
- `getApiConfig(): array` → the gRPC channel options
- `getOptions(): TIClientOptions`
- `TIClient::SPECIAL_OPTIONS` → `['x-app-name' => 'a-treschilov.tinkoff-invest-sdk-php']`,
  passed as the per-call options argument so T-Bank can attribute traffic to this SDK

## TLS and authentication

`getApiConfig()` returns the channel configuration used by every generated client:

```php
[
    'credentials' => ChannelCredentials::createSsl($this->cert),
    'grpc.enable_http_proxy' => 0,
    'grpc.ssl_target_name_override' => 'invest-public-api.tbank.ru',
    'update_metadata' => function ($metaData) {
        $metaData['authorization'] = ['Bearer ' . $this->token];
        return $metaData;
    },
]
```

- The credentials trust the **CA bundle** in `etc/tbank.pem`, not a pinned leaf — see
  [workflow.md](workflow.md) for why, and why you must never overwrite it with a server cert.
- `grpc.ssl_target_name_override` must match the TLS identity actually served on that host;
  it was added in v0.3.15 to fix verification failures after a certificate rotation.
- `grpc.enable_http_proxy => 0` prevents an ambient `http_proxy` env var from hijacking the channel.
- Auth is per-call metadata via the `update_metadata` closure, so the token is never baked into the
  channel and rotating `$token` on the client would take effect on the next call.

## The tuple contract

**Every `*Service` method returns `[$payload, $status]`.** It never checks `$status`, never throws,
and never returns a bare response. Full example — `src/Services/UsersService.php`:

```php
public function getAccounts(): array
{
    $request = new GetAccountsRequest();
    /** @var GetAccountsResponse $response */
    list($response, $status) = $this->usersServiceClient->GetAccounts($request, [], TIClient::SPECIAL_OPTIONS)
        ->wait();

    $accounts = [];
    if ($response !== null) {
        /** @var Account $account */
        foreach ($response->getAccounts()->getIterator() as $account) {
            $accounts[] = $account;
        }
    }

    return [$accounts, $status];
}
```

Three things to copy from this:

1. `->wait()` on the unary call, destructured with `list($response, $status)`.
2. `$response` **can be `null`** when the call failed (bad token, network error) — guard before
   touching it. Skipping that guard is exactly the bug fixed in v0.3.16, where a `foreach` over
   `null` emitted a PHP warning into the response body.
3. The first tuple element is whatever shape the caller should get: sometimes a plain PHP array of
   protobuf messages (as here), sometimes a `RepeatedField`, sometimes the whole `*Response`. The
   decorator's `@method` docblock declares which — see [services.md](services.md).

## BaseDecorator: the error boundary

`src/Services/BaseDecorator.php`. Each `*ServiceDecorator` sets `$this->service` in its constructor
and delegates everything to `parent::__call()`, which is where all error handling lives:

- Calls the service method via `call_user_func_array`, destructures the tuple.
- `$status->code === 0` → returns `$response` unwrapped. This is the only success path.
- Otherwise builds a context array (`method`, `retry_attempt`, `parameters_count`) and creates the
  exception with `TIExceptionFactory::fromGrpcStatus($status, $context)`.
- Throws immediately unless **both** `TIClientOptions::isRateLimitRetry()` is on **and**
  `TIExceptionFactory::isRetryable()` says yes.
- Non-`TIException` throwables (channel-level failures) are wrapped via
  `TIExceptionFactory::networkError()` with `original_exception_class` in the context.
- Retry backoff: `sleep(TIExceptionFactory::getRetryDelay($lastException, $retryAttempt))` before
  the next attempt — `min(2 ** $attempt, 60)` seconds. The delay is applied at the *top* of the next
  iteration and only when the last exception was a `RateLimitException`.
- Loop cap: `while ($retryAttempt < 5 && isRetryable($lastException))`.
- On exhaustion it throws the last exception with `withContext(['final_retry_attempt' => …])`
  appended, so the caller can see how many attempts were burned.

`sleep()` is blocking and synchronous — with retries enabled, a rate-limited call can block the
process for up to 2+4+8+16 seconds across attempts. Callers that cannot tolerate that should leave
`isRateLimitRetry` at its default (`false`) and handle `RateLimitException` themselves.

## TIClientOptions

`src/TIClientOptions.php` — one flag, defaulting to off:

```php
$this->isRateLimitRetry = $options['isRateLimitRetry'] ?? false;
```

Also has a `setIsRateLimitRetry()` mutator, so retry behaviour can be flipped after construction via
`$client->getOptions()->setIsRateLimitRetry(true)`. Unknown option keys are silently ignored.

## Known cosmetic debt

Documented rather than fixed — each touches the public surface and deserves its own changelog entry:

- `TIClient::getHostName()` is defined with a capital `N` but every call site writes
  `getHostname()`. This works only because PHP method names are case-insensitive.
- The private constant is spelled `INKOFF_INVEST_API2_HOST` (missing the leading `T`).
- `getApiConfig()` repeats the hostname as a literal instead of reusing that constant.
- Several services carry an unused `use ...Exceptions\TIException;` import
  (`UsersService`, `MarketDataService`, `InstrumentsServiceDecorator`).
- `ExceptionConfig::RETRYABLE_PATTERNS` / `RETRYABLE_RANGES` and `ExceptionMapper::isRetryable()`
  are dead relative to the live retry path — see [exceptions.md](exceptions.md#retryability).

# Testing

PHPUnit 12, run inside the container. Nothing here needs a real API token or network access.

```bash
make test                # vendor/bin/phpunit
composer test            # same, if you're already inside the container
```

Config is `phpunit.xml` at the repo root: one `Unit` suite over `tests/Unit`, strict about
warnings/notices/risky tests, `src/` as the coverage source with `src/Library` excluded (it's
generated — see [codegen.md](codegen.md)).

## What's unit-testable without ext-grpc or a network

Two classes are pure and have real coverage today:

- **`TIClientOptions`** (`tests/Unit/TIClientOptionsTest.php`) — plain option parsing, no I/O.
- **`TIExceptionFactory`** (`tests/Unit/Exceptions/TIExceptionFactoryTest.php`) — takes a `\stdClass`
  status and a context array, returns a `TIException`. No gRPC channel involved.

Everything under `src/Services/*Service.php` constructs a real `*ServiceClient` in its constructor
(`new UsersServiceClient($client->getHostname(), $client->getApiConfig())`), which needs `ext-grpc`
and opens a channel. Testing those means either:

- mocking at the `*ServiceClient` boundary (the generated classes are not final, so they can be
  subclassed or use a test double that returns a canned `[$response, $status]` from the RPC method),
  or
- exercising them against the **sandbox API** (`Tinkoff\Invest\V1\SandboxServiceClient` exists in
  `src/Library` but has no wrapper yet — see [services.md](services.md#not-implemented)) for
  integration coverage.

Neither exists yet; this is the gap `AGENTS.md`'s predecessor called out as "needs implementation."

## The gRPC status stub shape

`TIExceptionFactory::fromGrpcStatus()` expects a `\stdClass` with these fields — build fixtures with
exactly this shape (see the private `grpcStatus()` helper in the exception factory test):

```php
$status = new \stdClass();
$status->code = 5;                                  // gRPC status code (int)
$status->details = '50002';                         // T-Bank numeric error code, as a STRING
$status->metadata = [
    'message' => ['Instrument not found'],           // human message, first element
    'x-tracking-id' => ['trace-abc-123'],             // optional, becomes getRequestId()
];
```

Two gotchas worth remembering when writing a new fixture (both covered by existing tests):

- `$status->details` is cast with `(int)` — a non-numeric value silently becomes `0`, which is a
  valid-looking `ValidationException` rather than an error you'd notice.
- Every `metadata` value is an **array of strings** (gRPC repeats headers), so it's always
  `['value']`, never a bare string — indexing `[0]` is how the factory reads it.

## Adding a test for a new exception or mapping rule

Follow the tier the change lives in (see [exceptions.md](exceptions.md#the-4-tier-t-bank-code-mapping)):

- An `OVERRIDES` entry → assert the exact code resolves before any pattern would match it.
- A `PATTERNS` entry → assert the message resolves, and if it's ambiguous with an existing pattern,
  add a test proving which one wins (order matters — see `/margin/` vs `/insufficient.*fund/`).
- A `CODE_RANGES` entry → assert a code inside the range resolves, and one just outside it does not.

## Future: sandbox integration tests

The T-Invest API has a sandbox mode (`SandboxServiceClient`, generated but unwrapped) intended for
exactly this. Once a `SandboxService` wrapper exists, integration tests would run against it with a
sandbox token rather than mocking, giving end-to-end coverage of the tuple contract and retry loop
against a real (if fake-money) gRPC channel. Nothing here depends on that landing first.

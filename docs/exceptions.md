# Exceptions and error mapping

Everything here is reached from one place: `BaseDecorator::__call()` calls
`TIExceptionFactory::fromGrpcStatus($status, $context)` whenever `$status->code !== 0`. See
[architecture.md](architecture.md#basedecorator-the-error-boundary).

## Hierarchy

One class per file under `src/Exceptions/` (PSR-12) — all leaves extend one of four base classes, which all
extend `TIException`:

```
TIException  (extends \Exception)
├── ValidationException
│   ├── MissingParameterException      (carries $parameter)
│   └── InvalidParameterException      (carries $parameter, $expected)
├── AuthenticationException
├── ApiException
│   ├── InstrumentNotFoundException
│   ├── AccountNotFoundException
│   ├── AccountClosedException
│   └── AccountBlockedException
├── BusinessException
│   ├── InsufficientFundsException
│   ├── InsufficientMarginException
│   ├── TradingForbiddenException
│   └── QualifiedInvestorRequiredException
└── RateLimitException                 (carries remaining / resetTime / limit)
```

`RateLimitException` extends `TIException` **directly** — it is not an `ApiException`. That matters
because retryability is decided by `instanceof RateLimitException`.

## TIException

Constructor: `(string $message, int $code = 0, ?\Throwable $previous = null, array $context = [])`.
Beyond the standard `\Exception` surface it carries structured diagnostics:

- Accessors: `getContext()`, `getRequestId()`, `getTimestamp()`, `getEndpoint()`,
  `getCorrelationId()`
- Immutable-style builders returning `static`: `withContext()`, `withRequestId()`,
  `withEndpoint()`, `withCorrelationId()`
- `toArray()` — flattens everything for structured logging

`fromGrpcStatus()` populates `requestId` automatically from the response metadata
(`x-tracking-id`, falling back to `x-request-id`).

## What `fromGrpcStatus()` reads off the status

The gRPC status object is a `\stdClass` with three fields this SDK cares about:

```php
$status->code                            // gRPC status code (int)
$status->details                         // T-Bank numeric error code, as a string
$status->metadata['message'][0]          // human-readable message
```

Two non-obvious conversions:

```php
$message = $status->metadata['message'][0] ?? 'Unknown gRPC error';
$code    = (int)($status->details ?? $status->code);
```

`$status->details` is treated as the **numeric T-Bank error code**, not as gRPC's usual free-text
detail string, and is cast to `int` — a non-numeric `details` silently becomes `0`. Keep that in
mind when building status fixtures ([testing.md](testing.md)).

Routing then splits on that code:

- **`$code >= 30000`** → T-Bank-specific mapping via `ExceptionMapper::mapException()` (below).
- **otherwise** → a `match` on the raw gRPC `$status->code`:

| gRPC code | Exception |
|---|---|
| `1`, `4` | `ValidationException('Connection timeout')` |
| `2` | `ValidationException('Network error')` |
| `3` | `ValidationException` (message passed through) |
| `5` | `InstrumentNotFoundException` |
| `7`, `16` | `AuthenticationException` |
| `8` | `RateLimitException` enriched with `x-ratelimit-remaining` / `-reset` / `-limit` |
| default | `ValidationException` |

## The 4-tier T-Bank code mapping

`ExceptionMapper::mapException(int $code, string $message, array $context)`, in strict order —
first match wins:

1. **`ExceptionConfig::OVERRIDES`** — exact code lookup, highest priority:

   | Code | Exception |
   |---|---|
   | `40003` | `AuthenticationException` |
   | `50002` | `InstrumentNotFoundException` |
   | `50004` | `AccountNotFoundException` |
   | `90002` | `QualifiedInvestorRequiredException` |

2. **`ExceptionConfig::PATTERNS`** — first regex to match the *message*, in declaration order:

   | Pattern | Exception |
   |---|---|
   | `/Missing parameter:/` | `MissingParameterException` |
   | `/is invalid/` | `InvalidParameterException` |
   | `/period.*exceed/` | `ValidationException` |
   | `/forbidden.*trading\|Trading.*forbidden/` | `TradingForbiddenException` |
   | `/margin/` | `InsufficientMarginException` |
   | `/Account.*closed/` | `AccountClosedException` |
   | `/Account.*blocked/` | `AccountBlockedException` |
   | `/qualified.*investor/` | `QualifiedInvestorRequiredException` |
   | `/maximum.*amount/` | `ValidationException` |
   | `/insufficient.*fund/` | `InsufficientFundsException` |
   | `/limit.*exceed\|Too many requests/` | `RateLimitException` |

   Order is load-bearing: `/margin/` is broad and precedes `/insufficient.*fund/`, so
   "insufficient margin funds" resolves to `InsufficientMarginException`. Append new patterns rather
   than inserting, unless you intend to shadow an existing one.

3. **`ExceptionConfig::CODE_RANGES`** — inclusive numeric fallback:

   | Range | Exception | Meaning |
   |---|---|---|
   | `30000-39999` | `ValidationException` | validation |
   | `40000-49999` | `AuthenticationException` | auth |
   | `50000-59999` | `ApiException` | not found |
   | `70000-79999` | `ApiException` | internal server errors |
   | `80000-89999` | `RateLimitException` | rate limits |
   | `90000-99999` | `BusinessException` | business logic |

   Note the hole: **`60000-69999` is unmapped** and falls through to tier 4.

4. **Ultimate fallback** — `ValidationException($message, $code)`.

`MissingParameterException` and `InvalidParameterException` get special construction: the offending
parameter name is extracted from the message by `/`([^`]+)`/` (backtick-quoted), defaulting to
`'unknown'`.

## Retryability

`BaseDecorator` consults **`TIExceptionFactory::isRetryable(TIException $e)`**:

```php
return $exception instanceof RateLimitException ||
       ($exception->getCode() >= 70000 && $exception->getCode() < 90000);
```

So: any rate-limit exception, or any code in `[70000, 90000)` (internal errors + rate limits).
Retries only actually happen when `TIClientOptions::isRateLimitRetry()` is also `true`.

Backoff is `TIExceptionFactory::getRetryDelay()` → `min(2 ** $attempt, 60)` seconds. It ignores the
exception argument entirely, so `RateLimitException`'s `resetTime` is captured but **not** used to
schedule the retry.

> **Dead configuration.** `ExceptionConfig::RETRYABLE_PATTERNS`, `ExceptionConfig::RETRYABLE_RANGES`,
> and `ExceptionMapper::isRetryable(int, string)` implement a *different*, message-aware retry policy
> (`/try.*again/`, `/timeout/`, ranges `70000-79999` + `80000-89999`) — and nothing calls them. The
> live path is the factory method above. Editing those constants changes nothing; if you need
> message-based retry, wire `ExceptionMapper::isRetryable()` into `BaseDecorator` deliberately.
> `ExceptionMapper::getCategory(int)` is likewise unused (it would be useful for log labelling).

## Other factory entry points

Available for callers and for future non-gRPC paths; only `fromGrpcStatus()` and `networkError()`
are on the live call path.

| Method | Produces |
|---|---|
| `fromGrpcStatus(\stdClass $status, array $context = [])` | mapped `TIException` — the main entry |
| `networkError(\Throwable $previous, array $context = [])` | `ValidationException` wrapping any throwable; used by `BaseDecorator` for channel-level failures |
| `fromHttpResponse(int $statusCode, array $response, array $context = [])` | maps 400/401/403/404/429/5xx |
| `configurationError(string $message, array $context = [], ?\Throwable $previous = null)` | `ValidationException` with code `1000` |
| `validationError(string $message, array $validationErrors = [], array $context = [])` | `ValidationException` with code `3000`, errors merged into context |
| `businessError(string $errorType, string $message, array $context = [])` | `InsufficientFundsException` (30034), `TradingForbiddenException` (30052), or `BusinessException` (90001) |

Note `networkError()` returns a `ValidationException` for what is really a transport failure, and
`ValidationException` is *not* retryable unless its code lands in `[70000, 90000)` — so a transient
connection drop is generally **not** retried.

## Adding an exception

1. Add a new file under `src/Exceptions/`, named for the class, extending the right base
   (`ValidationException`, `AuthenticationException`, `ApiException`, or `BusinessException`) so it
   inherits the correct range semantics.
2. Register it in `src/Exceptions/ExceptionConfig.php` — `OVERRIDES` for a specific code (preferred:
   unambiguous), `PATTERNS` for a message shape (append, don't insert), or rely on the range
   fallback if the base class is already right.
3. If it needs constructor arguments beyond `(message, code, previous, context)`, add a branch to
   `ExceptionMapper::createException()` — that is the only place non-standard constructors are
   handled, as `MissingParameterException` shows.
4. Cover it in `tests/Unit/Exceptions/TIExceptionFactoryTest.php`.
5. `CHANGELOG.md` + `composer.json` version bump.

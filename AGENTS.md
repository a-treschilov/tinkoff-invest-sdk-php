# Tinkoff Invest PHP SDK — AI Context

Unofficial PHP SDK for the T-Bank (formerly Tinkoff) Invest API V2. Wraps generated gRPC stubs in a
typed, retry-aware service layer. Published to Packagist as `a.treschilov/tinkoff-invest-api-sdk`
and consumed by the Hakkes API (`tinkoff_invest_analytics`).

> Auto-loaded by Claude Code, Cline, Cursor. Keep terse — heavy detail lives in [`docs/`](docs/).

## Tech Stack

- **PHP:** 8.3+ strict types (container runs 8.4)
- **Protocol:** gRPC over TLS (`ext-grpc` ^1.66, `grpc/grpc` ^1.57)
- **Serialization:** `google/protobuf` ^4.29, `google/common-protos` ^4.8
- **API contracts:** T-Invest API v1.49, vendored as the `contracts/` git submodule
- **Tests:** PHPUnit 12
- **Style:** PSR-12 via PHP CodeSniffer
- **Dev env:** Docker (`tinkoff_invest_sdk_php` container, repo mounted at `/var`)

## Project Structure

```
src/
├── TIClient.php               # Entry point + lazy service factory
├── TIClientOptions.php        # Client options (isRateLimitRetry)
├── Services/
│   ├── BaseDecorator.php      # __call: tuple unwrap, retry, exception construction
│   ├── *Service.php           # Thin protobuf request builders
│   └── *ServiceDecorator.php  # Pure pass-through + @method docblock (the public API)
├── Exceptions/                # TIException + one file per exception class, factory, mapper, config
└── Library/                   # GENERATED — never hand-edit (see invariant 1)
    ├── Tinkoff/Invest/V1/     # gRPC stubs
    └── GPBMetadata/           # Proto metadata

contracts/                     # Git submodule: .proto sources
etc/tbank.pem                  # CA trust bundle for API TLS — never overwrite with a leaf cert
examples/                      # Runnable usage examples (served at localhost:4092)
tests/Unit/                    # PHPUnit unit tests
docs/                          # Deep-dive docs (see Documentation Map)
```

## Coding Rules (always apply)

- `declare(strict_types=1);` on every file.
- PSR-12, 4-space indentation.
- Namespace `ATreschilov\TinkoffInvestApiSdk\` for hand-written code.
- Full type hints on all parameters and return types.
- Parameter PHPDoc is in **Russian**, copied verbatim from the official contracts — keep that
  convention when adding methods.
- Comments only for non-obvious **why** — never describe what the code does.

### Naming

| Type | Pattern |
|---|---|
| Service wrappers | `*Service` |
| Retry decorators | `*ServiceDecorator` |
| Exceptions | `*Exception` |
| Generated gRPC clients | `*ServiceClient` (in `src/Library/`) |

## Key Entry Points

- **Client:** `new TIClient(string $token, array $options = [])` — `src/TIClient.php`
- **Service getters:** `getUser()`, `getOperations()`, `getInstruments()`, `getMarketData()`
- **Retry / error boundary:** `Services/BaseDecorator.php::__call()`
- **Exception construction:** `Exceptions/TIExceptionFactory::fromGrpcStatus()`
- **Examples:** `examples/example_basic.php`

## Quick Commands

```bash
make start                     # Start Docker environment (nginx :4092 + php)
make composer-install          # Install dependencies
make test                      # PHPUnit unit tests
make code-sniffer              # PSR-12 check (skips src/Library)
make api-init                  # Initialize contracts submodule + generate
make api-update VERSION=v1.49  # Update contracts to a version + regenerate
make get-from-proto            # Regenerate PHP stubs from .proto
make inspect-ssl-certificate   # Inspect the leaf cert the API serves (read-only)
make check-ssl-certificate     # List every cert inside etc/tbank.pem
```

## Critical Invariants

Get these wrong and the change is broken even if it looks right.

1. **`src/Library/**` is generated and committed** (443 tracked files). Never hand-edit it —
   regenerate with `make get-from-proto`. It is excluded from `make code-sniffer` and from review.
2. **Every `*Service` method returns a `[$payload, $status]` tuple**, never a bare response, and
   never checks the status itself. `BaseDecorator::__call()` owns unwrapping, retry, and exception
   construction. A service method that throws or returns a bare response breaks the decorator.
3. **Every new public method needs a `@method` line** on the matching `*ServiceDecorator` class
   docblock. The decorator has no real methods — that docblock is the *only* caller-visible
   signature and the only place the unwrapped return type is declared.
4. **Every change bumps the version and the changelog.** Add a `## vX.Y.Z - YYYY.MM.DD` section at
   the top of `CHANGELOG.md` using `[feat]` / `[fix]` / `[tech]` / `[break]` tags, and set
   `"version"` in `composer.json` to match.

Also: `etc/tbank.pem` is a **CA trust bundle** (Минцифры + public roots), not a pinned leaf
certificate. Never replace it with a single server cert — see [docs/workflow.md](docs/workflow.md).

## Context7 Override

This repo documents its own architecture, codegen pipeline, and error model in [`docs/`](docs/).
**Always check `docs/` first.**

Use Context7 only for undocumented third-party internals (a `grpc/grpc` PHP channel option, a
`google/protobuf` runtime edge case).

| Question type | Source |
|---|---|
| Tuple contract, retry loop, TLS/auth config | [docs/architecture.md](docs/architecture.md) |
| Which methods exist, how to add one | [docs/services.md](docs/services.md) |
| Error codes, exception mapping, retryability | [docs/exceptions.md](docs/exceptions.md) |
| Regenerating stubs, contract versions | [docs/codegen.md](docs/codegen.md) |
| Make targets, TLS bundle, release + consumer pin | [docs/workflow.md](docs/workflow.md) |
| Writing tests, what is unit-testable | [docs/testing.md](docs/testing.md) |

## Documentation Map

| Topic | File |
|---|---|
| Layer chain, tuple contract, `BaseDecorator` retry loop, TLS + Bearer metadata | [docs/architecture.md](docs/architecture.md) |
| Implemented service/method matrix, unimplemented APIs, add-a-method recipe | [docs/services.md](docs/services.md) |
| Exception hierarchy, 4-tier code mapping, retry semantics, adding exceptions | [docs/exceptions.md](docs/exceptions.md) |
| `contracts/` submodule, protoc pipeline, API version bumps | [docs/codegen.md](docs/codegen.md) |
| Docker env, make targets, TLS trust bundle, changelog + release ritual | [docs/workflow.md](docs/workflow.md) |
| PHPUnit setup, unit-testable surface, gRPC status stubs | [docs/testing.md](docs/testing.md) |
| Contribution flow (fork → PR) | [CONTRIBUTING.md](CONTRIBUTING.md) |
| Public API surface + endpoint support matrix | [README.md](README.md) |

# Changelog

## v0.3.17 - 2026.09.25

- [feature] `MarketDataService::getCandles()` accepts an optional `?int $candleSourceType`
  (`GetCandlesRequest\CandleSource`), set on the request only when passed — lets consumers ask
  for exchange-only candles (`CANDLE_SOURCE_EXCHANGE`) instead of the API's default mix. Omitting
  it leaves the request unchanged. Covered by `tests/Unit/GetCandlesRequestTest.php`.

## v0.3.16 - 2026.09.04

- [fix] `OperationsService::getOperations()`'s `$figi` filter called `$request->setState($figi)`
  instead of `setFigi($figi)`, so filtering by instrument silently did nothing and clobbered the
  `$state` filter instead.
- [fix] `TIClient::getOperations()` was the only service getter without a return type
  (`UsersServiceDecorator`/`InstrumentsServiceDecorator`/`MarketDataServiceDecorator` all declare
  theirs); added `: OperationsServiceDecorator` to match.
- [fix] `make check-ssl-certificate` hardcoded an absolute path outside this checkout
  (`/Users/a.treschilov/Projects/tinkoff-invest-sdk-php/etc/tbank.pem`, missing
  `hakkes-workspace/`), so the target failed here; switched to the repo-relative `etc/tbank.pem`.
- [fix] every `docker exec -it` in the `Makefile` failed outside a real terminal
  ("stdin is not a terminal"), which meant no target — including the new `make test` — could run
  in CI or from an agent. Dropped `-it`; none of these commands read stdin or need a TTY.
- [tech] Renamed `Agent.md` to `AGENTS.md` (git history preserved) with a `CLAUDE.md` symlink,
  matching the other Hakkes repos; rewrote it as a terse router pointing into a new `docs/` tree
  (`architecture.md`, `services.md`, `exceptions.md`, `codegen.md`, `workflow.md`, `testing.md`)
  and corrected drift the old file had accumulated (e.g. `TIExceptionFactory::fromStatus()` →
  the real `fromGrpcStatus()`, `ExceptionConfig::CODE_OVERRIDES` → `OVERRIDES`, and the
  `InstrumentsService` method table, which was missing 6 of 14 methods).
- [tech] Un-ignored `/docs/` and `.github/` so AI-context docs can be committed; added
  `/.claude/*.local.json` to `.gitignore`.
- [tech] Added a PHPUnit 12 scaffold: `phpunit.xml`, `make test` / `composer test`, and 19 unit
  tests covering `TIClientOptions` and `TIExceptionFactory`'s 4-tier error mapping and retry
  semantics — the first tests in this repo.
- [tech] Added `.claude/settings.json` with a permission allowlist for this repo's own tooling and
  a deny rule against editing `src/Library/**` or `etc/tbank.pem`.
- [tech] Trimmed `.github/instructions/changelogs.instructions.md` to a pointer at `AGENTS.md` /
  `docs/` so there is one source of truth for AI-facing conventions instead of two drifting copies.
- [tech] `make code-sniffer` now passes cleanly (previously failed with 60+ pre-existing
  violations): split `Exceptions/CoreExceptions.php` into one file per class (PSR-12), dropping the
  now-unneeded `require_once` in `TIExceptionFactory`/`ExceptionMapper` (PSR-4 autoloading covers
  it); wrapped long lines in `TIExceptionFactory`, `OperationsService`, and the
  `Operations`/`InstrumentsServiceDecorator` `@method` docblocks; excluded
  `PSR1.Files.SideEffects` for `examples/`, where a runnable script legitimately mixes a top-level
  `require` with a declared helper function.
- [tech] `images/php/php.ini` no longer re-declares `extension=grpc.so` (the base image already
  enables it, so this only produced a "Module already loaded" warning) and defaults
  `grpc.grpc_verbosity`/`grpc.grpc_trace` to quiet. gRPC's native logging runs in every PHP process
  in the dev container — `phpcs`, `phpunit`, `composer` included — so the previous `debug`/`all`
  defaults made every command pay a large log dump. Override per invocation with
  `-e GRPC_VERBOSITY=debug -e GRPC_TRACE=all` when actually debugging a channel.
- [fix] `UsersService::getAccounts()` raised a PHP `E_WARNING` (`foreach() argument must be of
  type array|object, null given`) instead of failing cleanly when the gRPC call returned a `null`
  response (e.g. an invalid API token). With `display_errors` on, that warning was echoed as raw
  HTML into the response body ahead of the caller's own JSON error, breaking JSON parsing
  downstream. Contracts confirmed still current at v1.49 (no newer release available); `src/Library`
  regenerated from proto with no diff.

## v0.3.15 - 2026.07.06

- [feat] Update T-Invest API contracts to v1.49
- [fix] Trust the Минцифры (Russian Trusted Root CA) and public CA chains instead of pinning a single leaf certificate, fixing `CERTIFICATE_VERIFY_FAILED: self signed certificate in certificate chain` after T-Bank rotated the server certificate
- [fix] Set `grpc.ssl_target_name_override` to `invest-public-api.tbank.ru` to match the TLS identity actually served on that host
- [tech] Rename `etc/tinkoff-ru.pem` to `etc/tbank.pem` (Tinkoff brand retired); `make update-ssl-certificate` replaced by `make inspect-ssl-certificate` (leaf-only, read-only) since the pem is now a CA bundle, not a single pinned cert

## v0.3.14 - 2026.01.15

- [feat] Update T-Invest API contracts to v1.44
- [tech] Switch contracts repository to new T-Bank Invest API repo at `https://opensource.tbank.ru/invest/invest-contracts`
- [tech] Update submodule tracking branch from `main` to `master`
- [feat] Add method GetOperationsByCursor for paginated operations retrieval
- [tech] Add Agent.md

## v0.3.13 - 2025.09.25

- [feat] Update T-Invest API contracts to v1.40
- [tech] Point API requests to `invest-public-api.tbank.ru` to follow the T-Bank migration
- [tech] Use distro gRPC/protobuf tooling in the PHP image and update the protoc plugin path

## v0.3.12 - 2025.08.31

- [feat] Update T-Invest API to v1.36
- [tech] Added make commands to creation ssl certificate for T-Bank api

## v0.3.10 - 2025.03.08

- [feat] switch T-Invest Api contracts to main branch
- [feat] Update T-Invest API to v1.30

## v0.3.9 - 2025.01.08

- [tech] PHP 8.4 support

## v0.3.8 - 2024.12.22

- [feat] Update Tinkoff API to v1.27

## v0.3.6 - 2024.10.05

- [tech] Update certificate
-

## v0.3.5 - 2024.09.03

- [feat] Updated api contract to v1.24
- [tech] Update dependencies

## v0.3.4 - 2024.05.05

- [feat] Update Tinkoff API to v1.21

## v0.3.2 - 2024.04.15

- [tech] Added method GetIndicatives

## v0.3.1 - 2024.04.13

- [tech] Update dependencies

## v0.3.0 - 2024.03.18

- [feature] Ability retry the request when request limit exceeded
- [break] Breaking support 'figi' param

## v0.2.18 - 2024.03.16

- [feature] Updated api contract to v1.19

## v0.2.17 - 2024.01.05

- [feature] Added method GetFuturesBy
- [feature] Added method GetBondEvents

## v0.2.16 - 2023.12.31

- [tech] Updated api contract to v1.8
- [tech] Migrate to new git repo `russianInvestments`
- [tech] Replace figi to instrument_id

## v0.2.15 - 2023.11.13

- [tech] Update tinkoff api certificate

## v0.2.14 - 2023.09.14

- [tech] Updated api contract to v1.5
- [tech] More detailed errors from Tinkoff API

## v0.2.13 - 2023.05.09

- [tech] Updated api contract to v1.4

## v0.2.12 - 2023.02.24

- [feature] Added method GetLastPrices
- [feature] Added param instrument_id to GetHistoryCandles
- [tech] Updated api contract to v1.3

## v0.2.11 - 2023.02.20

- [feature] Added method GetBondBy
- [feature] Added method GetBondCoupons
- [feature] Added method GetDividends

## v0.2.10 - 2023.02.15

- [tech] Updated PHP image to php 8.2
- [tech] Updated dependencies and requirements

## v0.2.9 - 2023.01.11

- [tech] Updated api contract to v1.1
- [tech] Updated tinkoff-ru.pem

## v0.2.7 - 2022.07.24

- [feature] Added method GetShareBy
- [tech] Updated api contract to v1.0.10

## v0.2.6 - 2022.06.01

- [feature] Added method GetCurrencies
- [feature] Added method GetCurrencyBy
- [tech] Updated api contract to v1.0.8
- [tech] Updated dependencies

## v0.2.5 - 2022.04.24

- [feature] Add method GetWithdrawLimits
- [tech] Update api contract to v1.0.7
- [tech] Update dependencies

## v0.2.4 - 2022.02.20

- [feature] Add method Get Shares
- [feature] Add method Get Etfs

## v0.2.3 - 2022.02.19

- [feature] Add method Get Candles
- [feature] Add method Get Bonds
- [feature] Add method Get Futures
- [feature] Update api contracts

## v0.2.2 - 2022.02.13

- [feature] Add method Get Operations
- [feature] Add changelog

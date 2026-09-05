# Workflow

## Dev environment

Everything runs in Docker; the host needs no PHP, `protoc`, or `ext-grpc`.

```bash
make start              # docker-compose up -d --build
make composer-install
```

`docker-compose.yml` defines two services on the `tinkoff_invest_sdk_network` network:

| Container | Role |
|---|---|
| `tinkoff_invest_sdk_nginx` | serves `examples/` at **http://localhost:4092**; mounts `hosts/`, `examples/`, `logs/` |
| `tinkoff_invest_sdk_php` | PHP 8.4 + `ext-grpc` + Xdebug + `protoc`/`grpc_php_plugin`; repo mounted at `/var` |

Every `make` target that runs PHP does so via
`docker exec -it tinkoff_invest_sdk_php /bin/bash -c "…"`. Follow that shape when adding targets.

The container emits `PHP Startup: Unable to load dynamic library 'gd' / 'intl' / 'zip'` and
`Module "grpc" is already loaded` warnings on stderr for every invocation. They come from the base
image's `php.ini` and are harmless noise — not a symptom of your change.

## Make targets

| Target | What it does |
|---|---|
| `make start` | Bring the environment up (alias of `docker-compose-up`) |
| `make composer-install` | `composer install` in the container |
| `make composer-update` | `composer update` — moves `composer.lock`, do it deliberately |
| `make composer-outdated` | `composer outdated --direct` |
| `make test` | `vendor/bin/phpunit` — see [testing.md](testing.md) |
| `make code-sniffer` | `phpcs --standard=PSR12 examples/ src/ tests/ --ignore=*/src/Library/*` |
| `make api-init` | Init the contracts submodule, then generate |
| `make api-update VERSION=1.49` | Move the submodule to a tag, then generate — [codegen.md](codegen.md) |
| `make get-from-proto` | Regenerate `src/Library/` only |
| `make submodule-init` / `submodule-update` | Submodule plumbing used by the two above |
| `make inspect-ssl-certificate` | Print subject/issuer/validity of the **leaf** the API currently serves |
| `make check-ssl-certificate` | Print subject/issuer/validity of **every cert in `etc/tbank.pem`** |

`make code-sniffer` is the only style gate. There is **no CI** in this repo (`.github/workflows/`
does not exist) — nothing runs these checks for you, so run them before opening a PR.

## TLS trust bundle — `etc/tbank.pem`

**This is a CA trust bundle, not a pinned server certificate**, and it is load-bearing:
`TIClient::__construct()` reads it eagerly and `getApiConfig()` hands it to
`ChannelCredentials::createSsl()`. Delete it and every client construction fails.

It contains **123 certificates** — the two Минцифры certs (`Russian Trusted Root CA` and
`Russian Trusted Sub CA`, which actually sign `invest-public-api.tbank.ru`) plus ~121 standard
public roots.

The public roots are not redundant padding: passing an explicit PEM to `createSsl()` **replaces**
gRPC's built-in root store rather than adding to it. Trim the bundle down to just the Минцифры
chain and any other TLS the channel needs would stop verifying. Conversely, `createSsl(null)` would
use gRPC's defaults — which do **not** include Минцифры. Hence the full bundle.

Expiry dates to watch (re-check with `make check-ssl-certificate`):

| Certificate | Expires |
|---|---|
| `Entrust Root Certification Authority` | 2026-11-27 |
| `Russian Trusted Sub CA` | 2027-03-06 |
| `Russian Trusted Root CA` | 2032-02-27 |

Refresh the public-root portion from an upstream `ca-certificates` bundle, re-appending the
Минцифры certs — never by scraping the live endpoint.

- **Never overwrite it with a single leaf certificate.** That is what the SDK used to do, and it
  broke with `CERTIFICATE_VERIFY_FAILED: self signed certificate in certificate chain` every time
  T-Bank rotated the server cert (fixed in v0.3.15).
- `make inspect-ssl-certificate` is deliberately **read-only** — it fetches the current leaf for
  eyeballing and writes nothing. The old `make update-ssl-certificate` target was removed precisely
  because it clobbered the bundle.
- `make check-ssl-certificate` splits the local bundle and prints each cert, so you can confirm the
  expected roots are present and unexpired.
- If verification starts failing, first check whether a **root** expired or the served identity
  changed — not whether the leaf rotated (rotation is normal and the bundle should absorb it).
  `grpc.ssl_target_name_override` must keep matching the TLS identity on the host.

## Changelog and version — required on every change

This is invariant 4. Both files move together:

1. `CHANGELOG.md` — add a new section at the **top**, above the previous latest:
   ```markdown
   ## v0.3.17 - 2026.09.03

   - [feat] ...
   - [fix] ...
   - [tech] ...
   ```
   Date format is `YYYY.MM.DD`. Tags: `[feat]` new capability, `[fix]` bug, `[tech]` internal /
   tooling / docs, `[break]` backwards-incompatible.
2. `composer.json` — set `"version"` to the same `vX.Y.Z`.

Write entries so a consumer can tell whether they need to act: name the affected class/method and,
for fixes, the symptom that was observed. The v0.3.16 entry is a good model.

## Release and the consumer pin

The SDK is distributed through **Packagist**, and the Hakkes API pins it exactly:

```json
// tinkoff_invest_analytics/composer.json
"a.treschilov/tinkoff-invest-api-sdk": "v0.3.15"
```

There is **no `repositories` block** in the consumer — no path repo, no VCS repo. Consequences:

- Local edits in this repo are **invisible** to `tinkoff_invest_analytics`, even inside the umbrella.
  A change is not testable end-to-end from the API side until it is tagged and published.
- Because the pin is exact (not `^`), the consumer never picks up a new version implicitly; its
  `composer.json` must be bumped in a separate change in that repo.

Release order:

1. Land the change here (changelog + version bump included).
2. Tag `vX.Y.Z` matching `composer.json` and push the tag — Packagist picks it up from the tag.
3. In `tinkoff_invest_analytics`, bump the pin and run its own `make test`.

Per the umbrella dependency order (`tinkoff-invest-sdk-php → tinkoff_invest_analytics → …`), the
SDK always ships first.

To test against unreleased SDK work without publishing, add a path repository to the consumer
temporarily — and remove it before committing:

```json
"repositories": [{"type": "path", "url": "../tinkoff-invest-sdk-php"}]
```

## Contributing flow

Fork → feature branch → PR to `main`. See [../CONTRIBUTING.md](../CONTRIBUTING.md).

Review criteria for this repo live in `.claude/commands/review.md`, used by the umbrella's
`/ship` and `/fix` flows. `src/Library/**` is excluded from review, and missing tests are a
suggestion rather than a blocker.

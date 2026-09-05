# Code generation

`src/Library/**` is protobuf/gRPC output, generated from the `contracts/` submodule and
**committed** (443 tracked files). Never hand-edit it — see invariant 1 in
[../AGENTS.md](../AGENTS.md).

## Where the contracts come from

`contracts/` is a git submodule:

```
[submodule "contracts"]
	path = contracts
	url = https://opensource.tbank.ru/invest/invest-contracts
	branch = master
```

Proto sources live at `contracts/src/docs/contracts/`:
`common.proto`, `instruments.proto`, `marketdata.proto`, `operations.proto`, `orders.proto`,
`sandbox.proto`, `signals.proto`, `stoporders.proto`, `users.proto`, plus vendored
`google/api/field_behavior.proto`.

The submodule also ships useful non-proto references that never get generated:

- `contracts/src/docs/errors/api_errors.json` — the authoritative T-Bank error code list. Check this
  before adding a mapping in [exceptions.md](exceptions.md).
- `contracts/src/docs/swagger-ui/openapi.yaml` — REST equivalent of the API
- `contracts/src/docs/ws/asyncapi.yaml` — streaming contracts

Current pin: tag `1.49` (commit `ef3337c`).

## Version tag naming — read before running `api-update`

The upstream repo **changed its tag convention**. Older releases are `v`-prefixed
(`v1.10` … `v1.27`); every recent one is not (`1.43`, `1.44`, `1.48`, `1.49`).

```bash
make api-update VERSION=1.49    # correct today
make api-update VERSION=v1.49   # fails — no such ref
```

`make api-update` runs `git checkout $(VERSION)` inside the submodule, so a wrong value fails there
before anything is regenerated. Confirm the ref first:

```bash
git -C contracts fetch --tags && git -C contracts tag | sort -V | tail -5
```

`VERSION` defaults to `master` in the `Makefile` — always pass it explicitly so the pin is a
reproducible tag, not a moving branch.

## Regenerating

All of it runs **inside the container** (`make start` first) because `protoc` and `grpc_php_plugin`
are built into the image — see `images/php/Dockerfile`, which compiles them from gRPC `v1.75.0`.
They are not expected to exist on the host.

```bash
make api-init                 # submodule-init + get-from-proto  (first checkout)
make api-update VERSION=1.49  # submodule-update + get-from-proto (version bump)
make get-from-proto           # regenerate only, submodule untouched
```

`get-from-proto` is:

```
protoc --experimental_allow_proto3_optional \
  --proto_path=/var/contracts/src/docs/contracts \
  --php_out=/var/src/Library \
  --plugin=protoc-gen-grpc=/tmp/grpc/cmake/build/grpc_php_plugin \
  --grpc_out=/var/src/Library \
  /var/contracts/src/docs/contracts/*.proto
```

`/var` is the repo mount, so output lands in `src/Library/` on the host.

## What a clean regeneration looks like

`make get-from-proto` is **idempotent**: if the submodule has not moved, `git status` after running
it should show no change under `src/Library/`. A no-op diff is the expected result and a useful
sanity check that the generator toolchain matches what produced the committed output. This is worth
doing when a change touches contracts even indirectly — v0.3.16 recorded exactly that
("`src/Library` regenerated from proto with no diff").

If a regeneration you did not intend produces a large diff, the toolchain drifted (different gRPC
plugin version) rather than the contracts changing. Don't commit that alongside unrelated work.

## After bumping the API version

1. Check `git diff --stat src/Library/` for new or removed `*ServiceClient` methods.
2. New RPCs are **not** automatically exposed — the hand-written wrapper layer is manual. Follow
   "Adding a method" in [services.md](services.md).
3. Removed or renamed RPCs are a `[break]` for any wrapper that referenced them.
4. Update the API version in [../AGENTS.md](../AGENTS.md) (Tech Stack) and the support matrix in
   [../README.md](../README.md) if endpoints changed.
5. `make code-sniffer` — it skips `src/Library`, so it only checks that your wrappers are clean.
6. `CHANGELOG.md` + `composer.json` version bump; contract updates are conventionally `[feat]`
   (e.g. "Update T-Invest API contracts to v1.49" in v0.3.15).

## Autoload mapping

`composer.json` maps the generated namespaces separately from hand-written code:

```json
"Tinkoff\\":     "src/Library/Tinkoff",
"GPBMetadata\\": "src/Library/GPBMetadata",
"ATreschilov\\TinkoffInvestApiSdk\\": "src/"
```

So `Tinkoff\Invest\V1\*` is always generated and `ATreschilov\TinkoffInvestApiSdk\*` is always
hand-written. A new top-level proto package would need a new PSR-4 entry plus
`composer dump-autoload`.

# How to Contribute

## Pull Requests

1. Fork the repository
2. Create a new branch for each feature or improvement
3. Send a pull request from each feature branch to the `main` branch

## Local development 

### Run application
1. Install Docker
2. Run commands below in terminal
```shell
make start
make composer-install
```
3. Open browser `http://localhost:4092`

### Get Tinkoff Api resources
```
make api-init
```

### Update .protos and generate libraries
```
make api-update VERSION=1.49
```
Check available tags first with `git -C contracts tag | sort -V | tail -5` — the upstream contracts
repo dropped the `v`-prefix convention partway through, so old examples like `V1.8` no longer match
any ref. See [docs/codegen.md](docs/codegen.md).

## AI assistant context

This repo ships [`AGENTS.md`](AGENTS.md) (also readable as `CLAUDE.md`) and a `docs/` folder with
deep dives on architecture, services, exceptions, codegen, workflow, and testing. Read those before
making a change — they cover conventions (like the `[$payload, $status]` tuple contract) that are
easy to violate by accident.

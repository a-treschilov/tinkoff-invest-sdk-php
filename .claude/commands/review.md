---
description: Review uncommitted changes in the Tinkoff Invest PHP SDK for issues.
allowed-tools: Read, Grep, Glob, Bash(git diff:*), Bash(git status:*), Bash(git log:*)
---

Review the uncommitted changes in this repository (Tinkoff Invest PHP SDK — PHP 8.3+, gRPC client
over generated protobuf stubs, service-decorator pattern with retry logic).

## Get the diff

!`git diff HEAD`

## Untracked files (not shown in diff above)

!`git status --short`

## Scope note

**Never review `src/Library/**`** — it is generated protobuf/gRPC code (regenerated via
`make get-from-proto`), excluded from `phpcs`, and not meant to be hand-edited. If the diff touches
it, note that it's generated and move on without flagging its contents.

## Review Criteria

Analyze the changes above for:

### 1. Logic Errors
- Incorrect conditions or comparisons, off-by-one errors
- gRPC response handling: `list($response, $status) = $client->Method($request)->wait();` — missing
  `$status` checks before using `$response`
- Missing edge cases (empty responses, null fields on protobuf messages, expired tokens)
- Incorrect return values or swapped argument order

### 2. Security Issues
- Credentials (API tokens, `etc/tbank.pem` handling) must never be logged or hardcoded
- TLS/SSL downgrade — any change to gRPC channel credentials that weakens verification
- Insecure deserialization of API responses
- Sensitive data (account numbers, portfolio values) exposed in exception messages or logs

### 3. Performance Concerns
- Retry logic in `BaseDecorator`/`*ServiceDecorator`: unbounded retries, missing backoff, retrying
  non-idempotent calls
- Unnecessary re-instantiation of services instead of using `TIClient`'s lazy-loading getters
- Large in-memory buffering of paginated results where streaming/cursor-based iteration exists
  (`getOperationsByCursor()`)

### 4. Simplification Opportunities
- Deeply nested `if` ladders — flatten with early `return`/`throw` guard clauses
- Duplicated logic across `*Service`/`*ServiceDecorator` pairs that belongs in `BaseDecorator`
- Manual mapping code that could reuse an existing protobuf-to-DTO helper

### 5. SOLID & Architecture
- **Single Responsibility** — services should not mix gRPC call construction, retry logic, and
  response mapping in one method
- **Decorator pattern integrity** — every new service method needs a matching decorator method with
  the same retry semantics as its siblings; flag a service method added without one
- **Exception Factory** — new error conditions should route through `TIExceptionFactory::fromStatus()`
  (specific code → regex → range fallback), not ad-hoc `throw` of a generic exception
- Methods longer than ~40 lines or with more than 4 parameters — usually decomposes or needs a DTO

### 6. Test Coverage
- `tests/` exists but is currently empty (no PHPUnit configured) — do not fail a review over missing
  tests, but flag new public methods with non-trivial logic (retry/backoff, exception mapping,
  pagination cursors) as a **Suggestion**-severity note that they'd benefit from a test once PHPUnit
  is set up.

### 7. Boy Scout Principle
Look at code NEAR the changes and suggest small improvements:
- Missing `declare(strict_types=1);` on touched files
- Missing type hints/return types adjacent to the change
- Dead code, unused imports
- PHPDoc missing on new public/protected methods (per `.github/instructions/changelogs.instructions.md`)

## Output Format

For each issue found, provide:
- **File:Line** — Location
- **Severity** — Critical / Warning / Suggestion
- **Category** — Logic / Security / Performance / Simplification / SOLID / Test Coverage / Boy Scout
- **Description** — What the issue is
- **Recommendation** — How to fix it (include a short PHP snippet when it clarifies the fix)

## Important Notes
- Do NOT suggest code style/formatting changes — PSR-12 via `make code-sniffer` handles that.
- Do NOT flag anything inside `src/Library/**` (generated).
- Keep existing patterns: decorator pattern for retries, `TIExceptionFactory` for error mapping,
  `declare(strict_types=1);` everywhere, namespace `ATreschilov\TinkoffInvestApiSdk\`.
- If the diff is empty, report that no uncommitted changes were found and stop.

## Machine-readable output (for automation)

If invoked with `--json <path>` (or when the `/ship` orchestrator or `hakkes-reviewer` sub-agent
instructs it), then **in addition to** the human summary above, write every finding to `<path>` as
JSON — and do **not** print the JSON inline:

```json
{
  "repo": "tinkoff-invest-sdk-php",
  "reviewed_at": "<ISO-8601 UTC>",
  "diff_base": "HEAD",
  "round": 1,
  "findings": [
    { "id": "tinkoff-invest-sdk-php-1", "file": "src/Services/OperationsService.php", "line": 42,
      "severity": "Critical|Warning|Suggestion", "category": "<one of the categories above>",
      "description": "…", "recommendation": "…" }
  ]
}
```

`id` is `"tinkoff-invest-sdk-php-<n>"`; `file` is repo-relative; `line` is the primary line. Sort
Critical → Warning → Suggestion, grouped by file. Omit formatting-only items and anything in
`src/Library/**`. If the diff is empty, write
`{ "repo": "tinkoff-invest-sdk-php", "round": 1, "findings": [] }`.

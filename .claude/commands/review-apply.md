---
description: Apply findings from .claude/review-findings.json to this SDK non-interactively (full-auto, no per-finding prompt). The file-driven counterpart to /review-fix.
allowed-tools: Read, Edit, Write, Grep, Glob, Bash(git diff:*), Bash(git status:*)
---

Apply the findings already recorded in `.claude/review-findings.json` (written by `/review --json
.claude/review-findings.json` or the `hakkes-reviewer` sub-agent) to this repo, **full-auto** — no
per-finding approval. For interactive, one-at-a-time control use `/review-fix` instead.

## Step 1 — Load findings

Read `.claude/review-findings.json`. If it's missing, tell the user to run
`/review --json .claude/review-findings.json` first, and stop. If `findings` is empty, report
"nothing to apply" and stop.

## Step 2 — Apply every finding

Read `Agent.md` for the architecture/coding conventions, then for each finding in order:
- Read the target file and apply the `recommendation` with Edit — implement the intent, keep it
  minimal and consistent with surrounding code (`declare(strict_types=1);`, decorator pattern for
  retries, `TIExceptionFactory` for error mapping).
- Re-read the edited region to confirm the change landed.
- If a finding targets `src/Library/**` (generated code) or can't be applied safely, skip it and
  record why — don't guess.

## Step 3 — Write the result

Write `.claude/review-applied.json`:
```json
{ "round": 1, "applied": ["tinkoff-invest-sdk-php-1"], "failed": [ {"id":"tinkoff-invest-sdk-php-2","reason":"…"} ], "skipped": [] }
```
Match `round` to the findings file. Every finding id must land in exactly one bucket.

## Step 4 — Summary

Print `Applied X / Failed Y / Skipped Z` and list any failed/skipped ids with a one-line reason.

## Hard rules

- Apply only what's in the findings file — don't re-review or invent new fixes.
- Never edit `src/Library/**`. Never `git add` / `commit`, never bump the package version.

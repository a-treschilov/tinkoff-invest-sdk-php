---
description: Walk through code-review suggestions for this SDK one at a time, applying fixes only with explicit user approval.
allowed-tools: Read, Edit, Write, Grep, Glob, Bash(git diff:*), Bash(git status:*), Bash(git log:*)
---

Apply fixes from a code review of this repo interactively, walking through suggestions one by one.

## Step 1 — Get the suggestions

If `.claude/review-findings.json` exists (written by a prior `/review --json .claude/review-findings.json`
run — e.g. from a clean review session), **use it** as the suggestion list; skip straight to Step 2.

Otherwise, run the review yourself right now:

!`git diff HEAD`
!`git status --short`

Read every changed file fully and analyze using the criteria from `/review` — Logic, Security,
Performance, Simplification, SOLID/Architecture, Test Coverage, Boy Scout. **Never review or fix
anything under `src/Library/**`** (generated code). Do NOT suggest formatting changes — PSR-12 is
enforced via `make code-sniffer`.

## Step 2 — Order and walk through

Collect all suggestions into a numbered list sorted by severity (Critical → Warning → Suggestion).
Walk through each suggestion **one at a time** using the flow below. If there is nothing to review,
report that and stop.

## Interactive Flow (for each suggestion)

Present the suggestion to the user:

```
### Suggestion N/Total — [severity] — [category] — `file:line`

**Issue:** <description>

**Proposed fix:**
<show the concrete code change — old vs new, as a PHP snippet when it clarifies the change>
```

Then ask using `AskUserQuestion`: "Apply this fix?" with options:

- **Yes** — apply the fix immediately using `Edit`, re-read the file to confirm it landed, then move
  to the next suggestion.
- **No** — do NOT apply the fix. Instead:
  1. Explain **why** this fix is recommended (the reasoning, potential consequences of not fixing).
  2. Ask again with `AskUserQuestion`: "Given this reasoning, should we apply this fix?" with
     Yes / No / Skip.
     - **Yes** — apply and move on.
     - **No** or **Skip** — skip this suggestion and move to the next one.

## Important Rules

- Process suggestions **strictly one at a time** — never batch multiple fixes.
- After applying a fix, re-read the file to verify the edit was applied correctly.
- Do NOT apply any fix without explicit user approval.
- Keep a running tally after each decision: "Applied: X / Skipped: Y / Remaining: Z".
- Never touch `src/Library/**` — it is generated; if a finding points there, skip it and say why.
- Do not run `make code-sniffer`, `make get-from-proto`, or any deploy commands as part of this flow.
- Respect this repo's conventions: `declare(strict_types=1);`, decorator pattern for retries,
  `TIExceptionFactory` for error mapping, namespace `ATreschilov\TinkoffInvestApiSdk\`.

## Final Summary

After processing all suggestions, output:

```
## Summary

### Applied (X issues)
- [file:line] — description

### Skipped by user (Y issues)
- [file:line] — description

### Disagreed & skipped (Z issues)
- [file:line] — reason the user disagreed
```

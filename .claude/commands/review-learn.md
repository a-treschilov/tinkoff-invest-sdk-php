---
description: Extract generalizable coding rules from the most recent /review output in this conversation and append them to Agent.md.
allowed-tools: Read, Edit
---

Extract coding rules from the most recent review in this conversation and save them to `Agent.md`.

## Step 1 — Read the current rules

Read `Agent.md` and note every bullet already in its "Coding Conventions" section.

## Step 2 — Extract candidates from the review

Look at the most recent `/review` output in this conversation. For each finding:
- Determine if it is **generalizable** (would apply to future code, not just the specific lines
  reviewed) — e.g. a decorator-pattern consistency rule, an exception-mapping convention — rather than
  a one-off mistake.
- Skip anything already covered by an existing bullet, and skip anything about `src/Library/**`
  (generated code is out of scope for hand-written conventions).

Distill each generalizable finding into a single bullet that leads with the rule, is specific enough
to apply unambiguously later, and matches the tone of the existing bullets.

## Step 3 — Confirm and save

Present each candidate using `AskUserQuestion`:

```
### Rule candidate N/Total

**Proposed bullet:**
- <the bullet text>

**Source finding:** <one-line summary of the review finding it was derived from>
```

Ask: "Add this rule to Agent.md?" with options:
- **Yes** — append to the "Coding Conventions" section and move on.
- **No / Skip** — skip and move on.

After all candidates are processed, print: Added: X rules / Skipped: Y rules.

## Important notes

- Never add duplicate rules.
- If there are no generalizable patterns in the review, say so and stop.

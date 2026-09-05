# Services

What is wrapped today, what is not, and how to add to it. Read
[architecture.md](architecture.md) first for the tuple contract.

## Implemented

Accessed via `TIClient` getters. Return types below are the **unwrapped** payloads the caller
receives after `BaseDecorator` strips the status — i.e. what the decorator's `@method` docblock
declares.

### `getUser()` → `UsersServiceDecorator` (1 method)

| Method | Returns |
|---|---|
| `getAccounts()` | `array<Account>` (plain PHP array, built by iterating the `RepeatedField`) |

### `getOperations()` → `OperationsServiceDecorator` (4 methods)

| Method | Returns |
|---|---|
| `getPortfolio(string $accountId)` | `PortfolioResponse` |
| `getOperations(string $accountId, ?DateTime $from, ?DateTime $to, ?int $state, ?string $figi)` | `RepeatedField` of `Operation` |
| `getOperationsByCursor(string $accountId, ?string $instrumentId, ?DateTime $from, ?DateTime $to, ?string $cursor, ?int $limit, ?array $operationTypes, ?int $state, ?bool $withoutCommissions, ?bool $withoutTrades, ?bool $withoutOvernights)` | `GetOperationsByCursorResponse` |
| `getWithdrawLimits(string $accountId)` | `WithdrawLimitsResponse` |

`getOperations()` defaults an omitted `$from` to `2010-01-01 00:00:00` and an omitted `$to` to now.

### `getInstruments()` → `InstrumentsServiceDecorator` (14 methods)

| Method | Returns |
|---|---|
| `getInstrumentBy(int $idType, ?string $classCode, string $id)` | `Instrument` |
| `getCurrencyBy(int $idType, ?string $classCode, string $id)` | `Currency\|null` |
| `getBondBy(int $idType, ?string $classCode, string $id)` | `Bond\|null` |
| `getShareBy(int $idType, ?string $classCode, string $id)` | `Share\|null` |
| `getFuturesBy(int $idType, ?string $classCode, string $id)` | `Future\|null` |
| `getCurrencies(?int $instrumentStatus = 1)` | `RepeatedField` |
| `getBonds(?int $instrumentStatus = 1)` | `RepeatedField` |
| `getShares(?int $instrumentStatus = 1)` | `RepeatedField` |
| `getFutures(?int $instrumentStatus = 1)` | `RepeatedField` |
| `getEtfs(?int $instrumentStatus = 1)` | `RepeatedField` |
| `getIndicatives()` | `RepeatedField` |
| `getBondCoupons(string $instrumentId, DateTime $from, DateTime $to)` | `RepeatedField` |
| `getBondEvents(DateTime $from, DateTime $to, string $instrumentId, int $eventType)` | `RepeatedField` |
| `getDividends(string $instrumentId, DateTime $from, DateTime $to)` | `RepeatedField` |

`$idType`: `0` undefined, `1` figi, `2` ticker, `3` instrument UID.
`$instrumentStatus` defaults to `1` (base instruments only, not the full list).

There is **no `getStocks()`** — the shares accessor is `getShares()` / `getShareBy()`.

### `getMarketData()` → `MarketDataServiceDecorator` (2 methods)

| Method | Returns |
|---|---|
| `getCandles(DateTime $from, DateTime $to, int $interval, ?string $instrumentId)` | `RepeatedField` of `HistoricCandle` |
| `getLastPrices(array $instrumentId)` | `RepeatedField` of `LastPrice` |

To regenerate this matrix from source rather than trusting it:

```bash
grep -n "public function" src/Services/*Service.php
grep -n "@method" src/Services/*Decorator.php
```

## Not implemented

Generated clients exist under `src/Library/Tinkoff/Invest/V1/` but have no hand-written wrapper:

- `OrdersServiceClient` — order placement, cancellation, order state
- `StopOrdersServiceClient` — stop orders
- `SandboxServiceClient` — sandbox accounts and money
- `SignalServiceClient` — signals
- `MarketDataStreamServiceClient`, `OperationsStreamServiceClient`, `OrdersStreamServiceClient` —
  all streaming endpoints

Streaming does **not** fit the current architecture: `BaseDecorator` assumes a unary
`[$payload, $status]` tuple from `->wait()`. Wrapping a stream needs a different decorator, not a new
method on the existing one.

Callers that need an unwrapped endpoint today can drive the generated client directly — see
"Advance usage" in [../README.md](../README.md):

```php
$client = new UsersServiceClient($tiClient->getHostname(), $tiClient->getApiConfig());
```

That bypasses retry and exception mapping entirely; you get the raw tuple.

## Adding a method to an existing service

1. **Confirm the RPC exists** in the generated client:
   `grep -n "public function" src/Library/Tinkoff/Invest/V1/<Name>ServiceClient.php`.
2. **Add the wrapper** to `src/Services/<Name>Service.php`. Accept primitives and `\DateTime`, not
   protobuf types — converting is the wrapper's job:
   ```php
   /**
    * @param string $accountId Идентификатор счёта
    * @return array
    */
   public function getWithdrawLimits(string $accountId): array
   {
       $request = new WithdrawLimitsRequest();
       $request->setAccountId($accountId);

       /** @var WithdrawLimitsResponse $response */
       list($response, $status) = $this->client->GetWithdrawLimits($request, [], TIClient::SPECIAL_OPTIONS)
           ->wait();

       return [$response, $status];
   }
   ```
   Either request style is idiomatic here: constructor array (`new GetCandlesRequest([...])`) or
   setters. Timestamps are always `new Timestamp(['seconds' => $dt->getTimestamp()])`.
3. **Return the tuple** `[$payload, $status]`. Use `?->` when reaching into the response —
   `$response` is `null` on failure. Never inspect `$status`, never throw.
4. **Add the `@method` line** to `src/Services/<Name>ServiceDecorator.php`'s class docblock with the
   *unwrapped* return type. This is invariant 3 and it is the step that gets forgotten; without it
   the method is invisible to IDEs, static analysis, and other agents.
5. Nothing to do for retry — the decorator already covers it.
6. Update `CHANGELOG.md` + `composer.json` version (invariant 4), and the support matrix in
   `README.md` if the endpoint is listed there.

## Adding a whole service

1. `src/Services/<Name>Service.php` — constructor takes `TIClient` and builds the generated client:
   `new <Name>ServiceClient($client->getHostname(), $client->getApiConfig());`
2. `src/Services/<Name>ServiceDecorator.php` — extend `BaseDecorator`, call
   `parent::__construct($client)`, set `$this->service = new <Name>Service($client);`, add the
   pass-through `__call`, and put every method in the class `@method` docblock.
3. `src/TIClient.php` — add a `private <Name>ServiceDecorator|null $xService = null;` property and a
   lazy getter **with an explicit return type**, matching the existing four.
4. Add the service and its methods to the tables above.

## Known gaps

- `OperationsServiceDecorator` is missing a `@method` line for `getOperationsByCursor()` — the
  method works (it goes through `__call`) but is undeclared, which is exactly what invariant 3
  guards against.
- `OperationsService::getOperations()` calls `$response->getOperations()` without the null-safe
  operator, unlike every other accessor in the codebase. On a failed call that is a PHP warning on
  `null`, the same class of bug fixed for `getAccounts()` in v0.3.16.

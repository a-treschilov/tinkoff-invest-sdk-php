# T-Bank Invest PHP SDK

Unofficial PHP SDK for T-Bank Invest API V2. See official API [documentation](https://developer.tbank.ru/invest/intro/intro)

## Installation

It's recommended that you use Composer to install.

```bash
$ composer require a.treschilov/tinkoff-invest-api-sdk
```

### SDK requires:

- PHP 8.3 or newer
- grpc extension

### Install grpc

```
sudo pecl install grpc
```

Add to php.ini

```
extension=grpc.so
```

## How to use

### Basic Usage (limited methods support)

```php
<?php

declare(strict_types=1);

use ATreschilov\TinkoffInvestApiSdk\Exceptions\TIException as TIException;
use ATreschilov\TinkoffInvestApiSdk\TIClient;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Your personal Tinkoff Invest token
 *
 * @see https://tinkoff.github.io/investAPI/token/
 */
$token = '<Your Tinkoff Invest Account Token>';
$options = [
    'isRateLimitRetry' => false
];

$tiClient = new TIClient($token, $options);
try {
    $tiAccounts = $tiClient->getUser()->getAccounts();

    $accounts = [];
    foreach ($tiAccounts as $account) {
        $accounts[] = [
            'id' => $account->getId(),
            'name' => $account->getName(),
            'type' => $account->getType(),
            'status' => $account->getStatus(),
            'openedDate' => $account->getOpenedDate()->getSeconds(),
            'closedDate' => $account->getClosedDate()->getSeconds()
        ];
    }

    echo '<pre>' . print_r($accounts, true) . '</pre>';
} catch (TIException $e) {
    echo $e->getCode() . '. ' . $e->getMessage();
}
```

#### Basic usage methods support

- [Users](https://developer.tbank.ru/invest/services/accounts/users)
  - &#10004; GetAccounts
  - &#10006; GetMarginAttributes
  - &#10006; GetUserTariff
  - &#10006; GetInfo
- [Instruments](https://developer.tbank.ru/invest/services/instruments/head-instruments)
  - &#10006; TradingSchedules
  - &#10004; BondBy
  - &#10004; Bonds
  - &#10004; GetBondCoupons
  - &#10004; GetBondEvents
  - &#10004; CurrencyBy
  - &#10004; Currencies
  - &#10006; EtfBy
  - &#10004; Etfs
  - &#10004; FutureBy
  - &#10004; Futures
  - &#10006; OptionBy
  - &#10006; Options
  - &#10006; OptionsBy
  - &#10004; ShareBy
  - &#10004; Shares
  - &#10004; Indicatives
  - &#10006; GetAccruedInterests
  - &#10006; GetFuturesMargin
  - &#10004; GetInstrumentBy
  - &#10004; GetDividends
  - &#10006; GetAssetBy
  - &#10006; GetAssets
  - &#10006; GetFavorites
  - &#10006; EditFavorites
  - &#10006; CreateFavoriteGroup
  - &#10006; DeleteFavoriteGroup
  - &#10006; GetFavoriteGroups
  - &#10006; GetCountries
  - &#10006; FindInstrument
  - &#10006; GetBrands
  - &#10006; GetBrandBy
  - &#10006; GetAssetFundamentals
  - &#10006; GetAssetReports
  - &#10006; GetConsensusForecasts
  - &#10006; GetForecastBy
  - &#10006; GetRiskRates
- [OrdersStream](https://developer.tbank.ru/invest/services/orders/methods)
  - &#10006; TradesStream
  - &#10006; OrderStateStream
- [Orders](https://developer.tbank.ru/invest/services/orders/methods)
  - &#10006; PostOrder
  - &#10006; PostOrderAsync
  - &#10006; CancelOrder
  - &#10006; GetOrderState
  - &#10006; GetOrders
  - &#10006; ReplaceOrder
  - &#10006; GetMaxLots
  - &#10006; GetOrderPrice
- [Operations](https://developer.tbank.ru/invest/services/operations/methods)
  - &#10004; GetOperations
  - &#10004; GetPortfolio
  - &#10006; GetPositions
  - &#10004; GetWithdrawLimits
  - &#10006; GetBrokerReport
  - &#10006; GetDividendsForeignIssuer
  - &#10006; GetOperationsByCursor
- [OperationsStream](https://developer.tbank.ru/invest/services/operations/methods)
  - &#10006; PortfolioStream
  - &#10006; PositionsStream
- [MarketData](https://developer.tbank.ru/invest/services/quotes/marketdata)
  - &#10004; GetCandles
  - &#10004; GetLastPrices
  - &#10006; GetOrderBook
  - &#10006; GetTradingStatus
  - &#10006; GetTradingStatuses
  - &#10006; GetLastTrades
  - &#10006; GetClosePrices
  - &#10006; GetTechAnalysis
  - &#10006; GetMarketValues
- [MarketDataStream](https://developer.tbank.ru/invest/services/quotes/marketdata#marketdatastreamservice)
  - &#10006; MarketDataStream
  - &#10006; MarketDataServerSideStream
- [StopOrders](https://developer.tbank.ru/invest/services/stop-orders/stoporders)
  - &#10006; PostStopOrder
  - &#10006; GetStopOrders
  - &#10006; CancelStopOrder
- [Signals](https://developer.tbank.ru/invest/services/signals/head-signals)
  - &#10006; GetStrategies
  - &#10006; GetSignals
- [Sandbox](https://developer.tbank.ru/invest/intro/developer/sandbox/)
  - &#10006; OpenSandboxAccount
  - &#10006; GetSandboxAccounts
  - &#10006; CloseSandboxAccount
  - &#10006; PostSandboxOrder
  - &#10006; PostSandboxOrderAsync
  - &#10006; ReplaceSandboxOrder
  - &#10006; GetSandboxOrders
  - &#10006; CancelSandboxOrder
  - &#10006; GetSandboxOrderState
  - &#10006; GetSandboxPositions
  - &#10006; GetSandboxOperations
  - &#10006; GetSandboxOperationsByCursor
  - &#10006; GetSandboxPortfolio
  - &#10006; SandboxPayIn
  - &#10006; GetSandboxWithdrawLimits
  - &#10006; GetSandboxMaxLots

### Advanced usage (full methods support)

```php
<?php

declare(strict_types=1);

use ATreschilov\TinkoffInvestApiSdk\TIClient;
use Tinkoff\Invest\V1\Account;
use Tinkoff\Invest\V1\GetAccountsRequest;
use Tinkoff\Invest\V1\GetAccountsResponse;
use Tinkoff\Invest\V1\UsersServiceClient;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Your personal T-Bank Invest token
 *
 * @see https://developer.tbank.ru/invest/intro/intro/token
 */
$token = '<Your T-Bank Invest Account Token>';

$tiClient = new TIClient($token);
$userServiceClient = new UsersServiceClient($tiClient->getHostname(), $tiClient->getApiConfig());
$request = new GetAccountsRequest();
/** @var GetAccountsResponse $response */
list($response, $status) = $userServiceClient->GetAccounts($request)->wait();

if ($status->code !== 0) {
    echo '<pre>' . print_r($status, true) . '</pre>';
    return;
}

$accounts = [];
/** @var Account $account */
foreach ($response->getAccounts() as $account) {
    $accounts[] = [
        'id' => $account->getId(),
        'name' => $account->getName(),
        'type' => $account->getType(),
        'status' => $account->getStatus(),
        'openedDate' => $account->getOpenedDate()->getSeconds(),
        'closedDate' => $account->getClosedDate()->getSeconds()
    ];
}

echo '<pre>' . print_r($accounts, true) . '</pre>';
```

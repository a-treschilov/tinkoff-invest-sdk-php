# Tinkoff Invest PHP SDK

Unofficial PHP SDK for Tinkoff invest API V2. See official API [documentation](https://tinkoff.github.io/investAPI/)

## Installation
It's recommended that you use Composer to install.

```bash
$ composer require a.treschilov/tinkoff-invest-api-sdk
```

### SDK requires:
- PHP 8.0 or newer
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

$tiClient = new TIClient($token);
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
* [User](https://tinkoff.github.io/investAPI/users/)
  * &#10004; getAccounts
  * &#10006; GetMarginAttributes
  * &#10006; GetUserTariff
  * &#10006; GetInfo
* [Instruments](https://tinkoff.github.io/investAPI/instruments/)
  * &#10006; TradingSchedules
  * &#10006; BondBy
  * &#10004; Bonds
  * &#10006; CurrencyBy
  * &#10006; Currencies
  * &#10006; EtfBy
  * &#10006; Etfs
  * &#10006; FutureBy
  * &#10004; Futures
  * &#10006; ShareBy
  * &#10006; Shares
  * &#10006; GetAccruedInterests
  * &#10006; GetFuturesMargin
  * &#10004; GetInstrumentBy
  * &#10006; GetDividends
* [OrdersStream](https://tinkoff.github.io/investAPI/orders/)
  * &#10006; TradesStream
* [Orders](https://tinkoff.github.io/investAPI/orders/)
  * &#10006; PostOrder
  * &#10006; CancelOrder
  * &#10006; GetOrderState
  * &#10006; GetOrders
* [Operations](https://tinkoff.github.io/investAPI/operations/)
  * &#10004; GetOperations
  * &#10004; GetPortfolio
  * &#10006; GetPositions
  * &#10006; GetWithdrawLimits
  * &#10006; GetBrokerReport
* [MarketData](https://tinkoff.github.io/investAPI/marketdata/)
  * &#10004; GetCandles
  * &#10006; GetLastPrices
  * &#10006; GetOrderBook
  * &#10006; GetTradingStatus
* [MarketDataStream](https://tinkoff.github.io/investAPI/marketdata/#marketdatastreamservice)
  * &#10006; MarketDataStream
* [StopOrders](https://tinkoff.github.io/investAPI/stoporders/)
  * &#10006; PostStopOrder
  * &#10006; GetStopOrders
  * &#10006; CancelStopOrder
* [Sandbox](https://tinkoff.github.io/investAPI/head-sandbox/)
  * &#10006; OpenSandboxAccount
  * &#10006; GetSandboxAccounts
  * &#10006; CloseSandboxAccount
  * &#10006; PostSandboxOrder
  * &#10006; GetSandboxOrders
  * &#10006; CancelSandboxOrder
  * &#10006; GetSandboxOrderState
  * &#10006; GetSandboxPositions
  * &#10006; GetSandboxOperations
  * &#10006; GetSandboxPortfolio
  * &#10006; SandboxPayIn

### Advance usage (full methods support)
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
 * Your personal Tinkoff Invest token
 *
 * @see https://tinkoff.github.io/investAPI/token/
 */
$token = '<Your Tinkoff Invest Account Token>';

$tiClient = new TIClient($token);
$userServiceClient = new UsersServiceClient($tiClient->getHostname(), $tiClient->getOptions());
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
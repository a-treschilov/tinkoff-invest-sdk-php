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
$token = '<TINKOFF INVEST ACCOUNT TOKEN>';

$tiClient = new TIClient($token);
$userServiceClient = new UsersServiceClient($tiClient->getHostname(), $tiClient->getOptions($token));
$request = new GetAccountsRequest();
/** @var GetAccountsResponse $response */
list($response, $status) = $userServiceClient->GetAccounts($request)->wait();

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

echo '<pre>'.print_r($accounts, true).'</pre>';
```
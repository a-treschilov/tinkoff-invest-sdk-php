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

echo '<pre>' . print_r($accounts, true) . '</pre>';

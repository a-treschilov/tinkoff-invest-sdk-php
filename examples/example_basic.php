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

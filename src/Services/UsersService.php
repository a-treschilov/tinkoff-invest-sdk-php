<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Services;

use ATreschilov\TinkoffInvestApiSdk\Exceptions\TIException;
use ATreschilov\TinkoffInvestApiSdk\TIClient;
use Tinkoff\Invest\V1\Account;
use Tinkoff\Invest\V1\GetAccountsRequest;
use Tinkoff\Invest\V1\GetAccountsResponse;
use Tinkoff\Invest\V1\UsersServiceClient;

class UsersService
{
    private UsersServiceClient $usersServiceClient;

    public function __construct(TIClient $client)
    {
        $this->usersServiceClient = new UsersServiceClient($client->getHostname(), $client->getOptions());
    }

    /**
     * @return Account[]
     * @throws TIException
     */
    public function getAccounts(): array
    {
        $request = new GetAccountsRequest();
        /** @var GetAccountsResponse $response */
        list($response, $status) = $this->usersServiceClient->GetAccounts($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->details);
        }

        $accounts = [];
        /** @var Account $account */
        foreach ($response->getAccounts()->getIterator() as $account) {
            $accounts[] = $account;
        }

        return $accounts;
    }
}

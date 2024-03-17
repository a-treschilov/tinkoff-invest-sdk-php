<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Services;

use ATreschilov\TinkoffInvestApiSdk\TIClient;
use Tinkoff\Invest\V1\Account;

/**
 * @method array<Account> getAccounts()
 */
class UsersServiceDecorator extends BaseDecorator
{
    public function __construct(TIClient $client)
    {
        parent::__construct($client);
        $this->service = new UsersService($client);
    }

    public function __call($method, $parameters)
    {
        return parent::__call($method, $parameters);
    }
}

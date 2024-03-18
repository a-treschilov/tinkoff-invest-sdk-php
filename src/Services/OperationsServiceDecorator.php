<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Services;

use ATreschilov\TinkoffInvestApiSdk\TIClient;
use Google\Protobuf\Internal\RepeatedField;
use Tinkoff\Invest\V1\PortfolioResponse;
use Tinkoff\Invest\V1\WithdrawLimitsResponse;

/**
 * @method PortfolioResponse getPortfolio(string $accountId)
 * @method RepeatedField getOperations(string $accountId, ?\DateTime $from = null, ?\DateTime $to = null, ?int $state = null, ?string $figi = null)
 * @method WithdrawLimitsResponse getWithdrawLimits(string $accountId)
 */
class OperationsServiceDecorator extends BaseDecorator
{
    public function __construct(TIClient $client)
    {
        parent::__construct($client);
        $this->service = new OperationsService($client);
    }

    public function __call($method, $parameters)
    {
        return parent::__call($method, $parameters);
    }
}

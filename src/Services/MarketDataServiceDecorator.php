<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Services;

use ATreschilov\TinkoffInvestApiSdk\TIClient;
use Google\Protobuf\Internal\RepeatedField;

/**
 * @method RepeatedField getCandles(\DateTime $from, \DateTime $to, int $interval, ?string $instrumentId)
 * @method RepeatedField getLastPrices(array $instrumentId)
 */
class MarketDataServiceDecorator extends BaseDecorator
{
    public function __construct(TIClient $client)
    {
        parent::__construct($client);
        $this->service = new MarketDataService($client);
    }

    public function __call($method, $parameters)
    {
        return parent::__call($method, $parameters);
    }
}

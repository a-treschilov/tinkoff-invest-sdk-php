<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Services;

use ATreschilov\TinkoffInvestApiSdk\Exceptions\TIException;
use ATreschilov\TinkoffInvestApiSdk\TIClient;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Timestamp;
use JetBrains\PhpStorm\Deprecated;
use Tinkoff\Invest\V1\GetCandlesRequest;
use Tinkoff\Invest\V1\GetCandlesResponse;
use Tinkoff\Invest\V1\GetLastPricesRequest;
use Tinkoff\Invest\V1\GetLastPricesResponse;
use Tinkoff\Invest\V1\MarketDataServiceClient;

class MarketDataService
{
    private MarketDataServiceClient $client;

    public function __construct(TIClient $client)
    {
        $this->client = new MarketDataServiceClient($client->getHostName(), $client->getApiConfig());
    }

    /**
     * @param \DateTime $from Начало запрашиваемого периода
     * @param \DateTime $to Окончание запрашиваемого периода
     * @param int $interval Интервал запрошенных свечей
     * @param string|null $instrumentId Идентификатор инструмента, принимает значение figi или instrument_uid.
     * @return array
     */
    public function getCandles(
        \DateTime $from,
        \DateTime $to,
        int $interval,
        ?string $instrumentId
    ): array {
        $request = new GetCandlesRequest([
            'from' => new Timestamp(['seconds' => $from->getTimestamp()]),
            'to' => new Timestamp(['seconds' => $to->getTimestamp()]),
            'interval' => $interval,
            'instrument_id' => $instrumentId
        ]);

        /** @var GetCandlesResponse $response */
        list($response, $status) = $this->client->GetCandles($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        return [$response?->getCandles(), $status];
    }

    /**
     * @param array $instrumentId Массив идентификаторов инструмента, принимает значения figi или instrument_uid.
     * @return array
     */
    public function getLastPrices(array $instrumentId): array
    {
        $request = new GetLastPricesRequest([
            'instrument_id' => $instrumentId
        ]);

        /** @var GetLastPricesResponse $response */
        list($response, $status) = $this->client->GetLastPrices($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        return [$response?->getLastPrices(), $status];
    }
}

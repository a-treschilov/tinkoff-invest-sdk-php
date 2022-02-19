<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Services;

use ATreschilov\TinkoffInvestApiSdk\Exceptions\TIException;
use ATreschilov\TinkoffInvestApiSdk\TIClient;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Timestamp;
use Tinkoff\Invest\V1\GetCandlesRequest;
use Tinkoff\Invest\V1\GetCandlesResponse;
use Tinkoff\Invest\V1\MarketDataServiceClient;

class MarketDataService
{
    private MarketDataServiceClient $client;

    public const CANDLE_INTERVAL_1_MIN = 1;
    public const CANDLE_INTERVAL_5_MIN = 2;
    public const CANDLE_INTERVAL_15_MIN = 3;
    public const CANDLE_INTERVAL_HOUR = 4;
    public const CANDLE_INTERVAL_DAY = 5;

    public function __construct(TIClient $client)
    {
        $this->client = new MarketDataServiceClient($client->getHostName(), $client->getOptions());
    }

    /**
     * @param string $figi Figi-идентификатор инструмента
     * @param \DateTime $from Начало запрашиваемого периода
     * @param \DateTime $to Окончание запрашиваемого периода
     * @param int $interval Интервал запрошенных свечей
     * @return RepeatedField Массив объектов HistoricCandle
     * @throws TIException
     */
    public function getCandles(string $figi, \DateTime $from, \DateTime $to, int $interval): RepeatedField
    {
        $request = new GetCandlesRequest([
            'figi' => $figi,
            'from' => new Timestamp(['seconds' => $from->getTimestamp()]),
            'to' => new Timestamp(['seconds' => $to->getTimestamp()]),
            'interval' => $interval
        ]);

        /** @var GetCandlesResponse $response */
        list($response, $status) = $this->client->GetCandles($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            throw new TIException($status->metadata['message'][0], (int)$status->code);
        }
        return $response->getCandles();
    }
}

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
     * @param string|null $figi Figi-идентификатор инструмента
     * @param \DateTime $from Начало запрашиваемого периода
     * @param \DateTime $to Окончание запрашиваемого периода
     * @param int $interval Интервал запрошенных свечей
     * @param string|null $instrumentId Идентификатор инструмента, принимает значение figi или instrument_uid.
     * @return RepeatedField Массив объектов HistoricCandle
     * @throws TIException
     */
    public function getCandles(
        #[Deprecated]
        ?string $figi,
        \DateTime $from,
        \DateTime $to,
        int $interval,
        ?string $instrumentId
    ): RepeatedField {
        $request = new GetCandlesRequest([
            'figi' => $figi,
            'from' => new Timestamp(['seconds' => $from->getTimestamp()]),
            'to' => new Timestamp(['seconds' => $to->getTimestamp()]),
            'interval' => $interval,
            'instrument_id' => $instrumentId
        ]);

        /** @var GetCandlesResponse $response */
        list($response, $status) = $this->client->GetCandles($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->code);
        }
        return $response->getCandles();
    }

    /**
     * @param array $instrumentId Массив идентификаторов инструмента, принимает значения figi или instrument_uid.
     * @return RepeatedField Массив объектов LastPrice
     * @throws TIException
     */
    public function getLastPrices(array $instrumentId): RepeatedField
    {
        $request = new GetLastPricesRequest([
            'instrument_id' => $instrumentId
        ]);

        /** @var GetLastPricesResponse $response */
        list($response, $status) = $this->client->GetLastPrices($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->code);
        }
        return $response->getLastPrices();
    }
}

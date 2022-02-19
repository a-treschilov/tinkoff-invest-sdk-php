<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Services;

use ATreschilov\TinkoffInvestApiSdk\Exceptions\TIException;
use ATreschilov\TinkoffInvestApiSdk\TIClient;
use Google\Protobuf\Internal\RepeatedField;
use Tinkoff\Invest\V1\BondsResponse;
use Tinkoff\Invest\V1\Instrument;
use Tinkoff\Invest\V1\InstrumentRequest;
use Tinkoff\Invest\V1\InstrumentResponse;
use Tinkoff\Invest\V1\InstrumentsRequest;
use Tinkoff\Invest\V1\InstrumentsServiceClient;

class InstrumentsService
{
    private InstrumentsServiceClient $client;

    public function __construct(TIClient $client)
    {
        $this->client = new InstrumentsServiceClient($client->getHostname(), $client->getOptions());
    }

    /**
     * @param int $idType (1 - figi, 2 - ticker, 0 - значение не определено)
     * @param string|null $classCode
     * @param string $id
     * @return Instrument
     */
    public function getInstrumentBy(int $idType, ?string $classCode, string $id): Instrument
    {
        $request = new InstrumentRequest();
        $request->setIdType($idType);
        $request->setClassCode($classCode);
        $request->setId($id);

        /** @var InstrumentResponse $response */
        list($response, $status) = $this->client->GetInstrumentBy($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            throw new TIException($status->metadata['message'][0], (int)$status->code);
        }
        return $response->getInstrument();
    }

    /**
     * @param int|null $instrumentStatus (1-Инструменты доступные для торговли через TINKOFF API, 2 - Все инструменты)
     * @return RepeatedField Bond[]
     * @throws TIException
     */
    public function getBonds(?int $instrumentStatus = 1): RepeatedField
    {
        $request = new InstrumentsRequest();
        $request->setInstrumentStatus($instrumentStatus);

        /** @var BondsResponse $response */
        list($response, $status) = $this->client->Bonds($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            throw new TIException($status->metadata['message'][0], (int)$status->code);
        }

        return $response->getInstruments();
    }

    /**
     * @param int|null $instrumentStatus (1-Инструменты доступные для торговли через TINKOFF API, 2 - Все инструменты)
     * @return RepeatedField
     * @throws TIException
     */
    public function getFutures(?int $instrumentStatus = 1): RepeatedField
    {
        $request = new InstrumentsRequest();
        $request->setInstrumentStatus($instrumentStatus);

        /** @var BondsResponse $response */
        list($response, $status) = $this->client->Futures($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            throw new TIException($status->metadata['message'][0], (int)$status->code);
        }

        return $response->getInstruments();
    }
}

<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Services;

use ATreschilov\TinkoffInvestApiSdk\Exceptions\TIException;
use ATreschilov\TinkoffInvestApiSdk\TIClient;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Timestamp;
use Tinkoff\Invest\V1\Bond;
use Tinkoff\Invest\V1\BondResponse;
use Tinkoff\Invest\V1\BondsResponse;
use Tinkoff\Invest\V1\CurrenciesResponse;
use Tinkoff\Invest\V1\Currency;
use Tinkoff\Invest\V1\CurrencyResponse;
use Tinkoff\Invest\V1\EtfsResponse;
use Tinkoff\Invest\V1\Future;
use Tinkoff\Invest\V1\FutureResponse;
use Tinkoff\Invest\V1\GetBondCouponsRequest;
use Tinkoff\Invest\V1\GetBondCouponsResponse;
use Tinkoff\Invest\V1\GetBondEventsRequest;
use Tinkoff\Invest\V1\GetBondEventsRequest\EventType;
use Tinkoff\Invest\V1\GetBondEventsResponse;
use Tinkoff\Invest\V1\GetDividendsRequest;
use Tinkoff\Invest\V1\GetDividendsResponse;
use Tinkoff\Invest\V1\Instrument;
use Tinkoff\Invest\V1\InstrumentRequest;
use Tinkoff\Invest\V1\InstrumentResponse;
use Tinkoff\Invest\V1\InstrumentsRequest;
use Tinkoff\Invest\V1\InstrumentsServiceClient;
use Tinkoff\Invest\V1\Share;
use Tinkoff\Invest\V1\ShareResponse;
use Tinkoff\Invest\V1\SharesResponse;

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
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->details);
        }
        return $response->getInstrument();
    }

    /**
     * @param int $idType (1 - figi, 2 - ticker, 0 - значение не определено)
     * @param string|null $classCode Идентификатор class_code. Обязателен при id_type = ticker
     * @param string $id Идентификатор запрашиваемого инструмента
     * @return Currency|null
     * @throws TIException
     */
    public function getCurrencyBy(int $idType, ?string $classCode, string $id): Currency|null
    {
        $request = new InstrumentRequest();
        $request->setIdType($idType);
        $request->setClassCode($classCode);
        $request->setId($id);

        /** @var CurrencyResponse $response */
        list($response, $status) = $this->client->CurrencyBy($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->details);
        }
        return $response->getInstrument();
    }

    /**
     * @param int|null $instrumentStatus (1-Инструменты доступные для торговли через TINKOFF API, 2 - Все инструменты)
     * @return RepeatedField Currency[]
     * @throws TIException
     */
    public function getCurrencies(?int $instrumentStatus = 1): RepeatedField
    {
        $request = new InstrumentsRequest();
        $request->setInstrumentStatus($instrumentStatus);

        /** @var CurrenciesResponse $response */
        list($response, $status) = $this->client->Currencies($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->details);
        }

        return $response->getInstruments();
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
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->details);
        }

        return $response->getInstruments();
    }

    /**
     * @param int $idType (1 - figi, 2 - ticker, 0 - значение не определено)
     * @param string|null $classCode Идентификатор class_code. Обязателен при id_type = ticker
     * @param string $id
     * @return Bond|null
     * @throws TIException
     */
    public function getBondBy(int $idType, ?string $classCode, string $id): Bond|null
    {
        $request = new InstrumentRequest();
        $request->setIdType($idType);
        $request->setClassCode($classCode);
        $request->setId($id);

        /** @var BondResponse $response */
        list($response, $status) = $this->client->BondBy($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->details);
        }
        return $response->getInstrument();
    }

    /**
     * @param string $instrumentId
     * @param \DateTime $from
     * @param \DateTime $to
     * @return RepeatedField Coupon Collection
     * @throws TIException
     */
    public function getBondCoupons(string $instrumentId, \DateTime $from, \DateTime $to): RepeatedField
    {
        $request = new GetBondCouponsRequest();
        $request->setInstrumentId($instrumentId);
        $request->setFrom(new Timestamp(['seconds' => $from->getTimestamp()]));
        $request->setTo(new Timestamp(['seconds' => $to->getTimestamp()]));

        /** @var GetBondCouponsResponse $response */
        list($response, $status) = $this->client->GetBondCoupons($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->details);
        }

        return $response->getEvents();
    }

    /**
     * @param \DateTime $from Начало запрашиваемого периода
     * @param \DateTime $to Окончание запрашиваемого периода
     * @param string $instrumentId Идентификатор инструмента Figi или instrument_uid
     * @param int $eventType Тип события EventType
     * @return RepeatedField
     * @throws TIException
     */
    public function getBondEvents(
        \DateTime $from,
        \DateTime $to,
        string $instrumentId,
        int $eventType
    ): RepeatedField {
        $request = new GetBondEventsRequest();
        $request->setInstrumentId($instrumentId);
        $request->setFrom(new Timestamp(['seconds' => $from->getTimestamp()]));
        $request->setTo(new Timestamp(['seconds' => $to->getTimestamp()]));
        $request->setType($eventType);

        /** @var GetBondEventsResponse $response */
        list($response, $status) = $this->client->GetBondEvents($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->details);
        }

        return $response->getEvents();
    }

    /**
     * @param string $instrumentId
     * @param \DateTime $from
     * @param \DateTime $to
     * @return RepeatedField Dividend[]
     * @throws TIException
     */
    public function getDividends(string $instrumentId, \DateTime $from, \DateTime $to): RepeatedField
    {
        $request = new GetDividendsRequest();
        $request->setInstrumentId($instrumentId);
        $request->setFrom(new Timestamp(['seconds' => $from->getTimestamp()]));
        $request->setTo(new Timestamp(['seconds' => $to->getTimestamp()]));

        /** @var GetDividendsResponse $response */
        list($response, $status) = $this->client->GetDividends($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->details);
        }

        return $response->getDividends();
    }

    /**
     * @param int|null $instrumentStatus (1-Инструменты доступные для торговли через TINKOFF API, 2 - Все инструменты)
     * @return RepeatedField Bonds Collection
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
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->details);
        }

        return $response->getInstruments();
    }

    /**
     * @param int $idType (1 - figi, 2 - ticker, 0 - значение не определено)
     * @param string|null $classCode Идентификатор class_code. Обязателен при id_type = ticker
     * @param string $id
     * @return Future|null
     * @throws TIException
     */
    public function getFuturesBy(int $idType, ?string $classCode, string $id): Future|null
    {
        $request = new InstrumentRequest();
        $request->setIdType($idType);
        $request->setClassCode($classCode);
        $request->setId($id);

        /** @var FutureResponse $response */
        list($response, $status) = $this->client->FutureBy($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->details);
        }
        return $response->getInstrument();
    }

    /**
     * @param int|null $instrumentStatus (1-Инструменты доступные для торговли через TINKOFF API, 2 - Все инструменты)
     * @return RepeatedField Shares Collection
     * @throws TIException
     */
    public function getShares(?int $instrumentStatus = 1): RepeatedField
    {
        $request = new InstrumentsRequest();
        $request->setInstrumentStatus($instrumentStatus);

        /** @var SharesResponse $response */
        list($response, $status) = $this->client->Shares($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->details);
        }

        return $response->getInstruments();
    }

    /**
     * @param int $idType (1 - figi, 2 - ticker, 0 - значение не определено)
     * @param string|null $classCode Идентификатор class_code. Обязателен при id_type = ticker
     * @param string $id Идентификатор запрашиваемого инструмента
     * @return Share|null
     * @throws TIException
     */
    public function getShareBy(int $idType, ?string $classCode, string $id): Share|null
    {
        $request = new InstrumentRequest();
        $request->setIdType($idType);
        $request->setClassCode($classCode);
        $request->setId($id);

        /** @var ShareResponse $response */
        list($response, $status) = $this->client->ShareBy($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->details);
        }
        return $response->getInstrument();
    }

    /**
     * @param int|null $instrumentStatus (1-Инструменты доступные для торговли через TINKOFF API, 2 - Все инструменты)
     * @return RepeatedField Etfs Collection
     * @throws TIException
     */
    public function getEtfs(?int $instrumentStatus = 1): RepeatedField
    {
        $request = new InstrumentsRequest();
        $request->setInstrumentStatus($instrumentStatus);

        /** @var EtfsResponse $response */
        list($response, $status) = $this->client->Etfs($request, [], TIClient::SPECIAL_OPTIONS)
            ->wait();

        if ($status->code !== 0) {
            $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
            throw new TIException($message, (int)$status->details);
        }

        return $response->getInstruments();
    }
}

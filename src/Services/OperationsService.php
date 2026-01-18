<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Services;

use ATreschilov\TinkoffInvestApiSdk\TIClient;
use Google\Protobuf\Timestamp;
use Tinkoff\Invest\V1\GetOperationsByCursorRequest;
use Tinkoff\Invest\V1\GetOperationsByCursorResponse;
use Tinkoff\Invest\V1\OperationsRequest;
use Tinkoff\Invest\V1\OperationsResponse;
use Tinkoff\Invest\V1\OperationsServiceClient;
use Tinkoff\Invest\V1\PortfolioRequest;
use Tinkoff\Invest\V1\PortfolioResponse;
use Tinkoff\Invest\V1\WithdrawLimitsRequest;
use Tinkoff\Invest\V1\WithdrawLimitsResponse;

class OperationsService
{
    private OperationsServiceClient $client;

    public function __construct(TIClient $client)
    {
        $this->client = new OperationsServiceClient($client->getHostname(), $client->getApiConfig());
    }

    public function getPortfolio(string $accountId): array
    {
        $request = new PortfolioRequest();
        $request->setAccountId($accountId);

        /** @var PortfolioResponse $response */
        list($response, $status) = $this->client->GetPortfolio($request, [], TIClient::SPECIAL_OPTIONS)->wait();

        return [$response, $status];
    }

    /**
     * @param string $accountId Идентификатор счёта клиента
     * @param \DateTime|null $from Начало периода (по UTC)
     * @param \DateTime|null $to Окончание периода (по UTC)
     * @param int|null $state Статус запрашиваемых операций
     * @param string|null $figi Figi-идентификатор инструмента для фильтрации
     * @return array
     */
    public function getOperations(
        string $accountId,
        ?\DateTime $from = null,
        ?\DateTime $to = null,
        ?int $state = null,
        ?string $figi = null
    ): array {
        $from = $from ?? new \DateTime('2010-01-01 00:00:00');
        $to = $to ?? new \DateTime();

        $request = new OperationsRequest();
        $request->setAccountId($accountId);
        $request->setFrom(new Timestamp(['seconds' => $from->getTimestamp()]));
        $request->setTo(new Timestamp(['seconds' => $to->getTimestamp()]));
        if (null !== $state) {
            $request->setState($state);
        }
        if (null !== $figi) {
            $request->setState($figi);
        }

        /** @var OperationsResponse $response */
        list($response, $status) = $this->client->GetOperations($request, [], TIClient::SPECIAL_OPTIONS)->wait();

        return [$response->getOperations(), $status];
    }

    /**
     * @param string $accountId Идентификатор счёта клиента (обязательный)
     * @param string|null $instrumentId Идентификатор инструмента (FIGI или UID)
     * @param \DateTime|null $from Начало периода (по UTC)
     * @param \DateTime|null $to Окончание периода (по UTC)
     * @param string|null $cursor Курсор пагинации
     * @param int|null $limit Лимит количества операций (по умолчанию 100, макс 1000)
     * @param array|null $operationTypes Массив типов операций (OperationType)
     * @param int|null $state Статус операций (OperationState)
     * @param bool|null $withoutCommissions Исключить комиссии
     * @param bool|null $withoutTrades Исключить сделки
     * @param bool|null $withoutOvernights Исключить overnight операции
     * @return array [GetOperationsByCursorResponse, status]
     */
    public function getOperationsByCursor(
        string $accountId,
        ?string $instrumentId = null,
        ?\DateTime $from = null,
        ?\DateTime $to = null,
        ?string $cursor = null,
        ?int $limit = null,
        ?array $operationTypes = null,
        ?int $state = null,
        ?bool $withoutCommissions = null,
        ?bool $withoutTrades = null,
        ?bool $withoutOvernights = null
    ): array {
        $request = new GetOperationsByCursorRequest();
        $request->setAccountId($accountId);

        if (null !== $instrumentId) {
            $request->setInstrumentId($instrumentId);
        }
        if (null !== $from) {
            $request->setFrom(new Timestamp(['seconds' => $from->getTimestamp()]));
        }
        if (null !== $to) {
            $request->setTo(new Timestamp(['seconds' => $to->getTimestamp()]));
        }
        if (null !== $cursor) {
            $request->setCursor($cursor);
        }
        if (null !== $limit) {
            $request->setLimit($limit);
        }
        if (null !== $operationTypes) {
            $request->setOperationTypes($operationTypes);
        }
        if (null !== $state) {
            $request->setState($state);
        }
        if (null !== $withoutCommissions) {
            $request->setWithoutCommissions($withoutCommissions);
        }
        if (null !== $withoutTrades) {
            $request->setWithoutTrades($withoutTrades);
        }
        if (null !== $withoutOvernights) {
            $request->setWithoutOvernights($withoutOvernights);
        }

        /** @var GetOperationsByCursorResponse $response */
        list($response, $status) = $this->client->GetOperationsByCursor($request, [], TIClient::SPECIAL_OPTIONS)->wait();

        return [$response, $status];
    }

    public function getWithdrawLimits(string $accountId): array
    {
        $request = new WithdrawLimitsRequest();
        $request->setAccountId($accountId);

        /** @var WithdrawLimitsResponse $response */
        list($response, $status) = $this->client->GetWithdrawLimits($request, [], TIClient::SPECIAL_OPTIONS)->wait();

        return [$response, $status];
    }
}

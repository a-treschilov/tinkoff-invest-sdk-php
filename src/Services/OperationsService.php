<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Services;

use ATreschilov\TinkoffInvestApiSdk\Exceptions\TIException;
use ATreschilov\TinkoffInvestApiSdk\TIClient;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Timestamp;
use GPBMetadata\Operations;
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

    public function getWithdrawLimits(string $accountId): array
    {
        $request = new WithdrawLimitsRequest();
        $request->setAccountId($accountId);

        /** @var WithdrawLimitsResponse $response */
        list($response, $status) = $this->client->GetWithdrawLimits($request, [], TIClient::SPECIAL_OPTIONS)->wait();

        return [$response, $status];
    }
}

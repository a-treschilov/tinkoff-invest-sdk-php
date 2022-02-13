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

class OperationsService
{
    private OperationsServiceClient $client;

    public function __construct(TIClient $client)
    {
        $this->client = new OperationsServiceClient($client->getHostname(), $client->getOptions());
    }

    public function getPortfolio(string $accountId): PortfolioResponse
    {
        $request = new PortfolioRequest();
        $request->setAccountId($accountId);

        /** @var PortfolioResponse $response */
        list($response, $status) = $this->client->GetPortfolio($request, [], TIClient::SPECIAL_OPTIONS)->wait();

        if ($status->code !== 0) {
            throw new TIException($status->metadata['message'][0], (int)$status->code);
        }
        return $response;
    }

    /**
     * @param string $accountId Идентификатор счёта клиента
     * @param \DateTime|null $from Начало периода (по UTC)
     * @param \DateTime|null $to Окончание периода (по UTC)
     * @param int|null $state Статус запрашиваемых операций
     * @param string|null $figi Figi-идентификатор инструмента для фильтрации
     * @return RepeatedField
     * @throws TIException
     */
    public function getOperations(
        string $accountId,
        ?\DateTime $from = null,
        ?\DateTime $to = null,
        ?int $state = null,
        ?string $figi = null
    ): RepeatedField {
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

        if ($status->code !== 0) {
            throw new TIException($status->metadata['message'][0], (int)$status->code);
        }

        return $response->getOperations();
    }
}

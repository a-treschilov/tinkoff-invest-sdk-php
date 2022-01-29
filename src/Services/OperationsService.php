<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Services;

use ATreschilov\TinkoffInvestApiSdk\Exceptions\TIException;
use ATreschilov\TinkoffInvestApiSdk\TIClient;
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

    public function getPortfolio(string $accountId)
    {
        $request = new PortfolioRequest();
        $request->setAccountId($accountId);

        /** @var PortfolioResponse $response */
        list($response, $status) = $this->client->GetPortfolio($request)->wait();

        if ($status->code !== 0) {
            throw new TIException($status->metadata['message'][0], (int)$status->code);
        }
        return $response->getPositions();
    }
}

<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Services;

use ATreschilov\TinkoffInvestApiSdk\Exceptions\TIException;
use ATreschilov\TinkoffInvestApiSdk\TIClient;
use ATreschilov\TinkoffInvestApiSdk\TIClientOptions;

class BaseDecorator
{
    protected mixed $service;
    private TIClientOptions $options;

    public function __construct(TIClient $client)
    {
        $this->options = $client->getOptions();
    }

    public function __call($method, $parameters)
    {
        $retryAttempt = 0;
        $status = null;

        do {
            if (isset($status->metadata['x-ratelimit-reset'])) {
                sleep((int)$status->metadata['x-ratelimit-reset'][0] + 1);
            }
            list($response, $status) = call_user_func_array(array($this->service, $method), $parameters);
            $retryAttempt++;
        } while ($this->options->isRateLimitRetry() && $retryAttempt < 5 && $this->isRequestLimitExceeded($status));


        if ($status->code !== 0) {
            if ($this->isRequestLimitExceeded($status)) {
                $message = 'Request limit exceeded';
                $code = 80002;
            } else {
                $message = $status->metadata['message'][0] ?? "Unknown error from Tinkoff API";
                $code = (int)$status->details;
            }
            throw new TIException($message, $code);
        }

        return $response;
    }

    private function isRequestLimitExceeded($status): bool
    {
        if ($status->code === 8 && (int)$status->metadata['x-ratelimit-remaining'][0] === 0) {
            return true;
        }
        return false;
    }
}

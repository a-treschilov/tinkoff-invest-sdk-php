<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Services;

use ATreschilov\TinkoffInvestApiSdk\Exceptions\TIException;
use ATreschilov\TinkoffInvestApiSdk\Exceptions\TIExceptionFactory;
use ATreschilov\TinkoffInvestApiSdk\Exceptions\ExceptionMapper;
use ATreschilov\TinkoffInvestApiSdk\Exceptions\RateLimitException;
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
        $lastException = null;

        do {
            // Apply retry delay if we have a rate limit exception
            if ($lastException instanceof RateLimitException) {
                $delay = TIExceptionFactory::getRetryDelay($lastException, $retryAttempt);
                sleep($delay);
            }

            try {
                list($response, $status) = call_user_func_array(array($this->service, $method), $parameters);
                $retryAttempt++;
                
                if ($status->code === 0) {
                    return $response;
                }
                
                // Create exception from gRPC status
                $context = [
                    'method' => $method,
                    'retry_attempt' => $retryAttempt,
                    'parameters_count' => count($parameters),
                ];
                
                $lastException = TIExceptionFactory::fromGrpcStatus($status, $context);
                
                // If retries are disabled or this is not a retryable exception, throw immediately
                if (!$this->options->isRateLimitRetry() || !TIExceptionFactory::isRetryable($lastException)) {
                    throw $lastException;
                }
                
            } catch (\Throwable $e) {
                if ($e instanceof TIException) {
                    $lastException = $e;
                } else {
                    // Convert other exceptions to TI exceptions
                    $context = [
                        'method' => $method,
                        'retry_attempt' => $retryAttempt,
                        'original_exception_class' => get_class($e),
                    ];
                    $lastException = TIExceptionFactory::networkError($e, $context);
                }
                
                if (!$this->options->isRateLimitRetry() || !TIExceptionFactory::isRetryable($lastException)) {
                    throw $lastException;
                }
            }
            
        } while ($retryAttempt < 5 && TIExceptionFactory::isRetryable($lastException));

        // If we've exhausted all retries, throw the last exception
        throw $lastException->withContext(['final_retry_attempt' => $retryAttempt]);
    }
}

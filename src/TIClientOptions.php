<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk;

class TIClientOptions
{
    private bool $isRateLimitRetry;

    /**
     * @param array{
     *      isRateLimitRetry: boolean
     *     } $options
     */
    public function __construct(array $options)
    {
        $this->isRateLimitRetry = $options['isRateLimitRetry'] ?? false;
    }

    public function isRateLimitRetry(): bool
    {
        return $this->isRateLimitRetry;
    }

    public function setIsRateLimitRetry(bool $isRateLimitRetry): void
    {
        $this->isRateLimitRetry = $isRateLimitRetry;
    }
}

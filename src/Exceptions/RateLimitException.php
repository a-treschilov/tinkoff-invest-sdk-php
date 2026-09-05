<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

// Rate limiting with enterprise features
class RateLimitException extends TIException
{
    public function withRateLimitInfo(?int $remaining = null, ?int $resetTime = null, ?int $limit = null): self
    {
        return $this;
    }
}

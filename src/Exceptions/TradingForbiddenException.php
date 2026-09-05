<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

// Trading business logic exceptions (critical for trading APIs)
class TradingForbiddenException extends BusinessException
{
    public function __construct(
        string $message = 'Trading is forbidden for this instrument',
        int $code = 30052,
        ?\Throwable $previous = null,
        array $context = []
    ) {
        parent::__construct($message, $code, $previous, $context);
    }
}

<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

class InsufficientFundsException extends BusinessException
{
    public function __construct(
        string $message = 'Insufficient funds',
        int $code = 30034,
        ?\Throwable $previous = null,
        array $context = []
    ) {
        parent::__construct($message, $code, $previous, $context);
    }
}

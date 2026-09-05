<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

class InsufficientMarginException extends BusinessException
{
    public function __construct(
        string $message = 'Insufficient margin for this operation',
        int $code = 30042,
        ?\Throwable $previous = null,
        array $context = []
    ) {
        parent::__construct($message, $code, $previous, $context);
    }
}

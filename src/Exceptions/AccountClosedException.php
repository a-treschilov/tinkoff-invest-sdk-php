<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

// Account status exceptions (important for enterprise)
class AccountClosedException extends ApiException
{
    public function __construct(
        string $message = 'Account is closed',
        int $code = 30081,
        ?\Throwable $previous = null,
        array $context = []
    ) {
        parent::__construct($message, $code, $previous, $context);
    }
}

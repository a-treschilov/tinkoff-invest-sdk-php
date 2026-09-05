<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

class AccountNotFoundException extends ApiException
{
    public function __construct(
        string $message = 'Account not found',
        int $code = 50004,
        ?\Throwable $previous = null,
        array $context = []
    ) {
        parent::__construct($message, $code, $previous, $context);
    }
}

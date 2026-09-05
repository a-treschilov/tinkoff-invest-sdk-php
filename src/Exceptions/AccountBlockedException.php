<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

class AccountBlockedException extends ApiException
{
    public function __construct(
        string $message = 'Account is blocked',
        int $code = 30082,
        ?\Throwable $previous = null,
        array $context = []
    ) {
        parent::__construct($message, $code, $previous, $context);
    }
}

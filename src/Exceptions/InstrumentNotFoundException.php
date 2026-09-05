<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

// Not found exceptions (essential)
class InstrumentNotFoundException extends ApiException
{
    public function __construct(
        string $message = 'Instrument not found',
        int $code = 50002,
        ?\Throwable $previous = null,
        array $context = []
    ) {
        parent::__construct($message, $code, $previous, $context);
    }
}

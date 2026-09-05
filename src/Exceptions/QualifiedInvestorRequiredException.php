<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

// Qualified investor requirement (regulatory compliance)
class QualifiedInvestorRequiredException extends BusinessException
{
    public function __construct(
        string $message = 'This instrument requires qualified investor status',
        int $code = 90002,
        ?\Throwable $previous = null,
        array $context = []
    ) {
        parent::__construct($message, $code, $previous, $context);
    }
}

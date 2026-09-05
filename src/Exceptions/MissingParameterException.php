<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

// Parameter validation exceptions (most common)
class MissingParameterException extends ValidationException
{
    public function __construct(
        private string $parameterName,
        string $message = '',
        int $code = 30001,
        ?\Throwable $previous = null,
        array $context = []
    ) {
        parent::__construct($message ?: "Missing parameter: {$parameterName}", $code, $previous, $context);
    }

    public function getParameterName(): string
    {
        return $this->parameterName;
    }
}

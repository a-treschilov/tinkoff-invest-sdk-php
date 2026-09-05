<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

class InvalidParameterException extends ValidationException
{
    public function __construct(
        private string $parameterName,
        private mixed $parameterValue = null,
        string $message = '',
        int $code = 30005,
        ?\Throwable $previous = null,
        array $context = []
    ) {
        parent::__construct($message ?: "Invalid parameter: {$parameterName}", $code, $previous, $context);
    }

    public function getParameterName(): string
    {
        return $this->parameterName;
    }

    public function getParameterValue(): mixed
    {
        return $this->parameterValue;
    }
}

<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

/**
 * Essential exception classes for enterprise T-Bank API usage
 * Simplified hierarchy focusing on most common use cases
 */

// Base exception categories
class ValidationException extends TIException {}
class ApiException extends TIException {}
class BusinessException extends TIException {}
class AuthenticationException extends TIException {}

// Rate limiting with enterprise features
class RateLimitException extends TIException 
{
    public function withRateLimitInfo(?int $remaining = null, ?int $resetTime = null, ?int $limit = null): self 
    {
        return $this;
    }
}

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

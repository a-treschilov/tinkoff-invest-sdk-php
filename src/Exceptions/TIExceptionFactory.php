<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

// Import simplified exception classes
require_once __DIR__ . '/CoreExceptions.php';

/**
 * Simplified factory for creating appropriate TI exceptions
 * Enterprise-focused with reduced complexity
 */
class TIExceptionFactory
{
    /**
     * Create exception from gRPC status
     */
    public static function fromGrpcStatus(\stdClass $status, array $context = []): TIException
    {
        $message = $status->metadata['message'][0] ?? 'Unknown gRPC error';
        $code = (int)($status->details ?? $status->code);
        
        // Parse additional metadata
        $requestId = $status->metadata['x-tracking-id'][0] ?? 
                    $status->metadata['x-request-id'][0] ?? 
                    null;
        
        // First try to match by specific T-Bank error codes
        if ($code >= 30000) {
            $exception = self::createTBankSpecificException($code, $message, $context);
        } else {
            // Fall back to gRPC status code mapping
            $exception = match ($status->code) {
                1, 4 => new ValidationException('Connection timeout', $code, null, $context),
                2 => new ValidationException('Network error', $code, null, $context),
                7 => new AuthenticationException($message, $code, null, $context),
                8 => self::createRateLimitException($status, $message, $code, $context),
                16 => new AuthenticationException($message, $code, null, $context),
                5 => new InstrumentNotFoundException($message, $code, null, $context),
                3 => new ValidationException($message, $code, null, $context),
                default => new ValidationException($message, $code, null, $context)
            };
        }

        if ($requestId) {
            $exception = $exception->withRequestId($requestId);
        }

        return $exception;
    }

    /**
     * Create T-Bank specific exceptions based on error codes
     */
    private static function createTBankSpecificException(int $code, string $message, array $context): TIException
    {
        // Use simplified pattern-based mapping
        return ExceptionMapper::mapException($code, $message, $context);
    }

    /**
     * Create rate limit exception with additional rate limit info
     */
    private static function createRateLimitException(
        \stdClass $status, 
        string $message, 
        int $code, 
        array $context
    ): RateLimitException {
        $remaining = isset($status->metadata['x-ratelimit-remaining']) 
            ? (int)$status->metadata['x-ratelimit-remaining'][0] 
            : null;
        
        $resetTime = isset($status->metadata['x-ratelimit-reset']) 
            ? (int)$status->metadata['x-ratelimit-reset'][0] 
            : null;
        
        $limit = isset($status->metadata['x-ratelimit-limit']) 
            ? (int)$status->metadata['x-ratelimit-limit'][0] 
            : null;

        $exception = new RateLimitException($message, $code, null, $context);
        
        return $exception->withRateLimitInfo($remaining, $resetTime, $limit);
    }

    /**
     * Create exception from HTTP response
     */
    public static function fromHttpResponse(
        int $statusCode, 
        array $response, 
        array $context = []
    ): TIException {
        $message = $response['message'] ?? $response['error'] ?? 'HTTP error';
        
        return match ($statusCode) {
            400 => new ValidationException($message, $statusCode, null, $context),
            401 => new AuthenticationException($message, $statusCode, null, $context),
            403 => new AuthenticationException($message, $statusCode, null, $context),
            404 => new InstrumentNotFoundException($message, $statusCode, null, $context),
            429 => new RateLimitException($message, $statusCode, null, $context),
            500, 502, 503, 504 => new ApiException($message, $statusCode, null, $context),
            default => new ApiException($message, $statusCode, null, $context)
        };
    }

    /**
     * Create network error from throwable
     */
    public static function networkError(\Throwable $previous, array $context = []): ValidationException
    {
        $message = $previous->getMessage();
        return new ValidationException($message, $previous->getCode(), $previous, $context);
    }

    /**
     * Create configuration error
     */
    public static function configurationError(
        string $message, 
        array $context = [], 
        ?\Throwable $previous = null
    ): ValidationException {
        return new ValidationException($message, 1000, $previous, $context);
    }

    /**
     * Create validation error with specific validation details
     */
    public static function validationError(
        string $message, 
        array $validationErrors = [], 
        array $context = []
    ): ValidationException {
        return new ValidationException($message, 3000, null, array_merge($context, ['validation_errors' => $validationErrors]));
    }

    /**
     * Create business logic error based on error details
     */
    public static function businessError(string $errorType, string $message, array $context = []): BusinessException
    {
        return match (strtolower($errorType)) {
            'insufficient_funds' => new InsufficientFundsException($message, 30034, null, $context),
            'trading_forbidden' => new TradingForbiddenException($message, 30052, null, $context),
            default => new BusinessException($message, 90001, null, $context)
        };
    }

    /**
     * Check if an exception is retryable
     */
    public static function isRetryable(TIException $exception): bool
    {
        return $exception instanceof RateLimitException ||
               (method_exists($exception, 'getCode') && $exception->getCode() >= 70000 && $exception->getCode() < 90000);
    }

    /**
     * Get retry delay for retryable exceptions
     */
    public static function getRetryDelay(TIException $exception, int $attempt): int
    {
        // Exponential backoff: 2^attempt seconds, max 60 seconds
        return min(pow(2, $attempt), 60);
    }
}

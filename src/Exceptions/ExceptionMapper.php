<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

// Import the core exception classes
require_once __DIR__ . '/CoreExceptions.php';

/**
 * Simplified exception mapper for enterprise usage
 * Focuses on essential patterns with reduced complexity
 */
class ExceptionMapper
{
    /**
     * Map error to appropriate exception
     */
    public static function mapException(int $code, string $message, array $context = []): TIException
    {
        // 1. Check specific overrides first (highest priority)
        if (isset(ExceptionConfig::OVERRIDES[$code])) {
            return self::createException(ExceptionConfig::OVERRIDES[$code], $message, $code, $context);
        }

        // 2. Try pattern matching
        foreach (ExceptionConfig::PATTERNS as $pattern => $exceptionClass) {
            if (preg_match($pattern, $message)) {
                return self::createException($exceptionClass, $message, $code, $context);
            }
        }

        // 3. Fall back to code ranges
        foreach (ExceptionConfig::CODE_RANGES as $range => $exceptionClass) {
            [$min, $max] = explode('-', $range);
            if ($code >= (int)$min && $code <= (int)$max) {
                return self::createException($exceptionClass, $message, $code, $context);
            }
        }

        // 4. Ultimate fallback
        return new ValidationException($message, $code, null, $context);
    }

    /**
     * Check if exception should be retryable
     */
    public static function isRetryable(int $code, string $message): bool
    {
        // Check patterns
        foreach (ExceptionConfig::RETRYABLE_PATTERNS as $pattern) {
            if (preg_match($pattern, $message)) {
                return true;
            }
        }

        // Check code ranges
        foreach (ExceptionConfig::RETRYABLE_RANGES as $range) {
            [$min, $max] = explode('-', $range);
            if ($code >= (int)$min && $code <= (int)$max) {
                return true;
            }
        }

        return false;
    }

    /**
     * Create exception with parameter extraction for special cases
     */
    private static function createException(string $class, string $message, int $code, array $context): TIException
    {
        // Handle parameter extraction for specific exception types
        if ($class === MissingParameterException::class) {
            $param = self::extractParameter($message) ?? 'unknown';
            return new MissingParameterException($param, $message, $code, null, $context);
        }

        if ($class === InvalidParameterException::class) {
            $param = self::extractParameter($message) ?? 'unknown';
            return new InvalidParameterException($param, null, $message, $code, null, $context);
        }

        // Standard constructor for all other exceptions
        return new $class($message, $code, null, $context);
    }

    /**
     * Extract parameter name from error message
     */
    private static function extractParameter(string $message): ?string
    {
        if (preg_match('/`([^`]+)`/', $message, $matches)) {
            return $matches[1];
        }
        return null;
    }

    /**
     * Get error category for logging/monitoring
     */
    public static function getCategory(int $code): string
    {
        return match (true) {
            $code >= 30000 && $code < 40000 => 'validation',
            $code >= 40000 && $code < 50000 => 'authentication',
            $code >= 50000 && $code < 60000 => 'not_found',
            $code >= 70000 && $code < 80000 => 'internal',
            $code >= 80000 && $code < 90000 => 'rate_limit',
            $code >= 90000 && $code < 100000 => 'business',
            default => 'unknown'
        };
    }
}

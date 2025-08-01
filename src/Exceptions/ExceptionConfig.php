<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

/**
 * Simplified exception mapping configuration
 * Enterprise-focused with essential patterns only
 */
class ExceptionConfig
{
    /**
     * Core exception patterns (essential for enterprise usage)
     */
    public const PATTERNS = [
        // Parameter validation (most common)
        '/Missing parameter:/' => MissingParameterException::class,
        '/is invalid/' => InvalidParameterException::class,
        '/period.*exceed/' => ValidationException::class,
        
        // Trading business logic (critical for trading)
        '/forbidden.*trading|Trading.*forbidden/' => TradingForbiddenException::class,
        '/margin/' => InsufficientMarginException::class,
        '/Account.*closed/' => AccountClosedException::class,
        '/Account.*blocked/' => AccountBlockedException::class,
        
        // Business rules (essential)
        '/qualified.*investor/' => QualifiedInvestorRequiredException::class,
        '/maximum.*amount/' => ValidationException::class,
        '/insufficient.*fund/' => InsufficientFundsException::class,
        
        // Rate limiting (crucial for enterprise)
        '/limit.*exceed|Too many requests/' => RateLimitException::class,
    ];

    /**
     * Error code ranges (fallback mapping)
     */
    public const CODE_RANGES = [
        '30000-39999' => ValidationException::class,    // All validation errors
        '40000-49999' => AuthenticationException::class, // Auth errors
        '50000-59999' => ApiException::class,           // Not found errors
        '70000-79999' => ApiException::class,           // Internal errors  
        '80000-89999' => RateLimitException::class,     // Rate limits
        '90000-99999' => BusinessException::class,      // Business logic
    ];

    /**
     * Specific high-priority overrides
     */
    public const OVERRIDES = [
        90002 => QualifiedInvestorRequiredException::class,
        40003 => AuthenticationException::class,
        50002 => InstrumentNotFoundException::class,
        50004 => AccountNotFoundException::class,
    ];

    /**
     * Retryable error patterns (simplified)
     */
    public const RETRYABLE_PATTERNS = [
        '/limit.*exceed/',
        '/Too many requests/',
        '/try.*again/',
        '/timeout/',
    ];

    /**
     * Retryable code ranges
     */
    public const RETRYABLE_RANGES = [
        '70000-79999', // Internal server errors
        '80000-89999', // Rate limits
    ];
}

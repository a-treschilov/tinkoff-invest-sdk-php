# Agent.md - AI Assistant Guide

This document provides context for AI assistants working with this codebase.

## Project Overview

**Tinkoff Invest PHP SDK** - Unofficial PHP SDK for T-Bank (formerly Tinkoff) Invest API V2. Provides typed PHP interface over gRPC for Russian brokerage platform operations.

- **Language:** PHP 8.3+
- **Protocol:** gRPC with SSL/TLS
- **API Version:** Tinkoff Invest API v1.44
- **Package:** `a.treschilov/tinkoff-invest-api-sdk`

## Directory Structure

```
src/
├── TIClient.php              # Main entry point, service factory
├── TIClientOptions.php       # Client configuration
├── Services/                 # Service layer with decorators
│   ├── BaseDecorator.php     # Retry logic base class
│   ├── *Service.php          # Service implementations
│   └── *ServiceDecorator.php # Decorator wrappers
├── Exceptions/               # Exception hierarchy
│   ├── TIException.php       # Base exception
│   ├── CoreExceptions.php    # Exception subclasses
│   ├── TIExceptionFactory.php
│   ├── ExceptionMapper.php
│   └── ExceptionConfig.php
└── Library/                  # Generated code (DO NOT EDIT)
    ├── Tinkoff/Invest/V1/    # gRPC stubs from protobuf
    └── GPBMetadata/          # Proto metadata

contracts/                    # Git submodule with .proto files
examples/                     # Usage examples
etc/tinkoff-ru.pem           # SSL certificate for API
```

## Architecture Patterns

### 1. Service Decorator Pattern
All services use decorator pattern for retry logic:
```
TIClient -> ServiceDecorator -> Service -> gRPC Client
```

### 2. Lazy Loading
Services are instantiated on first access via `TIClient` getters.

### 3. Exception Factory
Exceptions created via `TIExceptionFactory::fromStatus()` with 3-tier mapping:
1. Specific error code override
2. Regex pattern on message
3. Code range fallback

### 4. gRPC Response Handling
```php
list($response, $status) = $client->Method($request)->wait();
```

## Coding Conventions

- **Strict types:** All files must declare `declare(strict_types=1);`
- **Namespace:** `ATreschilov\TinkoffInvestApiSdk\`
- **Standard:** PSR-12 (validated via `make code-sniffer`)
- **Generated code:** Never edit files in `src/Library/` - regenerate from protos

## Key Classes

| Class | Purpose |
|-------|---------|
| `TIClient` | Main SDK entry point, creates services |
| `BaseDecorator` | Retry logic with exponential backoff |
| `TIException` | Base exception with context/metadata |
| `TIExceptionFactory` | Creates typed exceptions from gRPC status |

## Services (Implemented)

| Service | Methods |
|---------|---------|
| `UsersService` | `getAccounts()` |
| `OperationsService` | `getOperations()`, `getPortfolio()`, `getOperationsByCursor()`, `getWithdrawLimits()` |
| `InstrumentsService` | `getInstrumentBy()`, `getBonds()`, `getStocks()`, `getEtfs()`, `getFutures()`, `getCurrencies()`, `getDividends()`, `getBondCoupons()` |
| `MarketDataService` | `getCandles()`, `getLastPrices()` |

## Exception Hierarchy

```
TIException (base)
├── ValidationException (30000-39999)
│   ├── MissingParameterException
│   └── InvalidParameterException
├── AuthenticationException (40000-49999)
├── ApiException (50000-59999)
│   ├── InstrumentNotFoundException
│   ├── AccountNotFoundException
│   ├── AccountClosedException
│   └── AccountBlockedException
├── RateLimitException (80000-89999)
└── BusinessException (90000-99999)
    ├── InsufficientFundsException
    ├── InsufficientMarginException
    ├── TradingForbiddenException
    └── QualifiedInvestorRequiredException
```

## Build Commands

```bash
make start              # Start Docker environment
make composer-install   # Install dependencies
make api-init           # Initialize contracts submodule
make api-update VERSION=v1.44  # Update API contracts
make get-from-proto     # Regenerate PHP from .proto files
make code-sniffer       # Run PSR-12 validation
make update-ssl-certificate  # Update API certificate
```

## Adding New Service Methods

1. Check if method exists in `src/Library/Tinkoff/Invest/V1/*ServiceClient.php`
2. Add wrapper method in corresponding `src/Services/*Service.php`
3. Method signature: accept primitives, return Response object
4. Use `$this->client->MethodName($request)->wait()` pattern
5. Decorator handles retry logic automatically

Example:
```php
// In OperationsService.php
public function getPortfolio(string $accountId): PortfolioResponse
{
    $request = new PortfolioRequest();
    $request->setAccountId($accountId);

    list($response, $status) = $this->client->GetPortfolio($request)->wait();

    return $response;
}
```

## Adding New Exceptions

1. Add exception class to `src/Exceptions/CoreExceptions.php`
2. Extend appropriate parent (`ValidationException`, `ApiException`, etc.)
3. Register mapping in `src/Exceptions/ExceptionConfig.php`:
   - `CODE_OVERRIDES` for specific codes
   - `PATTERNS` for message-based matching
   - Or rely on range-based fallback

## Testing

Tests directory exists but needs implementation. When adding tests:
- Use PHPUnit
- Mock gRPC clients for unit tests
- Use sandbox API for integration tests

## Dependencies

- `grpc/grpc` - gRPC PHP library
- `google/protobuf` - Protocol Buffers runtime
- `google/common-protos` - Common proto types
- `ext-grpc` - PHP gRPC extension (system requirement)

## Common Tasks

### Update to new API version
```bash
make api-update VERSION=v1.45
make get-from-proto
# Then update service wrappers for new methods
```

### Add new service
1. Create `src/Services/NewService.php` implementing methods
2. Create `src/Services/NewServiceDecorator.php` extending `BaseDecorator`
3. Add getter in `TIClient.php` with lazy loading pattern
4. Add property and initialization in constructor

## Notes

- API endpoint: `invest-public-api.tbank.ru`
- Auth: Bearer token in gRPC metadata
- App tracking header: `x-app-name: a-treschilov.tinkoff-invest-sdk-php`
- Rate limits: Handled via `RateLimitException` with configurable retry
- Not implemented: Orders, StopOrders, Sandbox, Streaming endpoints

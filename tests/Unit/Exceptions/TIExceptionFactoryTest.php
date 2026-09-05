<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Tests\Unit\Exceptions;

use ATreschilov\TinkoffInvestApiSdk\Exceptions\ApiException;
use ATreschilov\TinkoffInvestApiSdk\Exceptions\AuthenticationException;
use ATreschilov\TinkoffInvestApiSdk\Exceptions\InstrumentNotFoundException;
use ATreschilov\TinkoffInvestApiSdk\Exceptions\MissingParameterException;
use ATreschilov\TinkoffInvestApiSdk\Exceptions\RateLimitException;
use ATreschilov\TinkoffInvestApiSdk\Exceptions\TIExceptionFactory;
use ATreschilov\TinkoffInvestApiSdk\Exceptions\ValidationException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * Pins the exception-mapping behaviour documented in docs/exceptions.md.
 *
 * The gRPC status is a plain \stdClass where `details` carries the numeric T-Bank error code
 * (not gRPC's free-text detail) and the human message lives in `metadata['message'][0]`.
 */
#[CoversClass(TIExceptionFactory::class)]
class TIExceptionFactoryTest extends TestCase
{
    #[Test]
    public function exactCodeOverrideWinsOverEveryOtherTier(): void
    {
        $exception = TIExceptionFactory::fromGrpcStatus(
            $this->grpcStatus(2, '50002', 'Instrument not found')
        );

        self::assertInstanceOf(InstrumentNotFoundException::class, $exception);
        self::assertSame(50002, $exception->getCode());
    }

    #[Test]
    public function messagePatternResolvesWhenNoCodeOverrideMatches(): void
    {
        $exception = TIExceptionFactory::fromGrpcStatus(
            $this->grpcStatus(3, '31000', 'Missing parameter: `accountId`')
        );

        self::assertInstanceOf(MissingParameterException::class, $exception);
        self::assertSame('accountId', $exception->getParameterName());
        self::assertSame(31000, $exception->getCode());
    }

    #[Test]
    public function codeRangeIsTheFallbackWhenNoPatternMatches(): void
    {
        $exception = TIExceptionFactory::fromGrpcStatus(
            $this->grpcStatus(16, '40100', 'token rejected')
        );

        self::assertInstanceOf(AuthenticationException::class, $exception);
        self::assertSame(40100, $exception->getCode());
    }

    /**
     * 60000-69999 is deliberately absent from ExceptionConfig::CODE_RANGES, so it reaches the
     * ultimate ValidationException fallback rather than a category-specific exception.
     */
    #[Test]
    public function unmappedCodeRangeFallsBackToValidationException(): void
    {
        $exception = TIExceptionFactory::fromGrpcStatus(
            $this->grpcStatus(2, '65000', 'undocumented failure')
        );

        self::assertInstanceOf(ValidationException::class, $exception);
        self::assertSame(65000, $exception->getCode());
    }

    #[Test]
    public function grpcStatusCodeIsUsedWhenNoTbankCodeIsPresent(): void
    {
        $exception = TIExceptionFactory::fromGrpcStatus(
            $this->grpcStatus(7, null, 'permission denied')
        );

        self::assertInstanceOf(AuthenticationException::class, $exception);
        self::assertSame('permission denied', $exception->getMessage());
    }

    #[Test]
    public function grpcResourceExhaustedBecomesARateLimitException(): void
    {
        $exception = TIExceptionFactory::fromGrpcStatus(
            $this->grpcStatus(8, null, 'Too many requests', [
                'x-ratelimit-remaining' => ['0'],
                'x-ratelimit-reset' => ['30'],
                'x-ratelimit-limit' => ['300'],
            ])
        );

        self::assertInstanceOf(RateLimitException::class, $exception);
    }

    #[Test]
    public function missingMetadataMessageFallsBackToAPlaceholder(): void
    {
        $status = new \stdClass();
        $status->code = 2;
        $status->details = null;
        $status->metadata = [];

        $exception = TIExceptionFactory::fromGrpcStatus($status);

        self::assertSame('Network error', $exception->getMessage());
    }

    #[Test]
    public function trackingIdFromMetadataBecomesTheRequestId(): void
    {
        $exception = TIExceptionFactory::fromGrpcStatus(
            $this->grpcStatus(2, '65000', 'undocumented failure', [
                'x-tracking-id' => ['trace-abc-123'],
            ])
        );

        self::assertSame('trace-abc-123', $exception->getRequestId());
    }

    #[Test]
    public function callContextIsAttachedToTheException(): void
    {
        $exception = TIExceptionFactory::fromGrpcStatus(
            $this->grpcStatus(2, '65000', 'undocumented failure'),
            ['method' => 'getAccounts', 'retry_attempt' => 1]
        );

        self::assertSame('getAccounts', $exception->getContext()['method']);
        self::assertSame(1, $exception->getContext()['retry_attempt']);
    }

    #[Test]
    public function rateLimitExceptionsAreRetryable(): void
    {
        self::assertTrue(TIExceptionFactory::isRetryable(new RateLimitException('slow down', 80001)));
    }

    #[Test]
    public function internalErrorCodesAreRetryable(): void
    {
        self::assertTrue(TIExceptionFactory::isRetryable(new ApiException('internal', 70001)));
    }

    #[Test]
    public function validationErrorsAreNotRetryable(): void
    {
        self::assertFalse(TIExceptionFactory::isRetryable(new ValidationException('bad input', 30001)));
    }

    #[Test]
    public function businessErrorsAboveTheRetryWindowAreNotRetryable(): void
    {
        self::assertFalse(TIExceptionFactory::isRetryable(new ApiException('business', 90001)));
    }

    #[Test]
    public function retryDelayGrowsExponentiallyAndIsCappedAtSixtySeconds(): void
    {
        $exception = new RateLimitException('slow down', 80001);

        self::assertSame(1, TIExceptionFactory::getRetryDelay($exception, 0));
        self::assertSame(2, TIExceptionFactory::getRetryDelay($exception, 1));
        self::assertSame(8, TIExceptionFactory::getRetryDelay($exception, 3));
        self::assertSame(60, TIExceptionFactory::getRetryDelay($exception, 10));
    }

    #[Test]
    public function networkErrorWrapsTheOriginalThrowable(): void
    {
        $previous = new \RuntimeException('connection reset', 14);

        $exception = TIExceptionFactory::networkError($previous, ['method' => 'getAccounts']);

        self::assertInstanceOf(ValidationException::class, $exception);
        self::assertSame('connection reset', $exception->getMessage());
        self::assertSame($previous, $exception->getPrevious());
    }

    private function grpcStatus(
        int $code,
        ?string $details,
        ?string $message = null,
        array $metadata = []
    ): \stdClass {
        if ($message !== null) {
            $metadata['message'] = [$message];
        }

        $status = new \stdClass();
        $status->code = $code;
        $status->details = $details;
        $status->metadata = $metadata;

        return $status;
    }
}

<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Tests\Unit;

use ATreschilov\TinkoffInvestApiSdk\TIClientOptions;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversClass(TIClientOptions::class)]
class TIClientOptionsTest extends TestCase
{
    #[Test]
    public function rateLimitRetryIsDisabledByDefault(): void
    {
        $options = new TIClientOptions([]);

        self::assertFalse($options->isRateLimitRetry());
    }

    #[Test]
    public function rateLimitRetryIsReadFromTheOptionsArray(): void
    {
        $options = new TIClientOptions(['isRateLimitRetry' => true]);

        self::assertTrue($options->isRateLimitRetry());
    }

    #[Test]
    public function unknownOptionKeysAreIgnored(): void
    {
        $options = new TIClientOptions(['somethingElse' => 'value']);

        self::assertFalse($options->isRateLimitRetry());
    }

    #[Test]
    public function rateLimitRetryCanBeToggledAfterConstruction(): void
    {
        $options = new TIClientOptions([]);

        $options->setIsRateLimitRetry(true);

        self::assertTrue($options->isRateLimitRetry());
    }
}

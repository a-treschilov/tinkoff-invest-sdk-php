<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Tests\Unit;

use ATreschilov\TinkoffInvestApiSdk\Services\MarketDataService;
use ATreschilov\TinkoffInvestApiSdk\TIClient;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Tinkoff\Invest\V1\GetCandlesRequest;
use Tinkoff\Invest\V1\GetCandlesRequest\CandleSource;
use Tinkoff\Invest\V1\GetCandlesResponse;
use Tinkoff\Invest\V1\MarketDataServiceClient;

#[CoversClass(MarketDataService::class)]
class GetCandlesRequestTest extends TestCase
{
    #[Test]
    public function explicitExchangeCandleSourceIsSerialized(): void
    {
        $capturedRequest = null;
        $service = $this->marketDataService(function (GetCandlesRequest $request) use (&$capturedRequest): object {
            $capturedRequest = $request;

            return $this->successfulCall();
        });

        $service->getCandles(
            new \DateTime('2026-01-01 00:00:00'),
            new \DateTime('2026-01-02 00:00:00'),
            1,
            'instrument-uid',
            CandleSource::CANDLE_SOURCE_EXCHANGE
        );

        self::assertInstanceOf(GetCandlesRequest::class, $capturedRequest);
        self::assertTrue($capturedRequest->hasCandleSourceType());
        self::assertSame(CandleSource::CANDLE_SOURCE_EXCHANGE, $capturedRequest->getCandleSourceType());

        $deserializedRequest = new GetCandlesRequest();
        $deserializedRequest->mergeFromString($capturedRequest->serializeToString());

        self::assertTrue($deserializedRequest->hasCandleSourceType());
        self::assertSame(CandleSource::CANDLE_SOURCE_EXCHANGE, $deserializedRequest->getCandleSourceType());
    }

    #[Test]
    public function omittedCandleSourceRemainsUnset(): void
    {
        $capturedRequest = null;
        $service = $this->marketDataService(function (GetCandlesRequest $request) use (&$capturedRequest): object {
            $capturedRequest = $request;

            return $this->successfulCall();
        });

        $service->getCandles(
            new \DateTime('2026-01-01 00:00:00'),
            new \DateTime('2026-01-02 00:00:00'),
            1,
            'instrument-uid'
        );

        self::assertInstanceOf(GetCandlesRequest::class, $capturedRequest);
        self::assertFalse($capturedRequest->hasCandleSourceType());
        self::assertSame(CandleSource::CANDLE_SOURCE_UNSPECIFIED, $capturedRequest->getCandleSourceType());

        $deserializedRequest = new GetCandlesRequest();
        $deserializedRequest->mergeFromString($capturedRequest->serializeToString());

        self::assertFalse($deserializedRequest->hasCandleSourceType());
        self::assertSame(CandleSource::CANDLE_SOURCE_UNSPECIFIED, $deserializedRequest->getCandleSourceType());
    }

    private function marketDataService(callable $getCandles): MarketDataService
    {
        $client = $this->createMock(MarketDataServiceClient::class);
        $client->expects(self::once())
            ->method('GetCandles')
            ->with(self::isInstanceOf(GetCandlesRequest::class), [], TIClient::SPECIAL_OPTIONS)
            ->willReturnCallback($getCandles);

        $reflection = new \ReflectionClass(MarketDataService::class);
        $service = $reflection->newInstanceWithoutConstructor();
        $reflection->getProperty('client')->setValue($service, $client);

        return $service;
    }

    private function successfulCall(): object
    {
        return new class {
            public function wait(): array
            {
                return [new GetCandlesResponse(), new \stdClass()];
            }
        };
    }
}

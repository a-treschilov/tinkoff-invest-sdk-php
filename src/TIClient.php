<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk;

use ATreschilov\TinkoffInvestApiSdk\Services\InstrumentsServiceDecorator;
use ATreschilov\TinkoffInvestApiSdk\Services\MarketDataService;
use ATreschilov\TinkoffInvestApiSdk\Services\MarketDataServiceDecorator;
use ATreschilov\TinkoffInvestApiSdk\Services\OperationsService;
use ATreschilov\TinkoffInvestApiSdk\Services\OperationsServiceDecorator;
use ATreschilov\TinkoffInvestApiSdk\Services\UsersServiceDecorator;
use ATreschilov\TinkoffInvestApiSdk\Services\UsersService;
use Grpc\ChannelCredentials;
use JetBrains\PhpStorm\ArrayShape;

class TIClient
{
    private const INKOFF_INVEST_API2_HOST = 'invest-public-api.tinkoff.ru';
    private const CERT_FILE = __DIR__ . '/../etc/tinkoff-ru.pem';

    public const SPECIAL_OPTIONS = ['x-app-name' => 'a-treschilov.tinkoff-invest-sdk-php'];

    private string $token;
    private string $cert;

    private TIClientOptions $options;

    private UsersServiceDecorator|null $userService = null;
    private OperationsServiceDecorator|null $operationsService = null;
    private InstrumentsServiceDecorator|null $instrumentsService = null;
    private MarketDataServiceDecorator|null $marketDataService = null;

    /**
     * @param string $token
     * @param array{
     *      isRateLimitRetry: boolean
     *     } $options
     */
    public function __construct(string $token, array $options = [])
    {
        $this->token = $token;
        $this->cert = file_get_contents(self::CERT_FILE);
        $this->options = new TIClientOptions($options);
    }

    #[ArrayShape([
        'credentials' => "\Grpc\ChannelCredentials",
        'grpc.enable_http_proxy' => "int",
        'grpc.ssl_target_name_override' => "string",
        'update_metadata' => "\Closure"])
    ]
    public function getApiConfig(): array
    {
        return [
            'credentials' => ChannelCredentials::createSsl($this->cert),
            'grpc.enable_http_proxy' => 0,
            'grpc.ssl_target_name_override' => 'invest-public-api.tinkoff.ru',
            'update_metadata' => function ($metaData) {
                $metaData['authorization'] = ['Bearer ' . $this->token];
                return $metaData;
            }
        ];
    }

    public function getHostName(): string
    {
        return self::INKOFF_INVEST_API2_HOST;
    }

    public function getUser(): UsersServiceDecorator
    {
        if ($this->userService === null) {
            $this->userService = new UsersServiceDecorator($this);
        }
        return $this->userService;
    }

    public function getOperations()
    {
        if ($this->operationsService === null) {
            $this->operationsService = new OperationsServiceDecorator($this);
        }
        return $this->operationsService;
    }

    public function getInstruments(): InstrumentsServiceDecorator
    {
        if ($this->instrumentsService === null) {
            $this->instrumentsService = new InstrumentsServiceDecorator($this);
        }
        return $this->instrumentsService;
    }

    public function getMarketData(): MarketDataServiceDecorator
    {
        if ($this->marketDataService === null) {
            $this->marketDataService = new MarketDataServiceDecorator($this);
        }
        return $this->marketDataService;
    }

    public function getOptions(): TIClientOptions
    {
        return $this->options;
    }
}

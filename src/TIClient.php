<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk;

use ATreschilov\TinkoffInvestApiSdk\Services\OperationsService;
use ATreschilov\TinkoffInvestApiSdk\Services\UsersService;
use Grpc\ChannelCredentials;
use JetBrains\PhpStorm\ArrayShape;

class TIClient
{
    private const INKOFF_INVEST_API2_HOST = 'invest-public-api.tinkoff.ru';
    private const TINKOFF_INVEST_API2_PORT = 443;
    private const CERT_FILE = __DIR__ . '/../etc/tinkoff-ru.pem';

    private string $token;
    private string $cert;

    private UsersService|null $userService = null;
    private OperationsService|null $operationsService = null;

    public function __construct(string $token)
    {
        $this->token = $token;
        $this->cert = file_get_contents(self::CERT_FILE);
    }

    #[ArrayShape([
        'credentials' => "\Grpc\ChannelCredentials",
        'grpc.enable_http_proxy' => "int",
        'grpc.ssl_target_name_override' => "string",
        'update_metadata' => "\Closure"])
    ]
    public function getOptions(): array
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

    public function getUser()
    {
        if ($this->userService === null) {
            $this->userService = new UsersService($this);
        }
        return $this->userService;
    }

    public function getOperations()
    {
        if ($this->operationsService === null) {
            $this->operationsService = new OperationsService($this);
        }
        return $this->operationsService;
    }
}

<?php

declare(strict_types=1);

namespace ATreschilov\TinkoffInvestApiSdk\Exceptions;

use DateTime;

class TIException extends \Exception
{
    protected array $context = [];
    protected ?string $requestId = null;
    protected ?DateTime $timestamp = null;
    protected ?string $endpoint = null;
    protected ?string $correlationId = null;

    public function __construct(
        string $message = '',
        int $code = 0,
        ?\Throwable $previous = null,
        array $context = []
    ) {
        parent::__construct($message, $code, $previous);
        $this->context = $context;
        $this->timestamp = new DateTime();
    }

    public function getContext(): array
    {
        return array_merge($this->context, [
            'request_id' => $this->requestId,
            'timestamp' => $this->timestamp?->format('Y-m-d H:i:s'),
            'endpoint' => $this->endpoint,
            'correlation_id' => $this->correlationId,
            'exception_class' => static::class,
        ]);
    }

    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    public function getTimestamp(): ?DateTime
    {
        return $this->timestamp;
    }

    public function getEndpoint(): ?string
    {
        return $this->endpoint;
    }

    public function getCorrelationId(): ?string
    {
        return $this->correlationId;
    }

    public function withContext(array $context): static
    {
        $this->context = array_merge($this->context, $context);
        return $this;
    }

    public function withRequestId(string $requestId): static
    {
        $this->requestId = $requestId;
        return $this;
    }

    public function withEndpoint(string $endpoint): static
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    public function withCorrelationId(string $correlationId): static
    {
        $this->correlationId = $correlationId;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'message' => $this->getMessage(),
            'code' => $this->getCode(),
            'file' => $this->getFile(),
            'line' => $this->getLine(),
            'context' => $this->getContext(),
            'trace' => $this->getTraceAsString(),
        ];
    }
}

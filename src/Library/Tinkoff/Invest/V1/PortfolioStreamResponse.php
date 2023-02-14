<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Информация по позициям и доходностям портфелей.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.PortfolioStreamResponse</code>
 */
class PortfolioStreamResponse extends \Google\Protobuf\Internal\Message
{
    protected $payload;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\PortfolioSubscriptionResult $subscriptions
     *          Объект результата подписки.
     *     @type \Tinkoff\Invest\V1\PortfolioResponse $portfolio
     *          Объект стриминга портфеля.
     *     @type \Tinkoff\Invest\V1\Ping $ping
     *          Проверка активности стрима.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Объект результата подписки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.PortfolioSubscriptionResult subscriptions = 1;</code>
     * @return \Tinkoff\Invest\V1\PortfolioSubscriptionResult
     */
    public function getSubscriptions()
    {
        return $this->readOneof(1);
    }

    /**
     *Объект результата подписки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.PortfolioSubscriptionResult subscriptions = 1;</code>
     * @param \Tinkoff\Invest\V1\PortfolioSubscriptionResult $var
     * @return $this
     */
    public function setSubscriptions($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\PortfolioSubscriptionResult::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     *Объект стриминга портфеля.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.PortfolioResponse portfolio = 2;</code>
     * @return \Tinkoff\Invest\V1\PortfolioResponse
     */
    public function getPortfolio()
    {
        return $this->readOneof(2);
    }

    /**
     *Объект стриминга портфеля.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.PortfolioResponse portfolio = 2;</code>
     * @param \Tinkoff\Invest\V1\PortfolioResponse $var
     * @return $this
     */
    public function setPortfolio($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\PortfolioResponse::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     *Проверка активности стрима.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Ping ping = 3;</code>
     * @return \Tinkoff\Invest\V1\Ping
     */
    public function getPing()
    {
        return $this->readOneof(3);
    }

    /**
     *Проверка активности стрима.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Ping ping = 3;</code>
     * @param \Tinkoff\Invest\V1\Ping $var
     * @return $this
     */
    public function setPing($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Ping::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->whichOneof("payload");
    }

}

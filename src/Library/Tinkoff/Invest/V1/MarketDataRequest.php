<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос подписки или отписки на определённые биржевые данные.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.MarketDataRequest</code>
 */
class MarketDataRequest extends \Google\Protobuf\Internal\Message
{
    protected $payload;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\SubscribeCandlesRequest $subscribe_candles_request
     *          Запрос подписки на свечи.
     *     @type \Tinkoff\Invest\V1\SubscribeOrderBookRequest $subscribe_order_book_request
     *          Запрос подписки на стаканы.
     *     @type \Tinkoff\Invest\V1\SubscribeTradesRequest $subscribe_trades_request
     *          Запрос подписки на ленту обезличенных сделок.
     *     @type \Tinkoff\Invest\V1\SubscribeInfoRequest $subscribe_info_request
     *          Запрос подписки на торговые статусы инструментов.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Запрос подписки на свечи.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeCandlesRequest subscribe_candles_request = 1;</code>
     * @return \Tinkoff\Invest\V1\SubscribeCandlesRequest
     */
    public function getSubscribeCandlesRequest()
    {
        return $this->readOneof(1);
    }

    /**
     *Запрос подписки на свечи.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeCandlesRequest subscribe_candles_request = 1;</code>
     * @param \Tinkoff\Invest\V1\SubscribeCandlesRequest $var
     * @return $this
     */
    public function setSubscribeCandlesRequest($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\SubscribeCandlesRequest::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     *Запрос подписки на стаканы.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeOrderBookRequest subscribe_order_book_request = 2;</code>
     * @return \Tinkoff\Invest\V1\SubscribeOrderBookRequest
     */
    public function getSubscribeOrderBookRequest()
    {
        return $this->readOneof(2);
    }

    /**
     *Запрос подписки на стаканы.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeOrderBookRequest subscribe_order_book_request = 2;</code>
     * @param \Tinkoff\Invest\V1\SubscribeOrderBookRequest $var
     * @return $this
     */
    public function setSubscribeOrderBookRequest($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\SubscribeOrderBookRequest::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     *Запрос подписки на ленту обезличенных сделок.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeTradesRequest subscribe_trades_request = 3;</code>
     * @return \Tinkoff\Invest\V1\SubscribeTradesRequest
     */
    public function getSubscribeTradesRequest()
    {
        return $this->readOneof(3);
    }

    /**
     *Запрос подписки на ленту обезличенных сделок.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeTradesRequest subscribe_trades_request = 3;</code>
     * @param \Tinkoff\Invest\V1\SubscribeTradesRequest $var
     * @return $this
     */
    public function setSubscribeTradesRequest($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\SubscribeTradesRequest::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     *Запрос подписки на торговые статусы инструментов.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeInfoRequest subscribe_info_request = 4;</code>
     * @return \Tinkoff\Invest\V1\SubscribeInfoRequest
     */
    public function getSubscribeInfoRequest()
    {
        return $this->readOneof(4);
    }

    /**
     *Запрос подписки на торговые статусы инструментов.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscribeInfoRequest subscribe_info_request = 4;</code>
     * @param \Tinkoff\Invest\V1\SubscribeInfoRequest $var
     * @return $this
     */
    public function setSubscribeInfoRequest($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\SubscribeInfoRequest::class);
        $this->writeOneof(4, $var);

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


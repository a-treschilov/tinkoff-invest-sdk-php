<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Результат изменения статуса подписки на стаканы.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.SubscribeOrderBookResponse</code>
 */
class SubscribeOrderBookResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Уникальный идентификатор запроса. [Подробнее](./grpc#tracking-id).
     *
     * Generated from protobuf field <code>string tracking_id = 1;</code>
     */
    protected $tracking_id = '';
    /**
     *Массив статусов подписки на стаканы.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.OrderBookSubscription order_book_subscriptions = 2;</code>
     */
    private $order_book_subscriptions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tracking_id
     *          Уникальный идентификатор запроса. [Подробнее](./grpc#tracking-id).
     *     @type array<\Tinkoff\Invest\V1\OrderBookSubscription>|\Google\Protobuf\Internal\RepeatedField $order_book_subscriptions
     *          Массив статусов подписки на стаканы.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Уникальный идентификатор запроса. [Подробнее](./grpc#tracking-id).
     *
     * Generated from protobuf field <code>string tracking_id = 1;</code>
     * @return string
     */
    public function getTrackingId()
    {
        return $this->tracking_id;
    }

    /**
     *Уникальный идентификатор запроса. [Подробнее](./grpc#tracking-id).
     *
     * Generated from protobuf field <code>string tracking_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_id = $var;

        return $this;
    }

    /**
     *Массив статусов подписки на стаканы.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.OrderBookSubscription order_book_subscriptions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrderBookSubscriptions()
    {
        return $this->order_book_subscriptions;
    }

    /**
     *Массив статусов подписки на стаканы.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.OrderBookSubscription order_book_subscriptions = 2;</code>
     * @param array<\Tinkoff\Invest\V1\OrderBookSubscription>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrderBookSubscriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\OrderBookSubscription::class);
        $this->order_book_subscriptions = $arr;

        return $this;
    }

}


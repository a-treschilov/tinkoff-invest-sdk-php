<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Статус подписки.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.OrderBookSubscription</code>
 */
class OrderBookSubscription extends \Google\Protobuf\Internal\Message
{
    /**
     *FIGI-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Глубина стакана.
     *
     * Generated from protobuf field <code>int32 depth = 2;</code>
     */
    protected $depth = 0;
    /**
     *Статус подписки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscriptionStatus subscription_status = 3;</code>
     */
    protected $subscription_status = 0;
    /**
     *UID инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 4;</code>
     */
    protected $instrument_uid = '';
    /**
     *Идентификатор открытого соединения.
     *
     * Generated from protobuf field <code>string stream_id = 5;</code>
     */
    protected $stream_id = '';
    /**
     *Идентификатор подписки в формате `UUID`.
     *
     * Generated from protobuf field <code>string subscription_id = 6;</code>
     */
    protected $subscription_id = '';
    /**
     *Тип стакана.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderBookType order_book_type = 7;</code>
     */
    protected $order_book_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          FIGI-идентификатор инструмента.
     *     @type int $depth
     *          Глубина стакана.
     *     @type int $subscription_status
     *          Статус подписки.
     *     @type string $instrument_uid
     *          UID инструмента.
     *     @type string $stream_id
     *          Идентификатор открытого соединения.
     *     @type string $subscription_id
     *          Идентификатор подписки в формате `UUID`.
     *     @type int $order_book_type
     *          Тип стакана.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *FIGI-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *FIGI-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFigi($var)
    {
        GPBUtil::checkString($var, True);
        $this->figi = $var;

        return $this;
    }

    /**
     *Глубина стакана.
     *
     * Generated from protobuf field <code>int32 depth = 2;</code>
     * @return int
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     *Глубина стакана.
     *
     * Generated from protobuf field <code>int32 depth = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDepth($var)
    {
        GPBUtil::checkInt32($var);
        $this->depth = $var;

        return $this;
    }

    /**
     *Статус подписки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscriptionStatus subscription_status = 3;</code>
     * @return int
     */
    public function getSubscriptionStatus()
    {
        return $this->subscription_status;
    }

    /**
     *Статус подписки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscriptionStatus subscription_status = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSubscriptionStatus($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\SubscriptionStatus::class);
        $this->subscription_status = $var;

        return $this;
    }

    /**
     *UID инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 4;</code>
     * @return string
     */
    public function getInstrumentUid()
    {
        return $this->instrument_uid;
    }

    /**
     *UID инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setInstrumentUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->instrument_uid = $var;

        return $this;
    }

    /**
     *Идентификатор открытого соединения.
     *
     * Generated from protobuf field <code>string stream_id = 5;</code>
     * @return string
     */
    public function getStreamId()
    {
        return $this->stream_id;
    }

    /**
     *Идентификатор открытого соединения.
     *
     * Generated from protobuf field <code>string stream_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStreamId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stream_id = $var;

        return $this;
    }

    /**
     *Идентификатор подписки в формате `UUID`.
     *
     * Generated from protobuf field <code>string subscription_id = 6;</code>
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscription_id;
    }

    /**
     *Идентификатор подписки в формате `UUID`.
     *
     * Generated from protobuf field <code>string subscription_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSubscriptionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription_id = $var;

        return $this;
    }

    /**
     *Тип стакана.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderBookType order_book_type = 7;</code>
     * @return int
     */
    public function getOrderBookType()
    {
        return $this->order_book_type;
    }

    /**
     *Тип стакана.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderBookType order_book_type = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setOrderBookType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\OrderBookType::class);
        $this->order_book_type = $var;

        return $this;
    }

}


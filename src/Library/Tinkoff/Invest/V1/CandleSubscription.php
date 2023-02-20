<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Статус подписки на свечи.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.CandleSubscription</code>
 */
class CandleSubscription extends \Google\Protobuf\Internal\Message
{
    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Интервал свечей.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscriptionInterval interval = 2;</code>
     */
    protected $interval = 0;
    /**
     *Статус подписки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscriptionStatus subscription_status = 3;</code>
     */
    protected $subscription_status = 0;
    /**
     *Uid инструмента
     *
     * Generated from protobuf field <code>string instrument_uid = 4;</code>
     */
    protected $instrument_uid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          Figi-идентификатор инструмента.
     *     @type int $interval
     *          Интервал свечей.
     *     @type int $subscription_status
     *          Статус подписки.
     *     @type string $instrument_uid
     *          Uid инструмента
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *Figi-идентификатор инструмента.
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
     *Интервал свечей.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscriptionInterval interval = 2;</code>
     * @return int
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     *Интервал свечей.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscriptionInterval interval = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\SubscriptionInterval::class);
        $this->interval = $var;

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
     *Uid инструмента
     *
     * Generated from protobuf field <code>string instrument_uid = 4;</code>
     * @return string
     */
    public function getInstrumentUid()
    {
        return $this->instrument_uid;
    }

    /**
     *Uid инструмента
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

}


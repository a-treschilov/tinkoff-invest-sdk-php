<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Изменение статуса подписки на торговый статус инструмента.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.SubscribeInfoRequest</code>
 */
class SubscribeInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Изменение статуса подписки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscriptionAction subscription_action = 1;</code>
     */
    protected $subscription_action = 0;
    /**
     *Массив инструментов для подписки на торговый статус.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.InfoInstrument instruments = 2;</code>
     */
    private $instruments;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $subscription_action
     *          Изменение статуса подписки.
     *     @type array<\Tinkoff\Invest\V1\InfoInstrument>|\Google\Protobuf\Internal\RepeatedField $instruments
     *          Массив инструментов для подписки на торговый статус.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Изменение статуса подписки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscriptionAction subscription_action = 1;</code>
     * @return int
     */
    public function getSubscriptionAction()
    {
        return $this->subscription_action;
    }

    /**
     *Изменение статуса подписки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SubscriptionAction subscription_action = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setSubscriptionAction($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\SubscriptionAction::class);
        $this->subscription_action = $var;

        return $this;
    }

    /**
     *Массив инструментов для подписки на торговый статус.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.InfoInstrument instruments = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstruments()
    {
        return $this->instruments;
    }

    /**
     *Массив инструментов для подписки на торговый статус.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.InfoInstrument instruments = 2;</code>
     * @param array<\Tinkoff\Invest\V1\InfoInstrument>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstruments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\InfoInstrument::class);
        $this->instruments = $arr;

        return $this;
    }

}


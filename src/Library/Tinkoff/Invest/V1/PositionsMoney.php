<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Валютная позиция портфеля.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.PositionsMoney</code>
 */
class PositionsMoney extends \Google\Protobuf\Internal\Message
{
    /**
     *Доступное количество валютный позиций.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue available_value = 1;</code>
     */
    protected $available_value = null;
    /**
     *Заблокированное количество валютный позиций.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue blocked_value = 2;</code>
     */
    protected $blocked_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\MoneyValue $available_value
     *          Доступное количество валютный позиций.
     *     @type \Tinkoff\Invest\V1\MoneyValue $blocked_value
     *          Заблокированное количество валютный позиций.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Доступное количество валютный позиций.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue available_value = 1;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getAvailableValue()
    {
        return $this->available_value;
    }

    public function hasAvailableValue()
    {
        return isset($this->available_value);
    }

    public function clearAvailableValue()
    {
        unset($this->available_value);
    }

    /**
     *Доступное количество валютный позиций.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue available_value = 1;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setAvailableValue($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->available_value = $var;

        return $this;
    }

    /**
     *Заблокированное количество валютный позиций.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue blocked_value = 2;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getBlockedValue()
    {
        return $this->blocked_value;
    }

    public function hasBlockedValue()
    {
        return isset($this->blocked_value);
    }

    public function clearBlockedValue()
    {
        unset($this->blocked_value);
    }

    /**
     *Заблокированное количество валютный позиций.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue blocked_value = 2;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setBlockedValue($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->blocked_value = $var;

        return $this;
    }

}


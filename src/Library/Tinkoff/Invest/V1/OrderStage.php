<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Сделки в рамках торгового поручения.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.OrderStage</code>
 */
class OrderStage extends \Google\Protobuf\Internal\Message
{
    /**
     *Цена за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 1;</code>
     */
    protected $price = null;
    /**
     *Количество лотов.
     *
     * Generated from protobuf field <code>int64 quantity = 2;</code>
     */
    protected $quantity = 0;
    /**
     *Идентификатор сделки.
     *
     * Generated from protobuf field <code>string trade_id = 3;</code>
     */
    protected $trade_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\MoneyValue $price
     *          Цена за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *     @type int|string $quantity
     *          Количество лотов.
     *     @type string $trade_id
     *          Идентификатор сделки.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Orders::initOnce();
        parent::__construct($data);
    }

    /**
     *Цена за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 1;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function hasPrice()
    {
        return isset($this->price);
    }

    public function clearPrice()
    {
        unset($this->price);
    }

    /**
     *Цена за 1 инструмент. Для получения стоимости лота требуется умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 1;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->price = $var;

        return $this;
    }

    /**
     *Количество лотов.
     *
     * Generated from protobuf field <code>int64 quantity = 2;</code>
     * @return int|string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     *Количество лотов.
     *
     * Generated from protobuf field <code>int64 quantity = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt64($var);
        $this->quantity = $var;

        return $this;
    }

    /**
     *Идентификатор сделки.
     *
     * Generated from protobuf field <code>string trade_id = 3;</code>
     * @return string
     */
    public function getTradeId()
    {
        return $this->trade_id;
    }

    /**
     *Идентификатор сделки.
     *
     * Generated from protobuf field <code>string trade_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTradeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trade_id = $var;

        return $this;
    }

}


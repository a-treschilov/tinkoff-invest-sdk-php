<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос получения предварительной стоимости заявки
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetOrderPriceRequest</code>
 */
class GetOrderPriceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Номер счета
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     */
    protected $account_id = '';
    /**
     *Идентификатор инструмента, принимает значения Figi или instrument_uid
     *
     * Generated from protobuf field <code>string instrument_id = 2;</code>
     */
    protected $instrument_id = '';
    /**
     *Цена инструмента
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 3;</code>
     */
    protected $price = null;
    /**
     *Направление заявки
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderDirection direction = 12;</code>
     */
    protected $direction = 0;
    /**
     *Количество лотов
     *
     * Generated from protobuf field <code>int64 quantity = 13;</code>
     */
    protected $quantity = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_id
     *          Номер счета
     *     @type string $instrument_id
     *          Идентификатор инструмента, принимает значения Figi или instrument_uid
     *     @type \Tinkoff\Invest\V1\Quotation $price
     *          Цена инструмента
     *     @type int $direction
     *          Направление заявки
     *     @type int|string $quantity
     *          Количество лотов
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Orders::initOnce();
        parent::__construct($data);
    }

    /**
     *Номер счета
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     *Номер счета
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;

        return $this;
    }

    /**
     *Идентификатор инструмента, принимает значения Figi или instrument_uid
     *
     * Generated from protobuf field <code>string instrument_id = 2;</code>
     * @return string
     */
    public function getInstrumentId()
    {
        return $this->instrument_id;
    }

    /**
     *Идентификатор инструмента, принимает значения Figi или instrument_uid
     *
     * Generated from protobuf field <code>string instrument_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInstrumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instrument_id = $var;

        return $this;
    }

    /**
     *Цена инструмента
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 3;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
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
     *Цена инструмента
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 3;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->price = $var;

        return $this;
    }

    /**
     *Направление заявки
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderDirection direction = 12;</code>
     * @return int
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     *Направление заявки
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderDirection direction = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setDirection($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\OrderDirection::class);
        $this->direction = $var;

        return $this;
    }

    /**
     *Количество лотов
     *
     * Generated from protobuf field <code>int64 quantity = 13;</code>
     * @return int|string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     *Количество лотов
     *
     * Generated from protobuf field <code>int64 quantity = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkInt64($var);
        $this->quantity = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос выставления торгового поручения.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.PostOrderRequest</code>
 */
class PostOrderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Количество лотов.
     *
     * Generated from protobuf field <code>int64 quantity = 2;</code>
     */
    protected $quantity = 0;
    /**
     *Цена лота.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 3;</code>
     */
    protected $price = null;
    /**
     *Направление операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderDirection direction = 4;</code>
     */
    protected $direction = 0;
    /**
     *Номер счёта.
     *
     * Generated from protobuf field <code>string account_id = 5;</code>
     */
    protected $account_id = '';
    /**
     *Тип заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderType order_type = 6;</code>
     */
    protected $order_type = 0;
    /**
     *Идентификатор запроса выставления поручения для целей идемпотентности. Максимальная длина 36 символов.
     *
     * Generated from protobuf field <code>string order_id = 7;</code>
     */
    protected $order_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          Figi-идентификатор инструмента.
     *     @type int|string $quantity
     *          Количество лотов.
     *     @type \Tinkoff\Invest\V1\Quotation $price
     *          Цена лота.
     *     @type int $direction
     *          Направление операции.
     *     @type string $account_id
     *          Номер счёта.
     *     @type int $order_type
     *          Тип заявки.
     *     @type string $order_id
     *          Идентификатор запроса выставления поручения для целей идемпотентности. Максимальная длина 36 символов.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Orders::initOnce();
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
     *Цена лота.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price = 3;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     *Цена лота.
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
     *Направление операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderDirection direction = 4;</code>
     * @return int
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     *Направление операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderDirection direction = 4;</code>
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
     *Номер счёта.
     *
     * Generated from protobuf field <code>string account_id = 5;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     *Номер счёта.
     *
     * Generated from protobuf field <code>string account_id = 5;</code>
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
     *Тип заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderType order_type = 6;</code>
     * @return int
     */
    public function getOrderType()
    {
        return $this->order_type;
    }

    /**
     *Тип заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderType order_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOrderType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\OrderType::class);
        $this->order_type = $var;

        return $this;
    }

    /**
     *Идентификатор запроса выставления поручения для целей идемпотентности. Максимальная длина 36 символов.
     *
     * Generated from protobuf field <code>string order_id = 7;</code>
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     *Идентификатор запроса выставления поручения для целей идемпотентности. Максимальная длина 36 символов.
     *
     * Generated from protobuf field <code>string order_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_id = $var;

        return $this;
    }

}


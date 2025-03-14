<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: stoporders.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Информация о стоп-заявке.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.StopOrder</code>
 */
class StopOrder extends \Google\Protobuf\Internal\Message
{
    /**
     *Уникальный идентификатор стоп-заявки.
     *
     * Generated from protobuf field <code>string stop_order_id = 1;</code>
     */
    protected $stop_order_id = '';
    /**
     *Запрошено лотов.
     *
     * Generated from protobuf field <code>int64 lots_requested = 2;</code>
     */
    protected $lots_requested = 0;
    /**
     *FIGI-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 3;</code>
     */
    protected $figi = '';
    /**
     *Направление операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderDirection direction = 4;</code>
     */
    protected $direction = 0;
    /**
     *Валюта стоп-заявки.
     *
     * Generated from protobuf field <code>string currency = 5;</code>
     */
    protected $currency = '';
    /**
     *Тип стоп-заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderType order_type = 6;</code>
     */
    protected $order_type = 0;
    /**
     *Дата и время выставления заявки по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_date = 7;</code>
     */
    protected $create_date = null;
    /**
     *Дата и время конвертации стоп-заявки в биржевую по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp activation_date_time = 8;</code>
     */
    protected $activation_date_time = null;
    /**
     *Дата и время снятия заявки по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 9;</code>
     */
    protected $expiration_time = null;
    /**
     *Цена заявки за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 10;</code>
     */
    protected $price = null;
    /**
     *Цена активации стоп-заявки за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue stop_price = 11;</code>
     */
    protected $stop_price = null;
    /**
     *`instrument_uid`-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 12;</code>
     */
    protected $instrument_uid = '';
    /**
     *Подтип стоп-заявки — `TakeProfit`.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.TakeProfitType take_profit_type = 13;</code>
     */
    protected $take_profit_type = 0;
    /**
     *Параметры трейлинг-стопа.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrder.TrailingData trailing_data = 14;</code>
     */
    protected $trailing_data = null;
    /**
     *Статус заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderStatusOption status = 15;</code>
     */
    protected $status = 0;
    /**
     *Тип дочерней биржевой заявки для тейкпрофита.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.ExchangeOrderType exchange_order_type = 16;</code>
     */
    protected $exchange_order_type = 0;
    /**
     *Идентификатор биржевой заявки.
     *
     * Generated from protobuf field <code>optional string exchange_order_id = 17;</code>
     */
    protected $exchange_order_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $stop_order_id
     *          Уникальный идентификатор стоп-заявки.
     *     @type int|string $lots_requested
     *          Запрошено лотов.
     *     @type string $figi
     *          FIGI-идентификатор инструмента.
     *     @type int $direction
     *          Направление операции.
     *     @type string $currency
     *          Валюта стоп-заявки.
     *     @type int $order_type
     *          Тип стоп-заявки.
     *     @type \Google\Protobuf\Timestamp $create_date
     *          Дата и время выставления заявки по UTC.
     *     @type \Google\Protobuf\Timestamp $activation_date_time
     *          Дата и время конвертации стоп-заявки в биржевую по UTC.
     *     @type \Google\Protobuf\Timestamp $expiration_time
     *          Дата и время снятия заявки по UTC.
     *     @type \Tinkoff\Invest\V1\MoneyValue $price
     *          Цена заявки за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *     @type \Tinkoff\Invest\V1\MoneyValue $stop_price
     *          Цена активации стоп-заявки за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *     @type string $instrument_uid
     *          `instrument_uid`-идентификатор инструмента.
     *     @type int $take_profit_type
     *          Подтип стоп-заявки — `TakeProfit`.
     *     @type \Tinkoff\Invest\V1\StopOrder\TrailingData $trailing_data
     *          Параметры трейлинг-стопа.
     *     @type int $status
     *          Статус заявки.
     *     @type int $exchange_order_type
     *          Тип дочерней биржевой заявки для тейкпрофита.
     *     @type string $exchange_order_id
     *          Идентификатор биржевой заявки.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Stoporders::initOnce();
        parent::__construct($data);
    }

    /**
     *Уникальный идентификатор стоп-заявки.
     *
     * Generated from protobuf field <code>string stop_order_id = 1;</code>
     * @return string
     */
    public function getStopOrderId()
    {
        return $this->stop_order_id;
    }

    /**
     *Уникальный идентификатор стоп-заявки.
     *
     * Generated from protobuf field <code>string stop_order_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStopOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stop_order_id = $var;

        return $this;
    }

    /**
     *Запрошено лотов.
     *
     * Generated from protobuf field <code>int64 lots_requested = 2;</code>
     * @return int|string
     */
    public function getLotsRequested()
    {
        return $this->lots_requested;
    }

    /**
     *Запрошено лотов.
     *
     * Generated from protobuf field <code>int64 lots_requested = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLotsRequested($var)
    {
        GPBUtil::checkInt64($var);
        $this->lots_requested = $var;

        return $this;
    }

    /**
     *FIGI-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 3;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *FIGI-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 3;</code>
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
     *Направление операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderDirection direction = 4;</code>
     * @return int
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     *Направление операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderDirection direction = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDirection($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\StopOrderDirection::class);
        $this->direction = $var;

        return $this;
    }

    /**
     *Валюта стоп-заявки.
     *
     * Generated from protobuf field <code>string currency = 5;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     *Валюта стоп-заявки.
     *
     * Generated from protobuf field <code>string currency = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency = $var;

        return $this;
    }

    /**
     *Тип стоп-заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderType order_type = 6;</code>
     * @return int
     */
    public function getOrderType()
    {
        return $this->order_type;
    }

    /**
     *Тип стоп-заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderType order_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setOrderType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\StopOrderType::class);
        $this->order_type = $var;

        return $this;
    }

    /**
     *Дата и время выставления заявки по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_date = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    public function hasCreateDate()
    {
        return isset($this->create_date);
    }

    public function clearCreateDate()
    {
        unset($this->create_date);
    }

    /**
     *Дата и время выставления заявки по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_date = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_date = $var;

        return $this;
    }

    /**
     *Дата и время конвертации стоп-заявки в биржевую по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp activation_date_time = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getActivationDateTime()
    {
        return $this->activation_date_time;
    }

    public function hasActivationDateTime()
    {
        return isset($this->activation_date_time);
    }

    public function clearActivationDateTime()
    {
        unset($this->activation_date_time);
    }

    /**
     *Дата и время конвертации стоп-заявки в биржевую по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp activation_date_time = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setActivationDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->activation_date_time = $var;

        return $this;
    }

    /**
     *Дата и время снятия заявки по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpirationTime()
    {
        return $this->expiration_time;
    }

    public function hasExpirationTime()
    {
        return isset($this->expiration_time);
    }

    public function clearExpirationTime()
    {
        unset($this->expiration_time);
    }

    /**
     *Дата и время снятия заявки по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpirationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiration_time = $var;

        return $this;
    }

    /**
     *Цена заявки за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 10;</code>
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
     *Цена заявки за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 10;</code>
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
     *Цена активации стоп-заявки за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue stop_price = 11;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getStopPrice()
    {
        return $this->stop_price;
    }

    public function hasStopPrice()
    {
        return isset($this->stop_price);
    }

    public function clearStopPrice()
    {
        unset($this->stop_price);
    }

    /**
     *Цена активации стоп-заявки за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue stop_price = 11;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setStopPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->stop_price = $var;

        return $this;
    }

    /**
     *`instrument_uid`-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 12;</code>
     * @return string
     */
    public function getInstrumentUid()
    {
        return $this->instrument_uid;
    }

    /**
     *`instrument_uid`-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 12;</code>
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
     *Подтип стоп-заявки — `TakeProfit`.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.TakeProfitType take_profit_type = 13;</code>
     * @return int
     */
    public function getTakeProfitType()
    {
        return $this->take_profit_type;
    }

    /**
     *Подтип стоп-заявки — `TakeProfit`.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.TakeProfitType take_profit_type = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setTakeProfitType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\TakeProfitType::class);
        $this->take_profit_type = $var;

        return $this;
    }

    /**
     *Параметры трейлинг-стопа.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrder.TrailingData trailing_data = 14;</code>
     * @return \Tinkoff\Invest\V1\StopOrder\TrailingData|null
     */
    public function getTrailingData()
    {
        return $this->trailing_data;
    }

    public function hasTrailingData()
    {
        return isset($this->trailing_data);
    }

    public function clearTrailingData()
    {
        unset($this->trailing_data);
    }

    /**
     *Параметры трейлинг-стопа.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrder.TrailingData trailing_data = 14;</code>
     * @param \Tinkoff\Invest\V1\StopOrder\TrailingData $var
     * @return $this
     */
    public function setTrailingData($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\StopOrder\TrailingData::class);
        $this->trailing_data = $var;

        return $this;
    }

    /**
     *Статус заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderStatusOption status = 15;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     *Статус заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StopOrderStatusOption status = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\StopOrderStatusOption::class);
        $this->status = $var;

        return $this;
    }

    /**
     *Тип дочерней биржевой заявки для тейкпрофита.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.ExchangeOrderType exchange_order_type = 16;</code>
     * @return int
     */
    public function getExchangeOrderType()
    {
        return $this->exchange_order_type;
    }

    /**
     *Тип дочерней биржевой заявки для тейкпрофита.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.ExchangeOrderType exchange_order_type = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setExchangeOrderType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\ExchangeOrderType::class);
        $this->exchange_order_type = $var;

        return $this;
    }

    /**
     *Идентификатор биржевой заявки.
     *
     * Generated from protobuf field <code>optional string exchange_order_id = 17;</code>
     * @return string
     */
    public function getExchangeOrderId()
    {
        return isset($this->exchange_order_id) ? $this->exchange_order_id : '';
    }

    public function hasExchangeOrderId()
    {
        return isset($this->exchange_order_id);
    }

    public function clearExchangeOrderId()
    {
        unset($this->exchange_order_id);
    }

    /**
     *Идентификатор биржевой заявки.
     *
     * Generated from protobuf field <code>optional string exchange_order_id = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setExchangeOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->exchange_order_id = $var;

        return $this;
    }

}


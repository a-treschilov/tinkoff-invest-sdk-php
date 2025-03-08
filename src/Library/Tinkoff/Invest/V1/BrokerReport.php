<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.BrokerReport</code>
 */
class BrokerReport extends \Google\Protobuf\Internal\Message
{
    /**
     *Номер сделки.
     *
     * Generated from protobuf field <code>string trade_id = 1;</code>
     */
    protected $trade_id = '';
    /**
     *Номер поручения.
     *
     * Generated from protobuf field <code>string order_id = 2;</code>
     */
    protected $order_id = '';
    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 3;</code>
     */
    protected $figi = '';
    /**
     *Признак исполнения.
     *
     * Generated from protobuf field <code>string execute_sign = 4;</code>
     */
    protected $execute_sign = '';
    /**
     *Дата и время заключения в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp trade_datetime = 5;</code>
     */
    protected $trade_datetime = null;
    /**
     *Торговая площадка.
     *
     * Generated from protobuf field <code>string exchange = 6;</code>
     */
    protected $exchange = '';
    /**
     *Режим торгов.
     *
     * Generated from protobuf field <code>string class_code = 7;</code>
     */
    protected $class_code = '';
    /**
     *Вид сделки.
     *
     * Generated from protobuf field <code>string direction = 8;</code>
     */
    protected $direction = '';
    /**
     *Сокращённое наименование актива.
     *
     * Generated from protobuf field <code>string name = 9;</code>
     */
    protected $name = '';
    /**
     *Код актива.
     *
     * Generated from protobuf field <code>string ticker = 10;</code>
     */
    protected $ticker = '';
    /**
     *Цена за единицу.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 11;</code>
     */
    protected $price = null;
    /**
     *Количество.
     *
     * Generated from protobuf field <code>int64 quantity = 12;</code>
     */
    protected $quantity = 0;
    /**
     *Сумма (без НКД).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue order_amount = 13;</code>
     */
    protected $order_amount = null;
    /**
     *НКД.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation aci_value = 14;</code>
     */
    protected $aci_value = null;
    /**
     *Сумма сделки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_order_amount = 15;</code>
     */
    protected $total_order_amount = null;
    /**
     *Комиссия брокера.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue broker_commission = 16;</code>
     */
    protected $broker_commission = null;
    /**
     *Комиссия биржи.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue exchange_commission = 17;</code>
     */
    protected $exchange_commission = null;
    /**
     *Комиссия клир. центра.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue exchange_clearing_commission = 18;</code>
     */
    protected $exchange_clearing_commission = null;
    /**
     *Ставка РЕПО (%).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation repo_rate = 19;</code>
     */
    protected $repo_rate = null;
    /**
     *Контрагент/Брокер.
     *
     * Generated from protobuf field <code>string party = 20;</code>
     */
    protected $party = '';
    /**
     *Дата расчётов в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp clear_value_date = 21;</code>
     */
    protected $clear_value_date = null;
    /**
     *Дата поставки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp sec_value_date = 22;</code>
     */
    protected $sec_value_date = null;
    /**
     *Статус брокера.
     *
     * Generated from protobuf field <code>string broker_status = 23;</code>
     */
    protected $broker_status = '';
    /**
     *Тип дог.
     *
     * Generated from protobuf field <code>string separate_agreement_type = 24;</code>
     */
    protected $separate_agreement_type = '';
    /**
     *Номер дог.
     *
     * Generated from protobuf field <code>string separate_agreement_number = 25;</code>
     */
    protected $separate_agreement_number = '';
    /**
     *Дата дог.
     *
     * Generated from protobuf field <code>string separate_agreement_date = 26;</code>
     */
    protected $separate_agreement_date = '';
    /**
     *Тип расчёта по сделке.
     *
     * Generated from protobuf field <code>string delivery_type = 27;</code>
     */
    protected $delivery_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $trade_id
     *          Номер сделки.
     *     @type string $order_id
     *          Номер поручения.
     *     @type string $figi
     *          Figi-идентификатор инструмента.
     *     @type string $execute_sign
     *          Признак исполнения.
     *     @type \Google\Protobuf\Timestamp $trade_datetime
     *          Дата и время заключения в часовом поясе UTC.
     *     @type string $exchange
     *          Торговая площадка.
     *     @type string $class_code
     *          Режим торгов.
     *     @type string $direction
     *          Вид сделки.
     *     @type string $name
     *          Сокращённое наименование актива.
     *     @type string $ticker
     *          Код актива.
     *     @type \Tinkoff\Invest\V1\MoneyValue $price
     *          Цена за единицу.
     *     @type int|string $quantity
     *          Количество.
     *     @type \Tinkoff\Invest\V1\MoneyValue $order_amount
     *          Сумма (без НКД).
     *     @type \Tinkoff\Invest\V1\Quotation $aci_value
     *          НКД.
     *     @type \Tinkoff\Invest\V1\MoneyValue $total_order_amount
     *          Сумма сделки.
     *     @type \Tinkoff\Invest\V1\MoneyValue $broker_commission
     *          Комиссия брокера.
     *     @type \Tinkoff\Invest\V1\MoneyValue $exchange_commission
     *          Комиссия биржи.
     *     @type \Tinkoff\Invest\V1\MoneyValue $exchange_clearing_commission
     *          Комиссия клир. центра.
     *     @type \Tinkoff\Invest\V1\Quotation $repo_rate
     *          Ставка РЕПО (%).
     *     @type string $party
     *          Контрагент/Брокер.
     *     @type \Google\Protobuf\Timestamp $clear_value_date
     *          Дата расчётов в часовом поясе UTC.
     *     @type \Google\Protobuf\Timestamp $sec_value_date
     *          Дата поставки в часовом поясе UTC.
     *     @type string $broker_status
     *          Статус брокера.
     *     @type string $separate_agreement_type
     *          Тип дог.
     *     @type string $separate_agreement_number
     *          Номер дог.
     *     @type string $separate_agreement_date
     *          Дата дог.
     *     @type string $delivery_type
     *          Тип расчёта по сделке.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Номер сделки.
     *
     * Generated from protobuf field <code>string trade_id = 1;</code>
     * @return string
     */
    public function getTradeId()
    {
        return $this->trade_id;
    }

    /**
     *Номер сделки.
     *
     * Generated from protobuf field <code>string trade_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTradeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trade_id = $var;

        return $this;
    }

    /**
     *Номер поручения.
     *
     * Generated from protobuf field <code>string order_id = 2;</code>
     * @return string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     *Номер поручения.
     *
     * Generated from protobuf field <code>string order_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_id = $var;

        return $this;
    }

    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 3;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *Figi-идентификатор инструмента.
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
     *Признак исполнения.
     *
     * Generated from protobuf field <code>string execute_sign = 4;</code>
     * @return string
     */
    public function getExecuteSign()
    {
        return $this->execute_sign;
    }

    /**
     *Признак исполнения.
     *
     * Generated from protobuf field <code>string execute_sign = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setExecuteSign($var)
    {
        GPBUtil::checkString($var, True);
        $this->execute_sign = $var;

        return $this;
    }

    /**
     *Дата и время заключения в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp trade_datetime = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTradeDatetime()
    {
        return $this->trade_datetime;
    }

    public function hasTradeDatetime()
    {
        return isset($this->trade_datetime);
    }

    public function clearTradeDatetime()
    {
        unset($this->trade_datetime);
    }

    /**
     *Дата и время заключения в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp trade_datetime = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTradeDatetime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->trade_datetime = $var;

        return $this;
    }

    /**
     *Торговая площадка.
     *
     * Generated from protobuf field <code>string exchange = 6;</code>
     * @return string
     */
    public function getExchange()
    {
        return $this->exchange;
    }

    /**
     *Торговая площадка.
     *
     * Generated from protobuf field <code>string exchange = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setExchange($var)
    {
        GPBUtil::checkString($var, True);
        $this->exchange = $var;

        return $this;
    }

    /**
     *Режим торгов.
     *
     * Generated from protobuf field <code>string class_code = 7;</code>
     * @return string
     */
    public function getClassCode()
    {
        return $this->class_code;
    }

    /**
     *Режим торгов.
     *
     * Generated from protobuf field <code>string class_code = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setClassCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->class_code = $var;

        return $this;
    }

    /**
     *Вид сделки.
     *
     * Generated from protobuf field <code>string direction = 8;</code>
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     *Вид сделки.
     *
     * Generated from protobuf field <code>string direction = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDirection($var)
    {
        GPBUtil::checkString($var, True);
        $this->direction = $var;

        return $this;
    }

    /**
     *Сокращённое наименование актива.
     *
     * Generated from protobuf field <code>string name = 9;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *Сокращённое наименование актива.
     *
     * Generated from protobuf field <code>string name = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     *Код актива.
     *
     * Generated from protobuf field <code>string ticker = 10;</code>
     * @return string
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     *Код актива.
     *
     * Generated from protobuf field <code>string ticker = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setTicker($var)
    {
        GPBUtil::checkString($var, True);
        $this->ticker = $var;

        return $this;
    }

    /**
     *Цена за единицу.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 11;</code>
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
     *Цена за единицу.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 11;</code>
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
     *Количество.
     *
     * Generated from protobuf field <code>int64 quantity = 12;</code>
     * @return int|string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     *Количество.
     *
     * Generated from protobuf field <code>int64 quantity = 12;</code>
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
     *Сумма (без НКД).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue order_amount = 13;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getOrderAmount()
    {
        return $this->order_amount;
    }

    public function hasOrderAmount()
    {
        return isset($this->order_amount);
    }

    public function clearOrderAmount()
    {
        unset($this->order_amount);
    }

    /**
     *Сумма (без НКД).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue order_amount = 13;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setOrderAmount($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->order_amount = $var;

        return $this;
    }

    /**
     *НКД.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation aci_value = 14;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getAciValue()
    {
        return $this->aci_value;
    }

    public function hasAciValue()
    {
        return isset($this->aci_value);
    }

    public function clearAciValue()
    {
        unset($this->aci_value);
    }

    /**
     *НКД.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation aci_value = 14;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setAciValue($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->aci_value = $var;

        return $this;
    }

    /**
     *Сумма сделки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_order_amount = 15;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getTotalOrderAmount()
    {
        return $this->total_order_amount;
    }

    public function hasTotalOrderAmount()
    {
        return isset($this->total_order_amount);
    }

    public function clearTotalOrderAmount()
    {
        unset($this->total_order_amount);
    }

    /**
     *Сумма сделки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_order_amount = 15;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setTotalOrderAmount($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->total_order_amount = $var;

        return $this;
    }

    /**
     *Комиссия брокера.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue broker_commission = 16;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getBrokerCommission()
    {
        return $this->broker_commission;
    }

    public function hasBrokerCommission()
    {
        return isset($this->broker_commission);
    }

    public function clearBrokerCommission()
    {
        unset($this->broker_commission);
    }

    /**
     *Комиссия брокера.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue broker_commission = 16;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setBrokerCommission($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->broker_commission = $var;

        return $this;
    }

    /**
     *Комиссия биржи.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue exchange_commission = 17;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getExchangeCommission()
    {
        return $this->exchange_commission;
    }

    public function hasExchangeCommission()
    {
        return isset($this->exchange_commission);
    }

    public function clearExchangeCommission()
    {
        unset($this->exchange_commission);
    }

    /**
     *Комиссия биржи.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue exchange_commission = 17;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setExchangeCommission($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->exchange_commission = $var;

        return $this;
    }

    /**
     *Комиссия клир. центра.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue exchange_clearing_commission = 18;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getExchangeClearingCommission()
    {
        return $this->exchange_clearing_commission;
    }

    public function hasExchangeClearingCommission()
    {
        return isset($this->exchange_clearing_commission);
    }

    public function clearExchangeClearingCommission()
    {
        unset($this->exchange_clearing_commission);
    }

    /**
     *Комиссия клир. центра.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue exchange_clearing_commission = 18;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setExchangeClearingCommission($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->exchange_clearing_commission = $var;

        return $this;
    }

    /**
     *Ставка РЕПО (%).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation repo_rate = 19;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getRepoRate()
    {
        return $this->repo_rate;
    }

    public function hasRepoRate()
    {
        return isset($this->repo_rate);
    }

    public function clearRepoRate()
    {
        unset($this->repo_rate);
    }

    /**
     *Ставка РЕПО (%).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation repo_rate = 19;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setRepoRate($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->repo_rate = $var;

        return $this;
    }

    /**
     *Контрагент/Брокер.
     *
     * Generated from protobuf field <code>string party = 20;</code>
     * @return string
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     *Контрагент/Брокер.
     *
     * Generated from protobuf field <code>string party = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setParty($var)
    {
        GPBUtil::checkString($var, True);
        $this->party = $var;

        return $this;
    }

    /**
     *Дата расчётов в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp clear_value_date = 21;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getClearValueDate()
    {
        return $this->clear_value_date;
    }

    public function hasClearValueDate()
    {
        return isset($this->clear_value_date);
    }

    public function clearClearValueDate()
    {
        unset($this->clear_value_date);
    }

    /**
     *Дата расчётов в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp clear_value_date = 21;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setClearValueDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->clear_value_date = $var;

        return $this;
    }

    /**
     *Дата поставки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp sec_value_date = 22;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getSecValueDate()
    {
        return $this->sec_value_date;
    }

    public function hasSecValueDate()
    {
        return isset($this->sec_value_date);
    }

    public function clearSecValueDate()
    {
        unset($this->sec_value_date);
    }

    /**
     *Дата поставки в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp sec_value_date = 22;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSecValueDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->sec_value_date = $var;

        return $this;
    }

    /**
     *Статус брокера.
     *
     * Generated from protobuf field <code>string broker_status = 23;</code>
     * @return string
     */
    public function getBrokerStatus()
    {
        return $this->broker_status;
    }

    /**
     *Статус брокера.
     *
     * Generated from protobuf field <code>string broker_status = 23;</code>
     * @param string $var
     * @return $this
     */
    public function setBrokerStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->broker_status = $var;

        return $this;
    }

    /**
     *Тип дог.
     *
     * Generated from protobuf field <code>string separate_agreement_type = 24;</code>
     * @return string
     */
    public function getSeparateAgreementType()
    {
        return $this->separate_agreement_type;
    }

    /**
     *Тип дог.
     *
     * Generated from protobuf field <code>string separate_agreement_type = 24;</code>
     * @param string $var
     * @return $this
     */
    public function setSeparateAgreementType($var)
    {
        GPBUtil::checkString($var, True);
        $this->separate_agreement_type = $var;

        return $this;
    }

    /**
     *Номер дог.
     *
     * Generated from protobuf field <code>string separate_agreement_number = 25;</code>
     * @return string
     */
    public function getSeparateAgreementNumber()
    {
        return $this->separate_agreement_number;
    }

    /**
     *Номер дог.
     *
     * Generated from protobuf field <code>string separate_agreement_number = 25;</code>
     * @param string $var
     * @return $this
     */
    public function setSeparateAgreementNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->separate_agreement_number = $var;

        return $this;
    }

    /**
     *Дата дог.
     *
     * Generated from protobuf field <code>string separate_agreement_date = 26;</code>
     * @return string
     */
    public function getSeparateAgreementDate()
    {
        return $this->separate_agreement_date;
    }

    /**
     *Дата дог.
     *
     * Generated from protobuf field <code>string separate_agreement_date = 26;</code>
     * @param string $var
     * @return $this
     */
    public function setSeparateAgreementDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->separate_agreement_date = $var;

        return $this;
    }

    /**
     *Тип расчёта по сделке.
     *
     * Generated from protobuf field <code>string delivery_type = 27;</code>
     * @return string
     */
    public function getDeliveryType()
    {
        return $this->delivery_type;
    }

    /**
     *Тип расчёта по сделке.
     *
     * Generated from protobuf field <code>string delivery_type = 27;</code>
     * @param string $var
     * @return $this
     */
    public function setDeliveryType($var)
    {
        GPBUtil::checkString($var, True);
        $this->delivery_type = $var;

        return $this;
    }

}


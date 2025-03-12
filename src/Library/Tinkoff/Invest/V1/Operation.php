<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Данные по операции.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.Operation</code>
 */
class Operation extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор операции.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     *Идентификатор родительской операции.
     *
     * Generated from protobuf field <code>string parent_operation_id = 2;</code>
     */
    protected $parent_operation_id = '';
    /**
     *Валюта операции.
     *
     * Generated from protobuf field <code>string currency = 3;</code>
     */
    protected $currency = '';
    /**
     *Сумма операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue payment = 4;</code>
     */
    protected $payment = null;
    /**
     *Цена операции за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 5;</code>
     */
    protected $price = null;
    /**
     *Статус операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OperationState state = 6;</code>
     */
    protected $state = 0;
    /**
     *Количество единиц инструмента.
     *
     * Generated from protobuf field <code>int64 quantity = 7;</code>
     */
    protected $quantity = 0;
    /**
     *Неисполненный остаток по сделке.
     *
     * Generated from protobuf field <code>int64 quantity_rest = 8;</code>
     */
    protected $quantity_rest = 0;
    /**
     *FIGI-идентификатор инструмента, связанного с операцией.
     *
     * Generated from protobuf field <code>string figi = 9;</code>
     */
    protected $figi = '';
    /**
     *Тип инструмента. Возможные значения: <br/><br/>`bond` — облигация; <br/>`share` — акция; <br/>`currency` — валюта; <br/>`etf` — фонд; <br/>`futures` — фьючерс.
     *
     * Generated from protobuf field <code>string instrument_type = 10;</code>
     */
    protected $instrument_type = '';
    /**
     *Дата и время операции в формате часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 11;</code>
     */
    protected $date = null;
    /**
     *Текстовое описание типа операции.
     *
     * Generated from protobuf field <code>string type = 12;</code>
     */
    protected $type = '';
    /**
     *Тип операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OperationType operation_type = 13;</code>
     */
    protected $operation_type = 0;
    /**
     *Массив сделок.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.OperationTrade trades = 14;</code>
     */
    private $trades;
    /**
     *Идентификатор актива
     *
     * Generated from protobuf field <code>string asset_uid = 16;</code>
     */
    protected $asset_uid = '';
    /**
     *Уникальный идентификатор позиции.
     *
     * Generated from protobuf field <code>string position_uid = 17;</code>
     */
    protected $position_uid = '';
    /**
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 18;</code>
     */
    protected $instrument_uid = '';
    /**
     *Массив дочерних операций.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.ChildOperationItem child_operations = 19;</code>
     */
    private $child_operations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *          Идентификатор операции.
     *     @type string $parent_operation_id
     *          Идентификатор родительской операции.
     *     @type string $currency
     *          Валюта операции.
     *     @type \Tinkoff\Invest\V1\MoneyValue $payment
     *          Сумма операции.
     *     @type \Tinkoff\Invest\V1\MoneyValue $price
     *          Цена операции за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *     @type int $state
     *          Статус операции.
     *     @type int|string $quantity
     *          Количество единиц инструмента.
     *     @type int|string $quantity_rest
     *          Неисполненный остаток по сделке.
     *     @type string $figi
     *          FIGI-идентификатор инструмента, связанного с операцией.
     *     @type string $instrument_type
     *          Тип инструмента. Возможные значения: <br/><br/>`bond` — облигация; <br/>`share` — акция; <br/>`currency` — валюта; <br/>`etf` — фонд; <br/>`futures` — фьючерс.
     *     @type \Google\Protobuf\Timestamp $date
     *          Дата и время операции в формате часовом поясе UTC.
     *     @type string $type
     *          Текстовое описание типа операции.
     *     @type int $operation_type
     *          Тип операции.
     *     @type array<\Tinkoff\Invest\V1\OperationTrade>|\Google\Protobuf\Internal\RepeatedField $trades
     *          Массив сделок.
     *     @type string $asset_uid
     *          Идентификатор актива
     *     @type string $position_uid
     *          Уникальный идентификатор позиции.
     *     @type string $instrument_uid
     *          Уникальный идентификатор инструмента.
     *     @type array<\Tinkoff\Invest\V1\ChildOperationItem>|\Google\Protobuf\Internal\RepeatedField $child_operations
     *          Массив дочерних операций.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор операции.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *Идентификатор операции.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     *Идентификатор родительской операции.
     *
     * Generated from protobuf field <code>string parent_operation_id = 2;</code>
     * @return string
     */
    public function getParentOperationId()
    {
        return $this->parent_operation_id;
    }

    /**
     *Идентификатор родительской операции.
     *
     * Generated from protobuf field <code>string parent_operation_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setParentOperationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_operation_id = $var;

        return $this;
    }

    /**
     *Валюта операции.
     *
     * Generated from protobuf field <code>string currency = 3;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     *Валюта операции.
     *
     * Generated from protobuf field <code>string currency = 3;</code>
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
     *Сумма операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue payment = 4;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getPayment()
    {
        return $this->payment;
    }

    public function hasPayment()
    {
        return isset($this->payment);
    }

    public function clearPayment()
    {
        unset($this->payment);
    }

    /**
     *Сумма операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue payment = 4;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setPayment($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->payment = $var;

        return $this;
    }

    /**
     *Цена операции за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 5;</code>
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
     *Цена операции за 1 инструмент. Чтобы получить стоимость лота, нужно умножить на лотность инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue price = 5;</code>
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
     *Статус операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OperationState state = 6;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     *Статус операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OperationState state = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\OperationState::class);
        $this->state = $var;

        return $this;
    }

    /**
     *Количество единиц инструмента.
     *
     * Generated from protobuf field <code>int64 quantity = 7;</code>
     * @return int|string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     *Количество единиц инструмента.
     *
     * Generated from protobuf field <code>int64 quantity = 7;</code>
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
     *Неисполненный остаток по сделке.
     *
     * Generated from protobuf field <code>int64 quantity_rest = 8;</code>
     * @return int|string
     */
    public function getQuantityRest()
    {
        return $this->quantity_rest;
    }

    /**
     *Неисполненный остаток по сделке.
     *
     * Generated from protobuf field <code>int64 quantity_rest = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setQuantityRest($var)
    {
        GPBUtil::checkInt64($var);
        $this->quantity_rest = $var;

        return $this;
    }

    /**
     *FIGI-идентификатор инструмента, связанного с операцией.
     *
     * Generated from protobuf field <code>string figi = 9;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *FIGI-идентификатор инструмента, связанного с операцией.
     *
     * Generated from protobuf field <code>string figi = 9;</code>
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
     *Тип инструмента. Возможные значения: <br/><br/>`bond` — облигация; <br/>`share` — акция; <br/>`currency` — валюта; <br/>`etf` — фонд; <br/>`futures` — фьючерс.
     *
     * Generated from protobuf field <code>string instrument_type = 10;</code>
     * @return string
     */
    public function getInstrumentType()
    {
        return $this->instrument_type;
    }

    /**
     *Тип инструмента. Возможные значения: <br/><br/>`bond` — облигация; <br/>`share` — акция; <br/>`currency` — валюта; <br/>`etf` — фонд; <br/>`futures` — фьючерс.
     *
     * Generated from protobuf field <code>string instrument_type = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setInstrumentType($var)
    {
        GPBUtil::checkString($var, True);
        $this->instrument_type = $var;

        return $this;
    }

    /**
     *Дата и время операции в формате часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDate()
    {
        return $this->date;
    }

    public function hasDate()
    {
        return isset($this->date);
    }

    public function clearDate()
    {
        unset($this->date);
    }

    /**
     *Дата и время операции в формате часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->date = $var;

        return $this;
    }

    /**
     *Текстовое описание типа операции.
     *
     * Generated from protobuf field <code>string type = 12;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *Текстовое описание типа операции.
     *
     * Generated from protobuf field <code>string type = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     *Тип операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OperationType operation_type = 13;</code>
     * @return int
     */
    public function getOperationType()
    {
        return $this->operation_type;
    }

    /**
     *Тип операции.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OperationType operation_type = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setOperationType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\OperationType::class);
        $this->operation_type = $var;

        return $this;
    }

    /**
     *Массив сделок.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.OperationTrade trades = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTrades()
    {
        return $this->trades;
    }

    /**
     *Массив сделок.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.OperationTrade trades = 14;</code>
     * @param array<\Tinkoff\Invest\V1\OperationTrade>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTrades($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\OperationTrade::class);
        $this->trades = $arr;

        return $this;
    }

    /**
     *Идентификатор актива
     *
     * Generated from protobuf field <code>string asset_uid = 16;</code>
     * @return string
     */
    public function getAssetUid()
    {
        return $this->asset_uid;
    }

    /**
     *Идентификатор актива
     *
     * Generated from protobuf field <code>string asset_uid = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setAssetUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->asset_uid = $var;

        return $this;
    }

    /**
     *Уникальный идентификатор позиции.
     *
     * Generated from protobuf field <code>string position_uid = 17;</code>
     * @return string
     */
    public function getPositionUid()
    {
        return $this->position_uid;
    }

    /**
     *Уникальный идентификатор позиции.
     *
     * Generated from protobuf field <code>string position_uid = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setPositionUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->position_uid = $var;

        return $this;
    }

    /**
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 18;</code>
     * @return string
     */
    public function getInstrumentUid()
    {
        return $this->instrument_uid;
    }

    /**
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string instrument_uid = 18;</code>
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
     *Массив дочерних операций.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.ChildOperationItem child_operations = 19;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChildOperations()
    {
        return $this->child_operations;
    }

    /**
     *Массив дочерних операций.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.ChildOperationItem child_operations = 19;</code>
     * @param array<\Tinkoff\Invest\V1\ChildOperationItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChildOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\ChildOperationItem::class);
        $this->child_operations = $arr;

        return $this;
    }

}


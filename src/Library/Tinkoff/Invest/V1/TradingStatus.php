<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Пакет изменения торгового статуса.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.TradingStatus</code>
 */
class TradingStatus extends \Google\Protobuf\Internal\Message
{
    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Статус торговли инструментом.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus trading_status = 2;</code>
     */
    protected $trading_status = 0;
    /**
     *Время изменения торгового статуса в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 3;</code>
     */
    protected $time = null;
    /**
     *Признак доступности выставления лимитной заявки по инструменту.
     *
     * Generated from protobuf field <code>bool limit_order_available_flag = 4;</code>
     */
    protected $limit_order_available_flag = false;
    /**
     *Признак доступности выставления рыночной заявки по инструменту.
     *
     * Generated from protobuf field <code>bool market_order_available_flag = 5;</code>
     */
    protected $market_order_available_flag = false;
    /**
     *Uid инструмента
     *
     * Generated from protobuf field <code>string instrument_uid = 6;</code>
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
     *     @type int $trading_status
     *          Статус торговли инструментом.
     *     @type \Google\Protobuf\Timestamp $time
     *          Время изменения торгового статуса в часовом поясе UTC.
     *     @type bool $limit_order_available_flag
     *          Признак доступности выставления лимитной заявки по инструменту.
     *     @type bool $market_order_available_flag
     *          Признак доступности выставления рыночной заявки по инструменту.
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
     *Статус торговли инструментом.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus trading_status = 2;</code>
     * @return int
     */
    public function getTradingStatus()
    {
        return $this->trading_status;
    }

    /**
     *Статус торговли инструментом.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus trading_status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTradingStatus($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\SecurityTradingStatus::class);
        $this->trading_status = $var;

        return $this;
    }

    /**
     *Время изменения торгового статуса в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTime()
    {
        return $this->time;
    }

    public function hasTime()
    {
        return isset($this->time);
    }

    public function clearTime()
    {
        unset($this->time);
    }

    /**
     *Время изменения торгового статуса в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->time = $var;

        return $this;
    }

    /**
     *Признак доступности выставления лимитной заявки по инструменту.
     *
     * Generated from protobuf field <code>bool limit_order_available_flag = 4;</code>
     * @return bool
     */
    public function getLimitOrderAvailableFlag()
    {
        return $this->limit_order_available_flag;
    }

    /**
     *Признак доступности выставления лимитной заявки по инструменту.
     *
     * Generated from protobuf field <code>bool limit_order_available_flag = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setLimitOrderAvailableFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->limit_order_available_flag = $var;

        return $this;
    }

    /**
     *Признак доступности выставления рыночной заявки по инструменту.
     *
     * Generated from protobuf field <code>bool market_order_available_flag = 5;</code>
     * @return bool
     */
    public function getMarketOrderAvailableFlag()
    {
        return $this->market_order_available_flag;
    }

    /**
     *Признак доступности выставления рыночной заявки по инструменту.
     *
     * Generated from protobuf field <code>bool market_order_available_flag = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setMarketOrderAvailableFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->market_order_available_flag = $var;

        return $this;
    }

    /**
     *Uid инструмента
     *
     * Generated from protobuf field <code>string instrument_uid = 6;</code>
     * @return string
     */
    public function getInstrumentUid()
    {
        return $this->instrument_uid;
    }

    /**
     *Uid инструмента
     *
     * Generated from protobuf field <code>string instrument_uid = 6;</code>
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


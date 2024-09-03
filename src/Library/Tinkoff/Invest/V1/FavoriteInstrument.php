<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Массив избранных инструментов.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.FavoriteInstrument</code>
 */
class FavoriteInstrument extends \Google\Protobuf\Internal\Message
{
    /**
     *FIGI-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Тикер инструмента.
     *
     * Generated from protobuf field <code>string ticker = 2;</code>
     */
    protected $ticker = '';
    /**
     *Класс-код инструмента.
     *
     * Generated from protobuf field <code>string class_code = 3;</code>
     */
    protected $class_code = '';
    /**
     *ISIN-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string isin = 4;</code>
     */
    protected $isin = '';
    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>string instrument_type = 11;</code>
     */
    protected $instrument_type = '';
    /**
     *Название инструмента.
     *
     * Generated from protobuf field <code>string name = 12;</code>
     */
    protected $name = '';
    /**
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string uid = 13;</code>
     */
    protected $uid = '';
    /**
     *Признак внебиржевой ценной бумаги.
     *
     * Generated from protobuf field <code>bool otc_flag = 16;</code>
     */
    protected $otc_flag = false;
    /**
     *Возможность торговать инструментом через API.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 17;</code>
     */
    protected $api_trade_available_flag = false;
    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.InstrumentType instrument_kind = 18;</code>
     */
    protected $instrument_kind = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          FIGI-идентификатор инструмента.
     *     @type string $ticker
     *          Тикер инструмента.
     *     @type string $class_code
     *          Класс-код инструмента.
     *     @type string $isin
     *          ISIN-идентификатор инструмента.
     *     @type string $instrument_type
     *          Тип инструмента.
     *     @type string $name
     *          Название инструмента.
     *     @type string $uid
     *          Уникальный идентификатор инструмента.
     *     @type bool $otc_flag
     *          Признак внебиржевой ценной бумаги.
     *     @type bool $api_trade_available_flag
     *          Возможность торговать инструментом через API.
     *     @type int $instrument_kind
     *          Тип инструмента.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *FIGI-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *FIGI-идентификатор инструмента.
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
     *Тикер инструмента.
     *
     * Generated from protobuf field <code>string ticker = 2;</code>
     * @return string
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     *Тикер инструмента.
     *
     * Generated from protobuf field <code>string ticker = 2;</code>
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
     *Класс-код инструмента.
     *
     * Generated from protobuf field <code>string class_code = 3;</code>
     * @return string
     */
    public function getClassCode()
    {
        return $this->class_code;
    }

    /**
     *Класс-код инструмента.
     *
     * Generated from protobuf field <code>string class_code = 3;</code>
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
     *ISIN-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string isin = 4;</code>
     * @return string
     */
    public function getIsin()
    {
        return $this->isin;
    }

    /**
     *ISIN-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string isin = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setIsin($var)
    {
        GPBUtil::checkString($var, True);
        $this->isin = $var;

        return $this;
    }

    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>string instrument_type = 11;</code>
     * @return string
     */
    public function getInstrumentType()
    {
        return $this->instrument_type;
    }

    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>string instrument_type = 11;</code>
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
     *Название инструмента.
     *
     * Generated from protobuf field <code>string name = 12;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *Название инструмента.
     *
     * Generated from protobuf field <code>string name = 12;</code>
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
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string uid = 13;</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string uid = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     *Признак внебиржевой ценной бумаги.
     *
     * Generated from protobuf field <code>bool otc_flag = 16;</code>
     * @return bool
     */
    public function getOtcFlag()
    {
        return $this->otc_flag;
    }

    /**
     *Признак внебиржевой ценной бумаги.
     *
     * Generated from protobuf field <code>bool otc_flag = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setOtcFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->otc_flag = $var;

        return $this;
    }

    /**
     *Возможность торговать инструментом через API.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 17;</code>
     * @return bool
     */
    public function getApiTradeAvailableFlag()
    {
        return $this->api_trade_available_flag;
    }

    /**
     *Возможность торговать инструментом через API.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setApiTradeAvailableFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->api_trade_available_flag = $var;

        return $this;
    }

    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.InstrumentType instrument_kind = 18;</code>
     * @return int
     */
    public function getInstrumentKind()
    {
        return $this->instrument_kind;
    }

    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.InstrumentType instrument_kind = 18;</code>
     * @param int $var
     * @return $this
     */
    public function setInstrumentKind($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\InstrumentType::class);
        $this->instrument_kind = $var;

        return $this;
    }

}


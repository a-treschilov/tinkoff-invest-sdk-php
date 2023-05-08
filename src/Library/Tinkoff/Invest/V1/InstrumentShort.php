<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Краткая информация об инструменте.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.InstrumentShort</code>
 */
class InstrumentShort extends \Google\Protobuf\Internal\Message
{
    /**
     *Isin инструмента.
     *
     * Generated from protobuf field <code>string isin = 1;</code>
     */
    protected $isin = '';
    /**
     *Figi инструмента.
     *
     * Generated from protobuf field <code>string figi = 2;</code>
     */
    protected $figi = '';
    /**
     *Ticker инструмента.
     *
     * Generated from protobuf field <code>string ticker = 3;</code>
     */
    protected $ticker = '';
    /**
     *ClassCode инструмента.
     *
     * Generated from protobuf field <code>string class_code = 4;</code>
     */
    protected $class_code = '';
    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>string instrument_type = 5;</code>
     */
    protected $instrument_type = '';
    /**
     *Название инструмента.
     *
     * Generated from protobuf field <code>string name = 6;</code>
     */
    protected $name = '';
    /**
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string uid = 7;</code>
     */
    protected $uid = '';
    /**
     *Уникальный идентификатор позиции инструмента.
     *
     * Generated from protobuf field <code>string position_uid = 8;</code>
     */
    protected $position_uid = '';
    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.InstrumentType instrument_kind = 10;</code>
     */
    protected $instrument_kind = 0;
    /**
     *Параметр указывает на возможность торговать инструментом через API.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 11;</code>
     */
    protected $api_trade_available_flag = false;
    /**
     *Признак доступности для ИИС.
     *
     * Generated from protobuf field <code>bool for_iis_flag = 12;</code>
     */
    protected $for_iis_flag = false;
    /**
     *Дата первой минутной свечи.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_1min_candle_date = 26;</code>
     */
    protected $first_1min_candle_date = null;
    /**
     *Дата первой дневной свечи.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_1day_candle_date = 27;</code>
     */
    protected $first_1day_candle_date = null;
    /**
     *Флаг отображающий доступность торговли инструментом только для квалифицированных инвесторов.
     *
     * Generated from protobuf field <code>bool for_qual_investor_flag = 28;</code>
     */
    protected $for_qual_investor_flag = false;
    /**
     *Флаг отображающий доступность торговли инструментом по выходным
     *
     * Generated from protobuf field <code>bool weekend_flag = 29;</code>
     */
    protected $weekend_flag = false;
    /**
     *Флаг заблокированного ТКС
     *
     * Generated from protobuf field <code>bool blocked_tca_flag = 30;</code>
     */
    protected $blocked_tca_flag = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $isin
     *          Isin инструмента.
     *     @type string $figi
     *          Figi инструмента.
     *     @type string $ticker
     *          Ticker инструмента.
     *     @type string $class_code
     *          ClassCode инструмента.
     *     @type string $instrument_type
     *          Тип инструмента.
     *     @type string $name
     *          Название инструмента.
     *     @type string $uid
     *          Уникальный идентификатор инструмента.
     *     @type string $position_uid
     *          Уникальный идентификатор позиции инструмента.
     *     @type int $instrument_kind
     *          Тип инструмента.
     *     @type bool $api_trade_available_flag
     *          Параметр указывает на возможность торговать инструментом через API.
     *     @type bool $for_iis_flag
     *          Признак доступности для ИИС.
     *     @type \Google\Protobuf\Timestamp $first_1min_candle_date
     *          Дата первой минутной свечи.
     *     @type \Google\Protobuf\Timestamp $first_1day_candle_date
     *          Дата первой дневной свечи.
     *     @type bool $for_qual_investor_flag
     *          Флаг отображающий доступность торговли инструментом только для квалифицированных инвесторов.
     *     @type bool $weekend_flag
     *          Флаг отображающий доступность торговли инструментом по выходным
     *     @type bool $blocked_tca_flag
     *          Флаг заблокированного ТКС
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Isin инструмента.
     *
     * Generated from protobuf field <code>string isin = 1;</code>
     * @return string
     */
    public function getIsin()
    {
        return $this->isin;
    }

    /**
     *Isin инструмента.
     *
     * Generated from protobuf field <code>string isin = 1;</code>
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
     *Figi инструмента.
     *
     * Generated from protobuf field <code>string figi = 2;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *Figi инструмента.
     *
     * Generated from protobuf field <code>string figi = 2;</code>
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
     *Ticker инструмента.
     *
     * Generated from protobuf field <code>string ticker = 3;</code>
     * @return string
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     *Ticker инструмента.
     *
     * Generated from protobuf field <code>string ticker = 3;</code>
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
     *ClassCode инструмента.
     *
     * Generated from protobuf field <code>string class_code = 4;</code>
     * @return string
     */
    public function getClassCode()
    {
        return $this->class_code;
    }

    /**
     *ClassCode инструмента.
     *
     * Generated from protobuf field <code>string class_code = 4;</code>
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
     *Тип инструмента.
     *
     * Generated from protobuf field <code>string instrument_type = 5;</code>
     * @return string
     */
    public function getInstrumentType()
    {
        return $this->instrument_type;
    }

    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>string instrument_type = 5;</code>
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
     * Generated from protobuf field <code>string name = 6;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *Название инструмента.
     *
     * Generated from protobuf field <code>string name = 6;</code>
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
     * Generated from protobuf field <code>string uid = 7;</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     *Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string uid = 7;</code>
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
     *Уникальный идентификатор позиции инструмента.
     *
     * Generated from protobuf field <code>string position_uid = 8;</code>
     * @return string
     */
    public function getPositionUid()
    {
        return $this->position_uid;
    }

    /**
     *Уникальный идентификатор позиции инструмента.
     *
     * Generated from protobuf field <code>string position_uid = 8;</code>
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
     *Тип инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.InstrumentType instrument_kind = 10;</code>
     * @return int
     */
    public function getInstrumentKind()
    {
        return $this->instrument_kind;
    }

    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.InstrumentType instrument_kind = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setInstrumentKind($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\InstrumentType::class);
        $this->instrument_kind = $var;

        return $this;
    }

    /**
     *Параметр указывает на возможность торговать инструментом через API.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 11;</code>
     * @return bool
     */
    public function getApiTradeAvailableFlag()
    {
        return $this->api_trade_available_flag;
    }

    /**
     *Параметр указывает на возможность торговать инструментом через API.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 11;</code>
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
     *Признак доступности для ИИС.
     *
     * Generated from protobuf field <code>bool for_iis_flag = 12;</code>
     * @return bool
     */
    public function getForIisFlag()
    {
        return $this->for_iis_flag;
    }

    /**
     *Признак доступности для ИИС.
     *
     * Generated from protobuf field <code>bool for_iis_flag = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setForIisFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->for_iis_flag = $var;

        return $this;
    }

    /**
     *Дата первой минутной свечи.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_1min_candle_date = 26;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getFirst1MinCandleDate()
    {
        return $this->first_1min_candle_date;
    }

    /**
     *Дата первой минутной свечи.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_1min_candle_date = 26;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFirst1MinCandleDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->first_1min_candle_date = $var;

        return $this;
    }

    /**
     *Дата первой дневной свечи.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_1day_candle_date = 27;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getFirst1DayCandleDate()
    {
        return $this->first_1day_candle_date;
    }

    /**
     *Дата первой дневной свечи.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_1day_candle_date = 27;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFirst1DayCandleDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->first_1day_candle_date = $var;

        return $this;
    }

    /**
     *Флаг отображающий доступность торговли инструментом только для квалифицированных инвесторов.
     *
     * Generated from protobuf field <code>bool for_qual_investor_flag = 28;</code>
     * @return bool
     */
    public function getForQualInvestorFlag()
    {
        return $this->for_qual_investor_flag;
    }

    /**
     *Флаг отображающий доступность торговли инструментом только для квалифицированных инвесторов.
     *
     * Generated from protobuf field <code>bool for_qual_investor_flag = 28;</code>
     * @param bool $var
     * @return $this
     */
    public function setForQualInvestorFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->for_qual_investor_flag = $var;

        return $this;
    }

    /**
     *Флаг отображающий доступность торговли инструментом по выходным
     *
     * Generated from protobuf field <code>bool weekend_flag = 29;</code>
     * @return bool
     */
    public function getWeekendFlag()
    {
        return $this->weekend_flag;
    }

    /**
     *Флаг отображающий доступность торговли инструментом по выходным
     *
     * Generated from protobuf field <code>bool weekend_flag = 29;</code>
     * @param bool $var
     * @return $this
     */
    public function setWeekendFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->weekend_flag = $var;

        return $this;
    }

    /**
     *Флаг заблокированного ТКС
     *
     * Generated from protobuf field <code>bool blocked_tca_flag = 30;</code>
     * @return bool
     */
    public function getBlockedTcaFlag()
    {
        return $this->blocked_tca_flag;
    }

    /**
     *Флаг заблокированного ТКС
     *
     * Generated from protobuf field <code>bool blocked_tca_flag = 30;</code>
     * @param bool $var
     * @return $this
     */
    public function setBlockedTcaFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->blocked_tca_flag = $var;

        return $this;
    }

}


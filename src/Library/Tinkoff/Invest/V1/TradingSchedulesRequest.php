<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос расписания торгов
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.TradingSchedulesRequest</code>
 */
class TradingSchedulesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Наименование биржи или расчетного календаря. </br>Если не передаётся, возвращается информация по всем доступным торговым площадкам.
     *
     * Generated from protobuf field <code>string exchange = 1;</code>
     */
    protected $exchange = '';
    /**
     *Начало периода по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2;</code>
     */
    protected $from = null;
    /**
     *Окончание периода по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3;</code>
     */
    protected $to = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $exchange
     *          Наименование биржи или расчетного календаря. </br>Если не передаётся, возвращается информация по всем доступным торговым площадкам.
     *     @type \Google\Protobuf\Timestamp $from
     *          Начало периода по часовому поясу UTC.
     *     @type \Google\Protobuf\Timestamp $to
     *          Окончание периода по часовому поясу UTC.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Наименование биржи или расчетного календаря. </br>Если не передаётся, возвращается информация по всем доступным торговым площадкам.
     *
     * Generated from protobuf field <code>string exchange = 1;</code>
     * @return string
     */
    public function getExchange()
    {
        return $this->exchange;
    }

    /**
     *Наименование биржи или расчетного календаря. </br>Если не передаётся, возвращается информация по всем доступным торговым площадкам.
     *
     * Generated from protobuf field <code>string exchange = 1;</code>
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
     *Начало периода по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     *Начало периода по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFrom($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->from = $var;

        return $this;
    }

    /**
     *Окончание периода по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     *Окончание периода по часовому поясу UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->to = $var;

        return $this;
    }

}


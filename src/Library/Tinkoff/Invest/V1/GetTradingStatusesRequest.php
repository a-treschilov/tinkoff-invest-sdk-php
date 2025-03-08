<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос получения торгового статуса.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetTradingStatusesRequest</code>
 */
class GetTradingStatusesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор инструмента, принимает значение figi или instrument_uid
     *
     * Generated from protobuf field <code>repeated string instrument_id = 1;</code>
     */
    private $instrument_id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $instrument_id
     *          Идентификатор инструмента, принимает значение figi или instrument_uid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор инструмента, принимает значение figi или instrument_uid
     *
     * Generated from protobuf field <code>repeated string instrument_id = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstrumentId()
    {
        return $this->instrument_id;
    }

    /**
     *Идентификатор инструмента, принимает значение figi или instrument_uid
     *
     * Generated from protobuf field <code>repeated string instrument_id = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstrumentId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->instrument_id = $arr;

        return $this;
    }

}


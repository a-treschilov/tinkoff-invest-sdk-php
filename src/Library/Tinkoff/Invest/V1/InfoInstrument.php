<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос подписки на торговый статус.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.InfoInstrument</code>
 */
class InfoInstrument extends \Google\Protobuf\Internal\Message
{
    /**
     *Deprecated Figi-идентификатор инструмента. Необходимо использовать instrument_id.
     *
     * Generated from protobuf field <code>string figi = 1 [deprecated = true];</code>
     */
    protected $figi = '';
    /**
     *Идентификатор инструмента, принимает значение figi или instrument_uid
     *
     * Generated from protobuf field <code>string instrument_id = 2;</code>
     */
    protected $instrument_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          Deprecated Figi-идентификатор инструмента. Необходимо использовать instrument_id.
     *     @type string $instrument_id
     *          Идентификатор инструмента, принимает значение figi или instrument_uid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Deprecated Figi-идентификатор инструмента. Необходимо использовать instrument_id.
     *
     * Generated from protobuf field <code>string figi = 1 [deprecated = true];</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *Deprecated Figi-идентификатор инструмента. Необходимо использовать instrument_id.
     *
     * Generated from protobuf field <code>string figi = 1 [deprecated = true];</code>
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
     *Идентификатор инструмента, принимает значение figi или instrument_uid
     *
     * Generated from protobuf field <code>string instrument_id = 2;</code>
     * @return string
     */
    public function getInstrumentId()
    {
        return $this->instrument_id;
    }

    /**
     *Идентификатор инструмента, принимает значение figi или instrument_uid
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

}


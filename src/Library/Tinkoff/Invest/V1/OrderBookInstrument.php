<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос подписки на стаканы.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.OrderBookInstrument</code>
 */
class OrderBookInstrument extends \Google\Protobuf\Internal\Message
{
    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Глубина стакана.
     *
     * Generated from protobuf field <code>int32 depth = 2;</code>
     */
    protected $depth = 0;
    /**
     *Идентификатор инструмента, принимает значение figi или instrument_uid
     *
     * Generated from protobuf field <code>string instrument_id = 3;</code>
     */
    protected $instrument_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          Figi-идентификатор инструмента.
     *     @type int $depth
     *          Глубина стакана.
     *     @type string $instrument_id
     *          Идентификатор инструмента, принимает значение figi или instrument_uid
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
     *Глубина стакана.
     *
     * Generated from protobuf field <code>int32 depth = 2;</code>
     * @return int
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     *Глубина стакана.
     *
     * Generated from protobuf field <code>int32 depth = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDepth($var)
    {
        GPBUtil::checkInt32($var);
        $this->depth = $var;

        return $this;
    }

    /**
     *Идентификатор инструмента, принимает значение figi или instrument_uid
     *
     * Generated from protobuf field <code>string instrument_id = 3;</code>
     * @return string
     */
    public function getInstrumentId()
    {
        return $this->instrument_id;
    }

    /**
     *Идентификатор инструмента, принимает значение figi или instrument_uid
     *
     * Generated from protobuf field <code>string instrument_id = 3;</code>
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


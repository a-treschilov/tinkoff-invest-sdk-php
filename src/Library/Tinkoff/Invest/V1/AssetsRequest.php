<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос списка активов.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.AssetsRequest</code>
 */
class AssetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.InstrumentType instrument_type = 1;</code>
     */
    protected $instrument_type = null;
    /**
     *Статус запрашиваемых инструментов. [Возможные значения](#instrumentstatus).
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.InstrumentStatus instrument_status = 2;</code>
     */
    protected $instrument_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $instrument_type
     *     @type int $instrument_status
     *          Статус запрашиваемых инструментов. [Возможные значения](#instrumentstatus).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.InstrumentType instrument_type = 1;</code>
     * @return int
     */
    public function getInstrumentType()
    {
        return isset($this->instrument_type) ? $this->instrument_type : 0;
    }

    public function hasInstrumentType()
    {
        return isset($this->instrument_type);
    }

    public function clearInstrumentType()
    {
        unset($this->instrument_type);
    }

    /**
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.InstrumentType instrument_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setInstrumentType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\InstrumentType::class);
        $this->instrument_type = $var;

        return $this;
    }

    /**
     *Статус запрашиваемых инструментов. [Возможные значения](#instrumentstatus).
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.InstrumentStatus instrument_status = 2;</code>
     * @return int
     */
    public function getInstrumentStatus()
    {
        return isset($this->instrument_status) ? $this->instrument_status : 0;
    }

    public function hasInstrumentStatus()
    {
        return isset($this->instrument_status);
    }

    public function clearInstrumentStatus()
    {
        unset($this->instrument_status);
    }

    /**
     *Статус запрашиваемых инструментов. [Возможные значения](#instrumentstatus).
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.InstrumentStatus instrument_status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setInstrumentStatus($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\InstrumentStatus::class);
        $this->instrument_status = $var;

        return $this;
    }

}


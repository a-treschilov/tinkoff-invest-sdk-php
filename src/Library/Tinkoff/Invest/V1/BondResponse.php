<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Информация об облигации.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.BondResponse</code>
 */
class BondResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Информация об облигации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Bond instrument = 1;</code>
     */
    protected $instrument = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\Bond $instrument
     *           Информация об облигации.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     * Информация об облигации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Bond instrument = 1;</code>
     * @return \Tinkoff\Invest\V1\Bond|null
     */
    public function getInstrument()
    {
        return $this->instrument;
    }

    public function hasInstrument()
    {
        return isset($this->instrument);
    }

    public function clearInstrument()
    {
        unset($this->instrument);
    }

    /**
     * Информация об облигации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Bond instrument = 1;</code>
     * @param \Tinkoff\Invest\V1\Bond $var
     * @return $this
     */
    public function setInstrument($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Bond::class);
        $this->instrument = $var;

        return $this;
    }

}


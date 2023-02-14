<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Данные по опциону.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.OptionResponse</code>
 */
class OptionResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Информация по опциону.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Option instrument = 1;</code>
     */
    protected $instrument = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\Option $instrument
     *           Информация по опциону.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     * Информация по опциону.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Option instrument = 1;</code>
     * @return \Tinkoff\Invest\V1\Option
     */
    public function getInstrument()
    {
        return $this->instrument;
    }

    /**
     * Информация по опциону.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Option instrument = 1;</code>
     * @param \Tinkoff\Invest\V1\Option $var
     * @return $this
     */
    public function setInstrument($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Option::class);
        $this->instrument = $var;

        return $this;
    }

}

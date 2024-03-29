<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Список облигаций.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.BondsResponse</code>
 */
class BondsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Массив облигаций.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Bond instruments = 1;</code>
     */
    private $instruments;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Tinkoff\Invest\V1\Bond>|\Google\Protobuf\Internal\RepeatedField $instruments
     *          Массив облигаций.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Массив облигаций.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Bond instruments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstruments()
    {
        return $this->instruments;
    }

    /**
     *Массив облигаций.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Bond instruments = 1;</code>
     * @param array<\Tinkoff\Invest\V1\Bond>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstruments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\Bond::class);
        $this->instruments = $arr;

        return $this;
    }

}


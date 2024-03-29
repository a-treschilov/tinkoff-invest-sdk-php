<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Данные по фьючерсам.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.FuturesResponse</code>
 */
class FuturesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Массив фьючерсов.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Future instruments = 1;</code>
     */
    private $instruments;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Tinkoff\Invest\V1\Future>|\Google\Protobuf\Internal\RepeatedField $instruments
     *          Массив фьючерсов.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Массив фьючерсов.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Future instruments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstruments()
    {
        return $this->instruments;
    }

    /**
     *Массив фьючерсов.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Future instruments = 1;</code>
     * @param array<\Tinkoff\Invest\V1\Future>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstruments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\Future::class);
        $this->instruments = $arr;

        return $this;
    }

}


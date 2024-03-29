<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Список торговых площадок.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.TradingSchedulesResponse</code>
 */
class TradingSchedulesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Список торговых площадок и режимов торгов.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.TradingSchedule exchanges = 1;</code>
     */
    private $exchanges;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Tinkoff\Invest\V1\TradingSchedule>|\Google\Protobuf\Internal\RepeatedField $exchanges
     *           Список торговых площадок и режимов торгов.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     * Список торговых площадок и режимов торгов.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.TradingSchedule exchanges = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExchanges()
    {
        return $this->exchanges;
    }

    /**
     * Список торговых площадок и режимов торгов.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.TradingSchedule exchanges = 1;</code>
     * @param array<\Tinkoff\Invest\V1\TradingSchedule>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExchanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\TradingSchedule::class);
        $this->exchanges = $arr;

        return $this;
    }

}


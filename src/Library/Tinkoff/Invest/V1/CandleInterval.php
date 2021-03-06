<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 *Интервал свечей.
 *
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.CandleInterval</code>
 */
class CandleInterval
{
    /**
     *Интервал не определён.
     *
     * Generated from protobuf enum <code>CANDLE_INTERVAL_UNSPECIFIED = 0;</code>
     */
    const CANDLE_INTERVAL_UNSPECIFIED = 0;
    /**
     *1 минута.
     *
     * Generated from protobuf enum <code>CANDLE_INTERVAL_1_MIN = 1;</code>
     */
    const CANDLE_INTERVAL_1_MIN = 1;
    /**
     *5 минут.
     *
     * Generated from protobuf enum <code>CANDLE_INTERVAL_5_MIN = 2;</code>
     */
    const CANDLE_INTERVAL_5_MIN = 2;
    /**
     *15 минут.
     *
     * Generated from protobuf enum <code>CANDLE_INTERVAL_15_MIN = 3;</code>
     */
    const CANDLE_INTERVAL_15_MIN = 3;
    /**
     *1 час.
     *
     * Generated from protobuf enum <code>CANDLE_INTERVAL_HOUR = 4;</code>
     */
    const CANDLE_INTERVAL_HOUR = 4;
    /**
     *1 день.
     *
     * Generated from protobuf enum <code>CANDLE_INTERVAL_DAY = 5;</code>
     */
    const CANDLE_INTERVAL_DAY = 5;

    private static $valueToName = [
        self::CANDLE_INTERVAL_UNSPECIFIED => 'CANDLE_INTERVAL_UNSPECIFIED',
        self::CANDLE_INTERVAL_1_MIN => 'CANDLE_INTERVAL_1_MIN',
        self::CANDLE_INTERVAL_5_MIN => 'CANDLE_INTERVAL_5_MIN',
        self::CANDLE_INTERVAL_15_MIN => 'CANDLE_INTERVAL_15_MIN',
        self::CANDLE_INTERVAL_HOUR => 'CANDLE_INTERVAL_HOUR',
        self::CANDLE_INTERVAL_DAY => 'CANDLE_INTERVAL_DAY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


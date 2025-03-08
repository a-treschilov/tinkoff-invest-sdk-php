<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.Recommendation</code>
 */
class Recommendation
{
    /**
     * Не определено
     *
     * Generated from protobuf enum <code>RECOMMENDATION_UNSPECIFIED = 0;</code>
     */
    const RECOMMENDATION_UNSPECIFIED = 0;
    /**
     * Покупать
     *
     * Generated from protobuf enum <code>RECOMMENDATION_BUY = 1;</code>
     */
    const RECOMMENDATION_BUY = 1;
    /**
     * Держать
     *
     * Generated from protobuf enum <code>RECOMMENDATION_HOLD = 2;</code>
     */
    const RECOMMENDATION_HOLD = 2;
    /**
     * Продавать
     *
     * Generated from protobuf enum <code>RECOMMENDATION_SELL = 3;</code>
     */
    const RECOMMENDATION_SELL = 3;

    private static $valueToName = [
        self::RECOMMENDATION_UNSPECIFIED => 'RECOMMENDATION_UNSPECIFIED',
        self::RECOMMENDATION_BUY => 'RECOMMENDATION_BUY',
        self::RECOMMENDATION_HOLD => 'RECOMMENDATION_HOLD',
        self::RECOMMENDATION_SELL => 'RECOMMENDATION_SELL',
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


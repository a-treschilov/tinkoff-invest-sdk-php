<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: stoporders.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 *Тип параметров значений трейлинг-стопа.
 *
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.TrailingValueType</code>
 */
class TrailingValueType
{
    /**
     *Значение не указано.
     *
     * Generated from protobuf enum <code>TRAILING_VALUE_UNSPECIFIED = 0;</code>
     */
    const TRAILING_VALUE_UNSPECIFIED = 0;
    /**
     *Абсолютное значение в единицах цены.
     *
     * Generated from protobuf enum <code>TRAILING_VALUE_ABSOLUTE = 1;</code>
     */
    const TRAILING_VALUE_ABSOLUTE = 1;
    /**
     *Относительное значение в процентах.
     *
     * Generated from protobuf enum <code>TRAILING_VALUE_RELATIVE = 2;</code>
     */
    const TRAILING_VALUE_RELATIVE = 2;

    private static $valueToName = [
        self::TRAILING_VALUE_UNSPECIFIED => 'TRAILING_VALUE_UNSPECIFIED',
        self::TRAILING_VALUE_ABSOLUTE => 'TRAILING_VALUE_ABSOLUTE',
        self::TRAILING_VALUE_RELATIVE => 'TRAILING_VALUE_RELATIVE',
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


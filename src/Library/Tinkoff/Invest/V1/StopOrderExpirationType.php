<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: stoporders.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 *Тип экспирации стоп-заявке.
 *
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.StopOrderExpirationType</code>
 */
class StopOrderExpirationType
{
    /**
     *Значение не указано
     *
     * Generated from protobuf enum <code>STOP_ORDER_EXPIRATION_TYPE_UNSPECIFIED = 0;</code>
     */
    const STOP_ORDER_EXPIRATION_TYPE_UNSPECIFIED = 0;
    /**
     *Действительно до отмены
     *
     * Generated from protobuf enum <code>STOP_ORDER_EXPIRATION_TYPE_GOOD_TILL_CANCEL = 1;</code>
     */
    const STOP_ORDER_EXPIRATION_TYPE_GOOD_TILL_CANCEL = 1;
    /**
     *Действительно до даты снятия
     *
     * Generated from protobuf enum <code>STOP_ORDER_EXPIRATION_TYPE_GOOD_TILL_DATE = 2;</code>
     */
    const STOP_ORDER_EXPIRATION_TYPE_GOOD_TILL_DATE = 2;

    private static $valueToName = [
        self::STOP_ORDER_EXPIRATION_TYPE_UNSPECIFIED => 'STOP_ORDER_EXPIRATION_TYPE_UNSPECIFIED',
        self::STOP_ORDER_EXPIRATION_TYPE_GOOD_TILL_CANCEL => 'STOP_ORDER_EXPIRATION_TYPE_GOOD_TILL_CANCEL',
        self::STOP_ORDER_EXPIRATION_TYPE_GOOD_TILL_DATE => 'STOP_ORDER_EXPIRATION_TYPE_GOOD_TILL_DATE',
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


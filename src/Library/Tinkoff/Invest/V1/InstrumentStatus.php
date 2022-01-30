<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use UnexpectedValueException;

/**
 *Статус запрашиваемых инструментов.
 *
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.InstrumentStatus</code>
 */
class InstrumentStatus
{
    /**
     *Значение не определено.
     *
     * Generated from protobuf enum <code>INSTRUMENT_STATUS_UNSPECIFIED = 0;</code>
     */
    const INSTRUMENT_STATUS_UNSPECIFIED = 0;
    /**
     *Базовый список инструментов (по умолчанию).
     *
     * Generated from protobuf enum <code>INSTRUMENT_STATUS_BASE = 1;</code>
     */
    const INSTRUMENT_STATUS_BASE = 1;
    /**
     *Список всех инструментов.
     *
     * Generated from protobuf enum <code>INSTRUMENT_STATUS_ALL = 2;</code>
     */
    const INSTRUMENT_STATUS_ALL = 2;

    private static $valueToName = [
        self::INSTRUMENT_STATUS_UNSPECIFIED => 'INSTRUMENT_STATUS_UNSPECIFIED',
        self::INSTRUMENT_STATUS_BASE => 'INSTRUMENT_STATUS_BASE',
        self::INSTRUMENT_STATUS_ALL => 'INSTRUMENT_STATUS_ALL',
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

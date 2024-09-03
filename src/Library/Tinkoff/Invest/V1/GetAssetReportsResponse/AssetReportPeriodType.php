<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1\GetAssetReportsResponse;

use UnexpectedValueException;

/**
 * Protobuf type <code>tinkoff.public.invest.api.contract.v1.GetAssetReportsResponse.AssetReportPeriodType</code>
 */
class AssetReportPeriodType
{
    /**
     * Не указан.
     *
     * Generated from protobuf enum <code>PERIOD_TYPE_UNSPECIFIED = 0;</code>
     */
    const PERIOD_TYPE_UNSPECIFIED = 0;
    /**
     * Квартальный.
     *
     * Generated from protobuf enum <code>PERIOD_TYPE_QUARTER = 1;</code>
     */
    const PERIOD_TYPE_QUARTER = 1;
    /**
     * Полугодовой.
     *
     * Generated from protobuf enum <code>PERIOD_TYPE_SEMIANNUAL = 2;</code>
     */
    const PERIOD_TYPE_SEMIANNUAL = 2;
    /**
     * Годовой.
     *
     * Generated from protobuf enum <code>PERIOD_TYPE_ANNUAL = 3;</code>
     */
    const PERIOD_TYPE_ANNUAL = 3;

    private static $valueToName = [
        self::PERIOD_TYPE_UNSPECIFIED => 'PERIOD_TYPE_UNSPECIFIED',
        self::PERIOD_TYPE_QUARTER => 'PERIOD_TYPE_QUARTER',
        self::PERIOD_TYPE_SEMIANNUAL => 'PERIOD_TYPE_SEMIANNUAL',
        self::PERIOD_TYPE_ANNUAL => 'PERIOD_TYPE_ANNUAL',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssetReportPeriodType::class, \Tinkoff\Invest\V1\GetAssetReportsResponse_AssetReportPeriodType::class);


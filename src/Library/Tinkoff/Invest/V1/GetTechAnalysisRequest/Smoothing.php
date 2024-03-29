<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1\GetTechAnalysisRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetTechAnalysisRequest.Smoothing</code>
 */
class Smoothing extends \Google\Protobuf\Internal\Message
{
    /**
     *Короткий период сглаживания для первой экспоненциальной скользящей средней (EMA).
     *
     * Generated from protobuf field <code>int32 fast_length = 1;</code>
     */
    protected $fast_length = 0;
    /**
     *Длинный период сглаживания для второй экспоненциальной скользящей средней (EMA).
     *
     * Generated from protobuf field <code>int32 slow_length = 2;</code>
     */
    protected $slow_length = 0;
    /**
     *Период сглаживания для третьей экспоненциальной скользящей средней (EMA)
     *
     * Generated from protobuf field <code>int32 signal_smoothing = 3;</code>
     */
    protected $signal_smoothing = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $fast_length
     *          Короткий период сглаживания для первой экспоненциальной скользящей средней (EMA).
     *     @type int $slow_length
     *          Длинный период сглаживания для второй экспоненциальной скользящей средней (EMA).
     *     @type int $signal_smoothing
     *          Период сглаживания для третьей экспоненциальной скользящей средней (EMA)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Короткий период сглаживания для первой экспоненциальной скользящей средней (EMA).
     *
     * Generated from protobuf field <code>int32 fast_length = 1;</code>
     * @return int
     */
    public function getFastLength()
    {
        return $this->fast_length;
    }

    /**
     *Короткий период сглаживания для первой экспоненциальной скользящей средней (EMA).
     *
     * Generated from protobuf field <code>int32 fast_length = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFastLength($var)
    {
        GPBUtil::checkInt32($var);
        $this->fast_length = $var;

        return $this;
    }

    /**
     *Длинный период сглаживания для второй экспоненциальной скользящей средней (EMA).
     *
     * Generated from protobuf field <code>int32 slow_length = 2;</code>
     * @return int
     */
    public function getSlowLength()
    {
        return $this->slow_length;
    }

    /**
     *Длинный период сглаживания для второй экспоненциальной скользящей средней (EMA).
     *
     * Generated from protobuf field <code>int32 slow_length = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSlowLength($var)
    {
        GPBUtil::checkInt32($var);
        $this->slow_length = $var;

        return $this;
    }

    /**
     *Период сглаживания для третьей экспоненциальной скользящей средней (EMA)
     *
     * Generated from protobuf field <code>int32 signal_smoothing = 3;</code>
     * @return int
     */
    public function getSignalSmoothing()
    {
        return $this->signal_smoothing;
    }

    /**
     *Период сглаживания для третьей экспоненциальной скользящей средней (EMA)
     *
     * Generated from protobuf field <code>int32 signal_smoothing = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSignalSmoothing($var)
    {
        GPBUtil::checkInt32($var);
        $this->signal_smoothing = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Smoothing::class, \Tinkoff\Invest\V1\GetTechAnalysisRequest_Smoothing::class);


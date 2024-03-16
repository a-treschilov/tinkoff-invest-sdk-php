<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1\GetTechAnalysisResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetTechAnalysisResponse.TechAnalysisItem</code>
 */
class TechAnalysisItem extends \Google\Protobuf\Internal\Message
{
    /**
     *Временная метка по UTC, для которой были рассчитаны значения индикатора.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 1;</code>
     */
    protected $timestamp = null;
    /**
     *Значение простого скользящего среднего (средней линии).
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.Quotation middle_band = 2;</code>
     */
    protected $middle_band = null;
    /**
     *Значение верхней линии Боллинджера.
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.Quotation upper_band = 3;</code>
     */
    protected $upper_band = null;
    /**
     *Значение нижней линии Боллинджера.
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.Quotation lower_band = 4;</code>
     */
    protected $lower_band = null;
    /**
     *Значение сигнальной линии.
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.Quotation signal = 5;</code>
     */
    protected $signal = null;
    /**
     *Значение линии MACD.
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.Quotation macd = 6;</code>
     */
    protected $macd = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $timestamp
     *          Временная метка по UTC, для которой были рассчитаны значения индикатора.
     *     @type \Tinkoff\Invest\V1\Quotation $middle_band
     *          Значение простого скользящего среднего (средней линии).
     *     @type \Tinkoff\Invest\V1\Quotation $upper_band
     *          Значение верхней линии Боллинджера.
     *     @type \Tinkoff\Invest\V1\Quotation $lower_band
     *          Значение нижней линии Боллинджера.
     *     @type \Tinkoff\Invest\V1\Quotation $signal
     *          Значение сигнальной линии.
     *     @type \Tinkoff\Invest\V1\Quotation $macd
     *          Значение линии MACD.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Временная метка по UTC, для которой были рассчитаны значения индикатора.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    public function clearTimestamp()
    {
        unset($this->timestamp);
    }

    /**
     *Временная метка по UTC, для которой были рассчитаны значения индикатора.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;

        return $this;
    }

    /**
     *Значение простого скользящего среднего (средней линии).
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.Quotation middle_band = 2;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getMiddleBand()
    {
        return $this->middle_band;
    }

    public function hasMiddleBand()
    {
        return isset($this->middle_band);
    }

    public function clearMiddleBand()
    {
        unset($this->middle_band);
    }

    /**
     *Значение простого скользящего среднего (средней линии).
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.Quotation middle_band = 2;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setMiddleBand($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->middle_band = $var;

        return $this;
    }

    /**
     *Значение верхней линии Боллинджера.
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.Quotation upper_band = 3;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getUpperBand()
    {
        return $this->upper_band;
    }

    public function hasUpperBand()
    {
        return isset($this->upper_band);
    }

    public function clearUpperBand()
    {
        unset($this->upper_band);
    }

    /**
     *Значение верхней линии Боллинджера.
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.Quotation upper_band = 3;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setUpperBand($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->upper_band = $var;

        return $this;
    }

    /**
     *Значение нижней линии Боллинджера.
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.Quotation lower_band = 4;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getLowerBand()
    {
        return $this->lower_band;
    }

    public function hasLowerBand()
    {
        return isset($this->lower_band);
    }

    public function clearLowerBand()
    {
        unset($this->lower_band);
    }

    /**
     *Значение нижней линии Боллинджера.
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.Quotation lower_band = 4;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setLowerBand($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->lower_band = $var;

        return $this;
    }

    /**
     *Значение сигнальной линии.
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.Quotation signal = 5;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getSignal()
    {
        return $this->signal;
    }

    public function hasSignal()
    {
        return isset($this->signal);
    }

    public function clearSignal()
    {
        unset($this->signal);
    }

    /**
     *Значение сигнальной линии.
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.Quotation signal = 5;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setSignal($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->signal = $var;

        return $this;
    }

    /**
     *Значение линии MACD.
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.Quotation macd = 6;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getMacd()
    {
        return $this->macd;
    }

    public function hasMacd()
    {
        return isset($this->macd);
    }

    public function clearMacd()
    {
        unset($this->macd);
    }

    /**
     *Значение линии MACD.
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.Quotation macd = 6;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setMacd($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->macd = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TechAnalysisItem::class, \Tinkoff\Invest\V1\GetTechAnalysisResponse_TechAnalysisItem::class);


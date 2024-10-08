<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1\GetForecastResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Консенсус-прогноз.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetForecastResponse.ConsensusItem</code>
 */
class ConsensusItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string uid = 1;</code>
     */
    protected $uid = '';
    /**
     * Тикер инструмента.
     *
     * Generated from protobuf field <code>string ticker = 2;</code>
     */
    protected $ticker = '';
    /**
     * Прогноз.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Recommendation recommendation = 3;</code>
     */
    protected $recommendation = 0;
    /**
     * Валюта.
     *
     * Generated from protobuf field <code>string currency = 4;</code>
     */
    protected $currency = '';
    /**
     * Текущая цена.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation current_price = 5;</code>
     */
    protected $current_price = null;
    /**
     * Прогнозируемая цена.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation consensus = 6;</code>
     */
    protected $consensus = null;
    /**
     * Минимальная цена прогноза.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation min_target = 7;</code>
     */
    protected $min_target = null;
    /**
     * Максимальная цена прогноза.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation max_target = 8;</code>
     */
    protected $max_target = null;
    /**
     * Изменение цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price_change = 9;</code>
     */
    protected $price_change = null;
    /**
     * Относительное изменение цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price_change_rel = 10;</code>
     */
    protected $price_change_rel = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $uid
     *           Уникальный идентификатор инструмента.
     *     @type string $ticker
     *           Тикер инструмента.
     *     @type int $recommendation
     *           Прогноз.
     *     @type string $currency
     *           Валюта.
     *     @type \Tinkoff\Invest\V1\Quotation $current_price
     *           Текущая цена.
     *     @type \Tinkoff\Invest\V1\Quotation $consensus
     *           Прогнозируемая цена.
     *     @type \Tinkoff\Invest\V1\Quotation $min_target
     *           Минимальная цена прогноза.
     *     @type \Tinkoff\Invest\V1\Quotation $max_target
     *           Максимальная цена прогноза.
     *     @type \Tinkoff\Invest\V1\Quotation $price_change
     *           Изменение цены.
     *     @type \Tinkoff\Invest\V1\Quotation $price_change_rel
     *           Относительное изменение цены.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     * Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string uid = 1;</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Уникальный идентификатор инструмента.
     *
     * Generated from protobuf field <code>string uid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Тикер инструмента.
     *
     * Generated from protobuf field <code>string ticker = 2;</code>
     * @return string
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     * Тикер инструмента.
     *
     * Generated from protobuf field <code>string ticker = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTicker($var)
    {
        GPBUtil::checkString($var, True);
        $this->ticker = $var;

        return $this;
    }

    /**
     * Прогноз.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Recommendation recommendation = 3;</code>
     * @return int
     */
    public function getRecommendation()
    {
        return $this->recommendation;
    }

    /**
     * Прогноз.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Recommendation recommendation = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRecommendation($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\Recommendation::class);
        $this->recommendation = $var;

        return $this;
    }

    /**
     * Валюта.
     *
     * Generated from protobuf field <code>string currency = 4;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Валюта.
     *
     * Generated from protobuf field <code>string currency = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency = $var;

        return $this;
    }

    /**
     * Текущая цена.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation current_price = 5;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getCurrentPrice()
    {
        return $this->current_price;
    }

    public function hasCurrentPrice()
    {
        return isset($this->current_price);
    }

    public function clearCurrentPrice()
    {
        unset($this->current_price);
    }

    /**
     * Текущая цена.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation current_price = 5;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setCurrentPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->current_price = $var;

        return $this;
    }

    /**
     * Прогнозируемая цена.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation consensus = 6;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getConsensus()
    {
        return $this->consensus;
    }

    public function hasConsensus()
    {
        return isset($this->consensus);
    }

    public function clearConsensus()
    {
        unset($this->consensus);
    }

    /**
     * Прогнозируемая цена.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation consensus = 6;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setConsensus($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->consensus = $var;

        return $this;
    }

    /**
     * Минимальная цена прогноза.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation min_target = 7;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getMinTarget()
    {
        return $this->min_target;
    }

    public function hasMinTarget()
    {
        return isset($this->min_target);
    }

    public function clearMinTarget()
    {
        unset($this->min_target);
    }

    /**
     * Минимальная цена прогноза.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation min_target = 7;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setMinTarget($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->min_target = $var;

        return $this;
    }

    /**
     * Максимальная цена прогноза.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation max_target = 8;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getMaxTarget()
    {
        return $this->max_target;
    }

    public function hasMaxTarget()
    {
        return isset($this->max_target);
    }

    public function clearMaxTarget()
    {
        unset($this->max_target);
    }

    /**
     * Максимальная цена прогноза.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation max_target = 8;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setMaxTarget($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->max_target = $var;

        return $this;
    }

    /**
     * Изменение цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price_change = 9;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getPriceChange()
    {
        return $this->price_change;
    }

    public function hasPriceChange()
    {
        return isset($this->price_change);
    }

    public function clearPriceChange()
    {
        unset($this->price_change);
    }

    /**
     * Изменение цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price_change = 9;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setPriceChange($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->price_change = $var;

        return $this;
    }

    /**
     * Относительное изменение цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price_change_rel = 10;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getPriceChangeRel()
    {
        return $this->price_change_rel;
    }

    public function hasPriceChangeRel()
    {
        return isset($this->price_change_rel);
    }

    public function clearPriceChangeRel()
    {
        unset($this->price_change_rel);
    }

    /**
     * Относительное изменение цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation price_change_rel = 10;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setPriceChangeRel($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->price_change_rel = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConsensusItem::class, \Tinkoff\Invest\V1\GetForecastResponse_ConsensusItem::class);


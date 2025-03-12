<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1\GetForecastResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Прогноз
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetForecastResponse.TargetItem</code>
 */
class TargetItem extends \Google\Protobuf\Internal\Message
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
     * Название компании, давшей прогноз.
     *
     * Generated from protobuf field <code>string company = 3;</code>
     */
    protected $company = '';
    /**
     * Прогноз.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Recommendation recommendation = 4;</code>
     */
    protected $recommendation = 0;
    /**
     *Дата прогноза.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp recommendation_date = 5;</code>
     */
    protected $recommendation_date = null;
    /**
     * Валюта.
     *
     * Generated from protobuf field <code>string currency = 6;</code>
     */
    protected $currency = '';
    /**
     * Текущая цена.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation current_price = 7;</code>
     */
    protected $current_price = null;
    /**
     * Прогнозируемая цена.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation target_price = 8;</code>
     */
    protected $target_price = null;
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
     * Наименование инструмента.
     *
     * Generated from protobuf field <code>string show_name = 11;</code>
     */
    protected $show_name = '';

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
     *     @type string $company
     *           Название компании, давшей прогноз.
     *     @type int $recommendation
     *           Прогноз.
     *     @type \Google\Protobuf\Timestamp $recommendation_date
     *          Дата прогноза.
     *     @type string $currency
     *           Валюта.
     *     @type \Tinkoff\Invest\V1\Quotation $current_price
     *           Текущая цена.
     *     @type \Tinkoff\Invest\V1\Quotation $target_price
     *           Прогнозируемая цена.
     *     @type \Tinkoff\Invest\V1\Quotation $price_change
     *           Изменение цены.
     *     @type \Tinkoff\Invest\V1\Quotation $price_change_rel
     *           Относительное изменение цены.
     *     @type string $show_name
     *           Наименование инструмента.
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
     * Название компании, давшей прогноз.
     *
     * Generated from protobuf field <code>string company = 3;</code>
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Название компании, давшей прогноз.
     *
     * Generated from protobuf field <code>string company = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCompany($var)
    {
        GPBUtil::checkString($var, True);
        $this->company = $var;

        return $this;
    }

    /**
     * Прогноз.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Recommendation recommendation = 4;</code>
     * @return int
     */
    public function getRecommendation()
    {
        return $this->recommendation;
    }

    /**
     * Прогноз.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Recommendation recommendation = 4;</code>
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
     *Дата прогноза.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp recommendation_date = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getRecommendationDate()
    {
        return $this->recommendation_date;
    }

    public function hasRecommendationDate()
    {
        return isset($this->recommendation_date);
    }

    public function clearRecommendationDate()
    {
        unset($this->recommendation_date);
    }

    /**
     *Дата прогноза.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp recommendation_date = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setRecommendationDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->recommendation_date = $var;

        return $this;
    }

    /**
     * Валюта.
     *
     * Generated from protobuf field <code>string currency = 6;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Валюта.
     *
     * Generated from protobuf field <code>string currency = 6;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation current_price = 7;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation current_price = 7;</code>
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
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation target_price = 8;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getTargetPrice()
    {
        return $this->target_price;
    }

    public function hasTargetPrice()
    {
        return isset($this->target_price);
    }

    public function clearTargetPrice()
    {
        unset($this->target_price);
    }

    /**
     * Прогнозируемая цена.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation target_price = 8;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setTargetPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->target_price = $var;

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

    /**
     * Наименование инструмента.
     *
     * Generated from protobuf field <code>string show_name = 11;</code>
     * @return string
     */
    public function getShowName()
    {
        return $this->show_name;
    }

    /**
     * Наименование инструмента.
     *
     * Generated from protobuf field <code>string show_name = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setShowName($var)
    {
        GPBUtil::checkString($var, True);
        $this->show_name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TargetItem::class, \Tinkoff\Invest\V1\GetForecastResponse_TargetItem::class);


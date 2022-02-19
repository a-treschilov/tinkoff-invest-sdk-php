<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Позиции портфеля.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.PortfolioPosition</code>
 */
class PortfolioPosition extends \Google\Protobuf\Internal\Message
{
    /**
     *Figi-идентификатора инструмента
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Тип инструмента
     *
     * Generated from protobuf field <code>string instrument_type = 2;</code>
     */
    protected $instrument_type = '';
    /**
     *Количество инструмента в портфеле в штуках
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation quantity = 3;</code>
     */
    protected $quantity = null;
    /**
     *Средневзвешенная цена позиции. **Возможна задержка до секунды для пересчёта**.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue average_position_price = 4;</code>
     */
    protected $average_position_price = null;
    /**
     *Текущая рассчитанная доходность
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation expected_yield = 5;</code>
     */
    protected $expected_yield = null;
    /**
     * Текущий НКД
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue current_nkd = 6;</code>
     */
    protected $current_nkd = null;
    /**
     *Средняя цена лота в позиции в пунктах (для фьючерсов). **Возможна задержка до секунды для пересчёта**.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation average_position_price_pt = 7;</code>
     */
    protected $average_position_price_pt = null;
    /**
     *Текущая цена инструмента
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue current_price = 8;</code>
     */
    protected $current_price = null;
    /**
     *Средняя цена лота в позиции по методу FIFO. **Возможна задержка до секунды для пересчёта**.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue average_position_price_fifo = 9;</code>
     */
    protected $average_position_price_fifo = null;
    /**
     *Количество лотов в портфеле
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation quantity_lots = 10;</code>
     */
    protected $quantity_lots = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          Figi-идентификатора инструмента
     *     @type string $instrument_type
     *          Тип инструмента
     *     @type \Tinkoff\Invest\V1\Quotation $quantity
     *          Количество инструмента в портфеле в штуках
     *     @type \Tinkoff\Invest\V1\MoneyValue $average_position_price
     *          Средневзвешенная цена позиции. **Возможна задержка до секунды для пересчёта**.
     *     @type \Tinkoff\Invest\V1\Quotation $expected_yield
     *          Текущая рассчитанная доходность
     *     @type \Tinkoff\Invest\V1\MoneyValue $current_nkd
     *           Текущий НКД
     *     @type \Tinkoff\Invest\V1\Quotation $average_position_price_pt
     *          Средняя цена лота в позиции в пунктах (для фьючерсов). **Возможна задержка до секунды для пересчёта**.
     *     @type \Tinkoff\Invest\V1\MoneyValue $current_price
     *          Текущая цена инструмента
     *     @type \Tinkoff\Invest\V1\MoneyValue $average_position_price_fifo
     *          Средняя цена лота в позиции по методу FIFO. **Возможна задержка до секунды для пересчёта**.
     *     @type \Tinkoff\Invest\V1\Quotation $quantity_lots
     *          Количество лотов в портфеле
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Figi-идентификатора инструмента
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *Figi-идентификатора инструмента
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFigi($var)
    {
        GPBUtil::checkString($var, True);
        $this->figi = $var;

        return $this;
    }

    /**
     *Тип инструмента
     *
     * Generated from protobuf field <code>string instrument_type = 2;</code>
     * @return string
     */
    public function getInstrumentType()
    {
        return $this->instrument_type;
    }

    /**
     *Тип инструмента
     *
     * Generated from protobuf field <code>string instrument_type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInstrumentType($var)
    {
        GPBUtil::checkString($var, True);
        $this->instrument_type = $var;

        return $this;
    }

    /**
     *Количество инструмента в портфеле в штуках
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation quantity = 3;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     *Количество инструмента в портфеле в штуках
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation quantity = 3;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setQuantity($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->quantity = $var;

        return $this;
    }

    /**
     *Средневзвешенная цена позиции. **Возможна задержка до секунды для пересчёта**.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue average_position_price = 4;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue
     */
    public function getAveragePositionPrice()
    {
        return $this->average_position_price;
    }

    /**
     *Средневзвешенная цена позиции. **Возможна задержка до секунды для пересчёта**.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue average_position_price = 4;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setAveragePositionPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->average_position_price = $var;

        return $this;
    }

    /**
     *Текущая рассчитанная доходность
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation expected_yield = 5;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getExpectedYield()
    {
        return $this->expected_yield;
    }

    /**
     *Текущая рассчитанная доходность
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation expected_yield = 5;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setExpectedYield($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->expected_yield = $var;

        return $this;
    }

    /**
     * Текущий НКД
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue current_nkd = 6;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue
     */
    public function getCurrentNkd()
    {
        return $this->current_nkd;
    }

    /**
     * Текущий НКД
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue current_nkd = 6;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setCurrentNkd($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->current_nkd = $var;

        return $this;
    }

    /**
     *Средняя цена лота в позиции в пунктах (для фьючерсов). **Возможна задержка до секунды для пересчёта**.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation average_position_price_pt = 7;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getAveragePositionPricePt()
    {
        return $this->average_position_price_pt;
    }

    /**
     *Средняя цена лота в позиции в пунктах (для фьючерсов). **Возможна задержка до секунды для пересчёта**.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation average_position_price_pt = 7;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setAveragePositionPricePt($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->average_position_price_pt = $var;

        return $this;
    }

    /**
     *Текущая цена инструмента
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue current_price = 8;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue
     */
    public function getCurrentPrice()
    {
        return $this->current_price;
    }

    /**
     *Текущая цена инструмента
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue current_price = 8;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setCurrentPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->current_price = $var;

        return $this;
    }

    /**
     *Средняя цена лота в позиции по методу FIFO. **Возможна задержка до секунды для пересчёта**.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue average_position_price_fifo = 9;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue
     */
    public function getAveragePositionPriceFifo()
    {
        return $this->average_position_price_fifo;
    }

    /**
     *Средняя цена лота в позиции по методу FIFO. **Возможна задержка до секунды для пересчёта**.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue average_position_price_fifo = 9;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setAveragePositionPriceFifo($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->average_position_price_fifo = $var;

        return $this;
    }

    /**
     *Количество лотов в портфеле
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation quantity_lots = 10;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getQuantityLots()
    {
        return $this->quantity_lots;
    }

    /**
     *Количество лотов в портфеле
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation quantity_lots = 10;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setQuantityLots($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->quantity_lots = $var;

        return $this;
    }

}


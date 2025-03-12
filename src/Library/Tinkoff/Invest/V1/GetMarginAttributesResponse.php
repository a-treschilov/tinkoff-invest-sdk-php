<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: users.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Маржинальные показатели по счёту.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetMarginAttributesResponse</code>
 */
class GetMarginAttributesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Ликвидная стоимость портфеля. [Подробнее про ликвидный портфель](https://www.tbank.ru/invest/help/brokerage/account/margin/about/#q4).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue liquid_portfolio = 1;</code>
     */
    protected $liquid_portfolio = null;
    /**
     * Начальная маржа — начальное обеспечение для совершения новой сделки. [Подробнее про начальную и минимальную маржу](https://www.tbank.ru/invest/help/brokerage/account/margin/about/#q6).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue starting_margin = 2;</code>
     */
    protected $starting_margin = null;
    /**
     * Минимальная маржа — это минимальное обеспечение для поддержания позиции, которую вы уже открыли. [Подробнее про начальную и минимальную маржу](https://www.tbank.ru/invest/help/brokerage/account/margin/about/#q6).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue minimal_margin = 3;</code>
     */
    protected $minimal_margin = null;
    /**
     * Уровень достаточности средств. Соотношение стоимости ликвидного портфеля к начальной марже.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation funds_sufficiency_level = 4;</code>
     */
    protected $funds_sufficiency_level = null;
    /**
     * Объем недостающих средств. Разница между стартовой маржой и ликвидной стоимости портфеля.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue amount_of_missing_funds = 5;</code>
     */
    protected $amount_of_missing_funds = null;
    /**
     * Скорректированная маржа. Начальная маржа, в которой плановые позиции рассчитываются с учётом активных заявок на покупку позиций лонг или продажу позиций шорт.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue corrected_margin = 6;</code>
     */
    protected $corrected_margin = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\MoneyValue $liquid_portfolio
     *           Ликвидная стоимость портфеля. [Подробнее про ликвидный портфель](https://www.tbank.ru/invest/help/brokerage/account/margin/about/#q4).
     *     @type \Tinkoff\Invest\V1\MoneyValue $starting_margin
     *           Начальная маржа — начальное обеспечение для совершения новой сделки. [Подробнее про начальную и минимальную маржу](https://www.tbank.ru/invest/help/brokerage/account/margin/about/#q6).
     *     @type \Tinkoff\Invest\V1\MoneyValue $minimal_margin
     *           Минимальная маржа — это минимальное обеспечение для поддержания позиции, которую вы уже открыли. [Подробнее про начальную и минимальную маржу](https://www.tbank.ru/invest/help/brokerage/account/margin/about/#q6).
     *     @type \Tinkoff\Invest\V1\Quotation $funds_sufficiency_level
     *           Уровень достаточности средств. Соотношение стоимости ликвидного портфеля к начальной марже.
     *     @type \Tinkoff\Invest\V1\MoneyValue $amount_of_missing_funds
     *           Объем недостающих средств. Разница между стартовой маржой и ликвидной стоимости портфеля.
     *     @type \Tinkoff\Invest\V1\MoneyValue $corrected_margin
     *           Скорректированная маржа. Начальная маржа, в которой плановые позиции рассчитываются с учётом активных заявок на покупку позиций лонг или продажу позиций шорт.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Users::initOnce();
        parent::__construct($data);
    }

    /**
     * Ликвидная стоимость портфеля. [Подробнее про ликвидный портфель](https://www.tbank.ru/invest/help/brokerage/account/margin/about/#q4).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue liquid_portfolio = 1;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getLiquidPortfolio()
    {
        return $this->liquid_portfolio;
    }

    public function hasLiquidPortfolio()
    {
        return isset($this->liquid_portfolio);
    }

    public function clearLiquidPortfolio()
    {
        unset($this->liquid_portfolio);
    }

    /**
     * Ликвидная стоимость портфеля. [Подробнее про ликвидный портфель](https://www.tbank.ru/invest/help/brokerage/account/margin/about/#q4).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue liquid_portfolio = 1;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setLiquidPortfolio($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->liquid_portfolio = $var;

        return $this;
    }

    /**
     * Начальная маржа — начальное обеспечение для совершения новой сделки. [Подробнее про начальную и минимальную маржу](https://www.tbank.ru/invest/help/brokerage/account/margin/about/#q6).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue starting_margin = 2;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getStartingMargin()
    {
        return $this->starting_margin;
    }

    public function hasStartingMargin()
    {
        return isset($this->starting_margin);
    }

    public function clearStartingMargin()
    {
        unset($this->starting_margin);
    }

    /**
     * Начальная маржа — начальное обеспечение для совершения новой сделки. [Подробнее про начальную и минимальную маржу](https://www.tbank.ru/invest/help/brokerage/account/margin/about/#q6).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue starting_margin = 2;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setStartingMargin($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->starting_margin = $var;

        return $this;
    }

    /**
     * Минимальная маржа — это минимальное обеспечение для поддержания позиции, которую вы уже открыли. [Подробнее про начальную и минимальную маржу](https://www.tbank.ru/invest/help/brokerage/account/margin/about/#q6).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue minimal_margin = 3;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getMinimalMargin()
    {
        return $this->minimal_margin;
    }

    public function hasMinimalMargin()
    {
        return isset($this->minimal_margin);
    }

    public function clearMinimalMargin()
    {
        unset($this->minimal_margin);
    }

    /**
     * Минимальная маржа — это минимальное обеспечение для поддержания позиции, которую вы уже открыли. [Подробнее про начальную и минимальную маржу](https://www.tbank.ru/invest/help/brokerage/account/margin/about/#q6).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue minimal_margin = 3;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setMinimalMargin($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->minimal_margin = $var;

        return $this;
    }

    /**
     * Уровень достаточности средств. Соотношение стоимости ликвидного портфеля к начальной марже.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation funds_sufficiency_level = 4;</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getFundsSufficiencyLevel()
    {
        return $this->funds_sufficiency_level;
    }

    public function hasFundsSufficiencyLevel()
    {
        return isset($this->funds_sufficiency_level);
    }

    public function clearFundsSufficiencyLevel()
    {
        unset($this->funds_sufficiency_level);
    }

    /**
     * Уровень достаточности средств. Соотношение стоимости ликвидного портфеля к начальной марже.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation funds_sufficiency_level = 4;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setFundsSufficiencyLevel($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->funds_sufficiency_level = $var;

        return $this;
    }

    /**
     * Объем недостающих средств. Разница между стартовой маржой и ликвидной стоимости портфеля.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue amount_of_missing_funds = 5;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getAmountOfMissingFunds()
    {
        return $this->amount_of_missing_funds;
    }

    public function hasAmountOfMissingFunds()
    {
        return isset($this->amount_of_missing_funds);
    }

    public function clearAmountOfMissingFunds()
    {
        unset($this->amount_of_missing_funds);
    }

    /**
     * Объем недостающих средств. Разница между стартовой маржой и ликвидной стоимости портфеля.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue amount_of_missing_funds = 5;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setAmountOfMissingFunds($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->amount_of_missing_funds = $var;

        return $this;
    }

    /**
     * Скорректированная маржа. Начальная маржа, в которой плановые позиции рассчитываются с учётом активных заявок на покупку позиций лонг или продажу позиций шорт.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue corrected_margin = 6;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue|null
     */
    public function getCorrectedMargin()
    {
        return $this->corrected_margin;
    }

    public function hasCorrectedMargin()
    {
        return isset($this->corrected_margin);
    }

    public function clearCorrectedMargin()
    {
        unset($this->corrected_margin);
    }

    /**
     * Скорректированная маржа. Начальная маржа, в которой плановые позиции рассчитываются с учётом активных заявок на покупку позиций лонг или продажу позиций шорт.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue corrected_margin = 6;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setCorrectedMargin($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->corrected_margin = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Облигация.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.AssetBond</code>
 */
class AssetBond extends \Google\Protobuf\Internal\Message
{
    /**
     *Текущий номинал.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation current_nominal = 1;</code>
     */
    protected $current_nominal = null;
    /**
     *Наименование заемщика.
     *
     * Generated from protobuf field <code>string borrow_name = 2;</code>
     */
    protected $borrow_name = '';
    /**
     *Объем эмиссии облигации (стоимость).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation issue_size = 3;</code>
     */
    protected $issue_size = null;
    /**
     *Номинал облигации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation nominal = 4;</code>
     */
    protected $nominal = null;
    /**
     *Валюта номинала.
     *
     * Generated from protobuf field <code>string nominal_currency = 5;</code>
     */
    protected $nominal_currency = '';
    /**
     *Форма выпуска облигации.
     *
     * Generated from protobuf field <code>string issue_kind = 6;</code>
     */
    protected $issue_kind = '';
    /**
     *Форма дохода облигации.
     *
     * Generated from protobuf field <code>string interest_kind = 7;</code>
     */
    protected $interest_kind = '';
    /**
     *Количество выплат в год.
     *
     * Generated from protobuf field <code>int32 coupon_quantity_per_year = 8;</code>
     */
    protected $coupon_quantity_per_year = 0;
    /**
     *Признак облигации с индексируемым номиналом.
     *
     * Generated from protobuf field <code>bool indexed_nominal_flag = 9;</code>
     */
    protected $indexed_nominal_flag = false;
    /**
     *Признак субординированной облигации.
     *
     * Generated from protobuf field <code>bool subordinated_flag = 10;</code>
     */
    protected $subordinated_flag = false;
    /**
     *Признак обеспеченной облигации.
     *
     * Generated from protobuf field <code>bool collateral_flag = 11;</code>
     */
    protected $collateral_flag = false;
    /**
     *Признак показывает, что купоны облигации не облагаются налогом (для mass market).
     *
     * Generated from protobuf field <code>bool tax_free_flag = 12;</code>
     */
    protected $tax_free_flag = false;
    /**
     *Признак облигации с амортизацией долга.
     *
     * Generated from protobuf field <code>bool amortization_flag = 13;</code>
     */
    protected $amortization_flag = false;
    /**
     *Признак облигации с плавающим купоном.
     *
     * Generated from protobuf field <code>bool floating_coupon_flag = 14;</code>
     */
    protected $floating_coupon_flag = false;
    /**
     *Признак бессрочной облигации.
     *
     * Generated from protobuf field <code>bool perpetual_flag = 15;</code>
     */
    protected $perpetual_flag = false;
    /**
     *Дата погашения облигации.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp maturity_date = 16;</code>
     */
    protected $maturity_date = null;
    /**
     *Описание и условия получения дополнительного дохода.
     *
     * Generated from protobuf field <code>string return_condition = 17;</code>
     */
    protected $return_condition = '';
    /**
     *Дата выпуска облигации.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_reg_date = 18;</code>
     */
    protected $state_reg_date = null;
    /**
     *Дата размещения облигации.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp placement_date = 19;</code>
     */
    protected $placement_date = null;
    /**
     *Цена размещения облигации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation placement_price = 20;</code>
     */
    protected $placement_price = null;
    /**
     *Объявленное количество шт.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation issue_size_plan = 21;</code>
     */
    protected $issue_size_plan = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\Quotation $current_nominal
     *          Текущий номинал.
     *     @type string $borrow_name
     *          Наименование заемщика.
     *     @type \Tinkoff\Invest\V1\Quotation $issue_size
     *          Объем эмиссии облигации (стоимость).
     *     @type \Tinkoff\Invest\V1\Quotation $nominal
     *          Номинал облигации.
     *     @type string $nominal_currency
     *          Валюта номинала.
     *     @type string $issue_kind
     *          Форма выпуска облигации.
     *     @type string $interest_kind
     *          Форма дохода облигации.
     *     @type int $coupon_quantity_per_year
     *          Количество выплат в год.
     *     @type bool $indexed_nominal_flag
     *          Признак облигации с индексируемым номиналом.
     *     @type bool $subordinated_flag
     *          Признак субординированной облигации.
     *     @type bool $collateral_flag
     *          Признак обеспеченной облигации.
     *     @type bool $tax_free_flag
     *          Признак показывает, что купоны облигации не облагаются налогом (для mass market).
     *     @type bool $amortization_flag
     *          Признак облигации с амортизацией долга.
     *     @type bool $floating_coupon_flag
     *          Признак облигации с плавающим купоном.
     *     @type bool $perpetual_flag
     *          Признак бессрочной облигации.
     *     @type \Google\Protobuf\Timestamp $maturity_date
     *          Дата погашения облигации.
     *     @type string $return_condition
     *          Описание и условия получения дополнительного дохода.
     *     @type \Google\Protobuf\Timestamp $state_reg_date
     *          Дата выпуска облигации.
     *     @type \Google\Protobuf\Timestamp $placement_date
     *          Дата размещения облигации.
     *     @type \Tinkoff\Invest\V1\Quotation $placement_price
     *          Цена размещения облигации.
     *     @type \Tinkoff\Invest\V1\Quotation $issue_size_plan
     *          Объявленное количество шт.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Текущий номинал.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation current_nominal = 1;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getCurrentNominal()
    {
        return $this->current_nominal;
    }

    /**
     *Текущий номинал.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation current_nominal = 1;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setCurrentNominal($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->current_nominal = $var;

        return $this;
    }

    /**
     *Наименование заемщика.
     *
     * Generated from protobuf field <code>string borrow_name = 2;</code>
     * @return string
     */
    public function getBorrowName()
    {
        return $this->borrow_name;
    }

    /**
     *Наименование заемщика.
     *
     * Generated from protobuf field <code>string borrow_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBorrowName($var)
    {
        GPBUtil::checkString($var, True);
        $this->borrow_name = $var;

        return $this;
    }

    /**
     *Объем эмиссии облигации (стоимость).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation issue_size = 3;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getIssueSize()
    {
        return $this->issue_size;
    }

    /**
     *Объем эмиссии облигации (стоимость).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation issue_size = 3;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setIssueSize($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->issue_size = $var;

        return $this;
    }

    /**
     *Номинал облигации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation nominal = 4;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getNominal()
    {
        return $this->nominal;
    }

    /**
     *Номинал облигации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation nominal = 4;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setNominal($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->nominal = $var;

        return $this;
    }

    /**
     *Валюта номинала.
     *
     * Generated from protobuf field <code>string nominal_currency = 5;</code>
     * @return string
     */
    public function getNominalCurrency()
    {
        return $this->nominal_currency;
    }

    /**
     *Валюта номинала.
     *
     * Generated from protobuf field <code>string nominal_currency = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setNominalCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->nominal_currency = $var;

        return $this;
    }

    /**
     *Форма выпуска облигации.
     *
     * Generated from protobuf field <code>string issue_kind = 6;</code>
     * @return string
     */
    public function getIssueKind()
    {
        return $this->issue_kind;
    }

    /**
     *Форма выпуска облигации.
     *
     * Generated from protobuf field <code>string issue_kind = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setIssueKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->issue_kind = $var;

        return $this;
    }

    /**
     *Форма дохода облигации.
     *
     * Generated from protobuf field <code>string interest_kind = 7;</code>
     * @return string
     */
    public function getInterestKind()
    {
        return $this->interest_kind;
    }

    /**
     *Форма дохода облигации.
     *
     * Generated from protobuf field <code>string interest_kind = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setInterestKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->interest_kind = $var;

        return $this;
    }

    /**
     *Количество выплат в год.
     *
     * Generated from protobuf field <code>int32 coupon_quantity_per_year = 8;</code>
     * @return int
     */
    public function getCouponQuantityPerYear()
    {
        return $this->coupon_quantity_per_year;
    }

    /**
     *Количество выплат в год.
     *
     * Generated from protobuf field <code>int32 coupon_quantity_per_year = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setCouponQuantityPerYear($var)
    {
        GPBUtil::checkInt32($var);
        $this->coupon_quantity_per_year = $var;

        return $this;
    }

    /**
     *Признак облигации с индексируемым номиналом.
     *
     * Generated from protobuf field <code>bool indexed_nominal_flag = 9;</code>
     * @return bool
     */
    public function getIndexedNominalFlag()
    {
        return $this->indexed_nominal_flag;
    }

    /**
     *Признак облигации с индексируемым номиналом.
     *
     * Generated from protobuf field <code>bool indexed_nominal_flag = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setIndexedNominalFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->indexed_nominal_flag = $var;

        return $this;
    }

    /**
     *Признак субординированной облигации.
     *
     * Generated from protobuf field <code>bool subordinated_flag = 10;</code>
     * @return bool
     */
    public function getSubordinatedFlag()
    {
        return $this->subordinated_flag;
    }

    /**
     *Признак субординированной облигации.
     *
     * Generated from protobuf field <code>bool subordinated_flag = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setSubordinatedFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->subordinated_flag = $var;

        return $this;
    }

    /**
     *Признак обеспеченной облигации.
     *
     * Generated from protobuf field <code>bool collateral_flag = 11;</code>
     * @return bool
     */
    public function getCollateralFlag()
    {
        return $this->collateral_flag;
    }

    /**
     *Признак обеспеченной облигации.
     *
     * Generated from protobuf field <code>bool collateral_flag = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setCollateralFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->collateral_flag = $var;

        return $this;
    }

    /**
     *Признак показывает, что купоны облигации не облагаются налогом (для mass market).
     *
     * Generated from protobuf field <code>bool tax_free_flag = 12;</code>
     * @return bool
     */
    public function getTaxFreeFlag()
    {
        return $this->tax_free_flag;
    }

    /**
     *Признак показывает, что купоны облигации не облагаются налогом (для mass market).
     *
     * Generated from protobuf field <code>bool tax_free_flag = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setTaxFreeFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->tax_free_flag = $var;

        return $this;
    }

    /**
     *Признак облигации с амортизацией долга.
     *
     * Generated from protobuf field <code>bool amortization_flag = 13;</code>
     * @return bool
     */
    public function getAmortizationFlag()
    {
        return $this->amortization_flag;
    }

    /**
     *Признак облигации с амортизацией долга.
     *
     * Generated from protobuf field <code>bool amortization_flag = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setAmortizationFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->amortization_flag = $var;

        return $this;
    }

    /**
     *Признак облигации с плавающим купоном.
     *
     * Generated from protobuf field <code>bool floating_coupon_flag = 14;</code>
     * @return bool
     */
    public function getFloatingCouponFlag()
    {
        return $this->floating_coupon_flag;
    }

    /**
     *Признак облигации с плавающим купоном.
     *
     * Generated from protobuf field <code>bool floating_coupon_flag = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setFloatingCouponFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->floating_coupon_flag = $var;

        return $this;
    }

    /**
     *Признак бессрочной облигации.
     *
     * Generated from protobuf field <code>bool perpetual_flag = 15;</code>
     * @return bool
     */
    public function getPerpetualFlag()
    {
        return $this->perpetual_flag;
    }

    /**
     *Признак бессрочной облигации.
     *
     * Generated from protobuf field <code>bool perpetual_flag = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setPerpetualFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->perpetual_flag = $var;

        return $this;
    }

    /**
     *Дата погашения облигации.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp maturity_date = 16;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getMaturityDate()
    {
        return $this->maturity_date;
    }

    /**
     *Дата погашения облигации.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp maturity_date = 16;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setMaturityDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->maturity_date = $var;

        return $this;
    }

    /**
     *Описание и условия получения дополнительного дохода.
     *
     * Generated from protobuf field <code>string return_condition = 17;</code>
     * @return string
     */
    public function getReturnCondition()
    {
        return $this->return_condition;
    }

    /**
     *Описание и условия получения дополнительного дохода.
     *
     * Generated from protobuf field <code>string return_condition = 17;</code>
     * @param string $var
     * @return $this
     */
    public function setReturnCondition($var)
    {
        GPBUtil::checkString($var, True);
        $this->return_condition = $var;

        return $this;
    }

    /**
     *Дата выпуска облигации.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_reg_date = 18;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStateRegDate()
    {
        return $this->state_reg_date;
    }

    /**
     *Дата выпуска облигации.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp state_reg_date = 18;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStateRegDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->state_reg_date = $var;

        return $this;
    }

    /**
     *Дата размещения облигации.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp placement_date = 19;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getPlacementDate()
    {
        return $this->placement_date;
    }

    /**
     *Дата размещения облигации.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp placement_date = 19;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPlacementDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->placement_date = $var;

        return $this;
    }

    /**
     *Цена размещения облигации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation placement_price = 20;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getPlacementPrice()
    {
        return $this->placement_price;
    }

    /**
     *Цена размещения облигации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation placement_price = 20;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setPlacementPrice($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->placement_price = $var;

        return $this;
    }

    /**
     *Объявленное количество шт.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation issue_size_plan = 21;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getIssueSizePlan()
    {
        return $this->issue_size_plan;
    }

    /**
     *Объявленное количество шт.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation issue_size_plan = 21;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setIssueSizePlan($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->issue_size_plan = $var;

        return $this;
    }

}


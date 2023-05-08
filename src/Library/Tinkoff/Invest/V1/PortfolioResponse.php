<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Текущий портфель по счёту.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.PortfolioResponse</code>
 */
class PortfolioResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Общая стоимость акций в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_shares = 1;</code>
     */
    protected $total_amount_shares = null;
    /**
     *Общая стоимость облигаций в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_bonds = 2;</code>
     */
    protected $total_amount_bonds = null;
    /**
     *Общая стоимость фондов в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_etf = 3;</code>
     */
    protected $total_amount_etf = null;
    /**
     *Общая стоимость валют в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_currencies = 4;</code>
     */
    protected $total_amount_currencies = null;
    /**
     *Общая стоимость фьючерсов в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_futures = 5;</code>
     */
    protected $total_amount_futures = null;
    /**
     *Текущая относительная доходность портфеля, в %.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation expected_yield = 6;</code>
     */
    protected $expected_yield = null;
    /**
     *Список позиций портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.PortfolioPosition positions = 7;</code>
     */
    private $positions;
    /**
     *Идентификатор счёта пользователя.
     *
     * Generated from protobuf field <code>string account_id = 8;</code>
     */
    protected $account_id = '';
    /**
     *Общая стоимость опционов в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_options = 9;</code>
     */
    protected $total_amount_options = null;
    /**
     *Общая стоимость структурных нот в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_sp = 10;</code>
     */
    protected $total_amount_sp = null;
    /**
     *Общая стоимость портфеля.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_portfolio = 11;</code>
     */
    protected $total_amount_portfolio = null;
    /**
     *Массив виртуальных позиций портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.VirtualPortfolioPosition virtual_positions = 12;</code>
     */
    private $virtual_positions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\MoneyValue $total_amount_shares
     *          Общая стоимость акций в портфеле.
     *     @type \Tinkoff\Invest\V1\MoneyValue $total_amount_bonds
     *          Общая стоимость облигаций в портфеле.
     *     @type \Tinkoff\Invest\V1\MoneyValue $total_amount_etf
     *          Общая стоимость фондов в портфеле.
     *     @type \Tinkoff\Invest\V1\MoneyValue $total_amount_currencies
     *          Общая стоимость валют в портфеле.
     *     @type \Tinkoff\Invest\V1\MoneyValue $total_amount_futures
     *          Общая стоимость фьючерсов в портфеле.
     *     @type \Tinkoff\Invest\V1\Quotation $expected_yield
     *          Текущая относительная доходность портфеля, в %.
     *     @type \Tinkoff\Invest\V1\PortfolioPosition[]|\Google\Protobuf\Internal\RepeatedField $positions
     *          Список позиций портфеля.
     *     @type string $account_id
     *          Идентификатор счёта пользователя.
     *     @type \Tinkoff\Invest\V1\MoneyValue $total_amount_options
     *          Общая стоимость опционов в портфеле.
     *     @type \Tinkoff\Invest\V1\MoneyValue $total_amount_sp
     *          Общая стоимость структурных нот в портфеле.
     *     @type \Tinkoff\Invest\V1\MoneyValue $total_amount_portfolio
     *          Общая стоимость портфеля.
     *     @type \Tinkoff\Invest\V1\VirtualPortfolioPosition[]|\Google\Protobuf\Internal\RepeatedField $virtual_positions
     *          Массив виртуальных позиций портфеля.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Общая стоимость акций в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_shares = 1;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue
     */
    public function getTotalAmountShares()
    {
        return $this->total_amount_shares;
    }

    /**
     *Общая стоимость акций в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_shares = 1;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setTotalAmountShares($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->total_amount_shares = $var;

        return $this;
    }

    /**
     *Общая стоимость облигаций в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_bonds = 2;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue
     */
    public function getTotalAmountBonds()
    {
        return $this->total_amount_bonds;
    }

    /**
     *Общая стоимость облигаций в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_bonds = 2;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setTotalAmountBonds($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->total_amount_bonds = $var;

        return $this;
    }

    /**
     *Общая стоимость фондов в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_etf = 3;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue
     */
    public function getTotalAmountEtf()
    {
        return $this->total_amount_etf;
    }

    /**
     *Общая стоимость фондов в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_etf = 3;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setTotalAmountEtf($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->total_amount_etf = $var;

        return $this;
    }

    /**
     *Общая стоимость валют в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_currencies = 4;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue
     */
    public function getTotalAmountCurrencies()
    {
        return $this->total_amount_currencies;
    }

    /**
     *Общая стоимость валют в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_currencies = 4;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setTotalAmountCurrencies($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->total_amount_currencies = $var;

        return $this;
    }

    /**
     *Общая стоимость фьючерсов в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_futures = 5;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue
     */
    public function getTotalAmountFutures()
    {
        return $this->total_amount_futures;
    }

    /**
     *Общая стоимость фьючерсов в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_futures = 5;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setTotalAmountFutures($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->total_amount_futures = $var;

        return $this;
    }

    /**
     *Текущая относительная доходность портфеля, в %.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation expected_yield = 6;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getExpectedYield()
    {
        return $this->expected_yield;
    }

    /**
     *Текущая относительная доходность портфеля, в %.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation expected_yield = 6;</code>
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
     *Список позиций портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.PortfolioPosition positions = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPositions()
    {
        return $this->positions;
    }

    /**
     *Список позиций портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.PortfolioPosition positions = 7;</code>
     * @param \Tinkoff\Invest\V1\PortfolioPosition[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPositions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\PortfolioPosition::class);
        $this->positions = $arr;

        return $this;
    }

    /**
     *Идентификатор счёта пользователя.
     *
     * Generated from protobuf field <code>string account_id = 8;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     *Идентификатор счёта пользователя.
     *
     * Generated from protobuf field <code>string account_id = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;

        return $this;
    }

    /**
     *Общая стоимость опционов в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_options = 9;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue
     */
    public function getTotalAmountOptions()
    {
        return $this->total_amount_options;
    }

    /**
     *Общая стоимость опционов в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_options = 9;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setTotalAmountOptions($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->total_amount_options = $var;

        return $this;
    }

    /**
     *Общая стоимость структурных нот в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_sp = 10;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue
     */
    public function getTotalAmountSp()
    {
        return $this->total_amount_sp;
    }

    /**
     *Общая стоимость структурных нот в портфеле.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_sp = 10;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setTotalAmountSp($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->total_amount_sp = $var;

        return $this;
    }

    /**
     *Общая стоимость портфеля.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_portfolio = 11;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue
     */
    public function getTotalAmountPortfolio()
    {
        return $this->total_amount_portfolio;
    }

    /**
     *Общая стоимость портфеля.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue total_amount_portfolio = 11;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setTotalAmountPortfolio($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->total_amount_portfolio = $var;

        return $this;
    }

    /**
     *Массив виртуальных позиций портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.VirtualPortfolioPosition virtual_positions = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVirtualPositions()
    {
        return $this->virtual_positions;
    }

    /**
     *Массив виртуальных позиций портфеля.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.VirtualPortfolioPosition virtual_positions = 12;</code>
     * @param \Tinkoff\Invest\V1\VirtualPortfolioPosition[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVirtualPositions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\VirtualPortfolioPosition::class);
        $this->virtual_positions = $arr;

        return $this;
    }

}


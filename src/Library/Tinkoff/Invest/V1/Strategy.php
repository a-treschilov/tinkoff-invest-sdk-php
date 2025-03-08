<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signals.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Стратегия
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.Strategy</code>
 */
class Strategy extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор стратегии.
     *
     * Generated from protobuf field <code>string strategy_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $strategy_id = '';
    /**
     *Название стратегии.
     *
     * Generated from protobuf field <code>string strategy_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $strategy_name = '';
    /**
     *Описание стратегии.
     *
     * Generated from protobuf field <code>optional string strategy_description = 3;</code>
     */
    protected $strategy_description = null;
    /**
     *Ссылка на страницу с описанием стратегии.
     *
     * Generated from protobuf field <code>optional string strategy_url = 4;</code>
     */
    protected $strategy_url = null;
    /**
     *Тип стратегии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StrategyType strategy_type = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $strategy_type = 0;
    /**
     *Количество активных сигналов.
     *
     * Generated from protobuf field <code>int32 active_signals = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $active_signals = 0;
    /**
     *Общее количество сигналов.
     *
     * Generated from protobuf field <code>int32 total_signals = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $total_signals = 0;
    /**
     *Среднее время нахождения сигнала в позиции.
     *
     * Generated from protobuf field <code>int64 time_in_position = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $time_in_position = 0;
    /**
     *Средняя доходность сигнала в стратегии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation average_signal_yield = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $average_signal_yield = null;
    /**
     *Средняя доходность сигналов в стратегии за последний год.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation average_signal_yield_year = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $average_signal_yield_year = null;
    /**
     *Доходность стратегии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation yield = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $yield = null;
    /**
     *Доходность стратегии за последний год.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation yield_year = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $yield_year = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $strategy_id
     *          Идентификатор стратегии.
     *     @type string $strategy_name
     *          Название стратегии.
     *     @type string $strategy_description
     *          Описание стратегии.
     *     @type string $strategy_url
     *          Ссылка на страницу с описанием стратегии.
     *     @type int $strategy_type
     *          Тип стратегии.
     *     @type int $active_signals
     *          Количество активных сигналов.
     *     @type int $total_signals
     *          Общее количество сигналов.
     *     @type int|string $time_in_position
     *          Среднее время нахождения сигнала в позиции.
     *     @type \Tinkoff\Invest\V1\Quotation $average_signal_yield
     *          Средняя доходность сигнала в стратегии.
     *     @type \Tinkoff\Invest\V1\Quotation $average_signal_yield_year
     *          Средняя доходность сигналов в стратегии за последний год.
     *     @type \Tinkoff\Invest\V1\Quotation $yield
     *          Доходность стратегии.
     *     @type \Tinkoff\Invest\V1\Quotation $yield_year
     *          Доходность стратегии за последний год.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signals::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор стратегии.
     *
     * Generated from protobuf field <code>string strategy_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getStrategyId()
    {
        return $this->strategy_id;
    }

    /**
     *Идентификатор стратегии.
     *
     * Generated from protobuf field <code>string strategy_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setStrategyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->strategy_id = $var;

        return $this;
    }

    /**
     *Название стратегии.
     *
     * Generated from protobuf field <code>string strategy_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getStrategyName()
    {
        return $this->strategy_name;
    }

    /**
     *Название стратегии.
     *
     * Generated from protobuf field <code>string strategy_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setStrategyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->strategy_name = $var;

        return $this;
    }

    /**
     *Описание стратегии.
     *
     * Generated from protobuf field <code>optional string strategy_description = 3;</code>
     * @return string
     */
    public function getStrategyDescription()
    {
        return isset($this->strategy_description) ? $this->strategy_description : '';
    }

    public function hasStrategyDescription()
    {
        return isset($this->strategy_description);
    }

    public function clearStrategyDescription()
    {
        unset($this->strategy_description);
    }

    /**
     *Описание стратегии.
     *
     * Generated from protobuf field <code>optional string strategy_description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStrategyDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->strategy_description = $var;

        return $this;
    }

    /**
     *Ссылка на страницу с описанием стратегии.
     *
     * Generated from protobuf field <code>optional string strategy_url = 4;</code>
     * @return string
     */
    public function getStrategyUrl()
    {
        return isset($this->strategy_url) ? $this->strategy_url : '';
    }

    public function hasStrategyUrl()
    {
        return isset($this->strategy_url);
    }

    public function clearStrategyUrl()
    {
        unset($this->strategy_url);
    }

    /**
     *Ссылка на страницу с описанием стратегии.
     *
     * Generated from protobuf field <code>optional string strategy_url = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStrategyUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->strategy_url = $var;

        return $this;
    }

    /**
     *Тип стратегии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StrategyType strategy_type = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getStrategyType()
    {
        return $this->strategy_type;
    }

    /**
     *Тип стратегии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.StrategyType strategy_type = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setStrategyType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\StrategyType::class);
        $this->strategy_type = $var;

        return $this;
    }

    /**
     *Количество активных сигналов.
     *
     * Generated from protobuf field <code>int32 active_signals = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getActiveSignals()
    {
        return $this->active_signals;
    }

    /**
     *Количество активных сигналов.
     *
     * Generated from protobuf field <code>int32 active_signals = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setActiveSignals($var)
    {
        GPBUtil::checkInt32($var);
        $this->active_signals = $var;

        return $this;
    }

    /**
     *Общее количество сигналов.
     *
     * Generated from protobuf field <code>int32 total_signals = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getTotalSignals()
    {
        return $this->total_signals;
    }

    /**
     *Общее количество сигналов.
     *
     * Generated from protobuf field <code>int32 total_signals = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setTotalSignals($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_signals = $var;

        return $this;
    }

    /**
     *Среднее время нахождения сигнала в позиции.
     *
     * Generated from protobuf field <code>int64 time_in_position = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getTimeInPosition()
    {
        return $this->time_in_position;
    }

    /**
     *Среднее время нахождения сигнала в позиции.
     *
     * Generated from protobuf field <code>int64 time_in_position = 8 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeInPosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->time_in_position = $var;

        return $this;
    }

    /**
     *Средняя доходность сигнала в стратегии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation average_signal_yield = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getAverageSignalYield()
    {
        return $this->average_signal_yield;
    }

    public function hasAverageSignalYield()
    {
        return isset($this->average_signal_yield);
    }

    public function clearAverageSignalYield()
    {
        unset($this->average_signal_yield);
    }

    /**
     *Средняя доходность сигнала в стратегии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation average_signal_yield = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setAverageSignalYield($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->average_signal_yield = $var;

        return $this;
    }

    /**
     *Средняя доходность сигналов в стратегии за последний год.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation average_signal_yield_year = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getAverageSignalYieldYear()
    {
        return $this->average_signal_yield_year;
    }

    public function hasAverageSignalYieldYear()
    {
        return isset($this->average_signal_yield_year);
    }

    public function clearAverageSignalYieldYear()
    {
        unset($this->average_signal_yield_year);
    }

    /**
     *Средняя доходность сигналов в стратегии за последний год.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation average_signal_yield_year = 10 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setAverageSignalYieldYear($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->average_signal_yield_year = $var;

        return $this;
    }

    /**
     *Доходность стратегии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation yield = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getYield()
    {
        return $this->yield;
    }

    public function hasYield()
    {
        return isset($this->yield);
    }

    public function clearYield()
    {
        unset($this->yield);
    }

    /**
     *Доходность стратегии.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation yield = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setYield($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->yield = $var;

        return $this;
    }

    /**
     *Доходность стратегии за последний год.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation yield_year = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Tinkoff\Invest\V1\Quotation|null
     */
    public function getYieldYear()
    {
        return $this->yield_year;
    }

    public function hasYieldYear()
    {
        return isset($this->yield_year);
    }

    public function clearYieldYear()
    {
        unset($this->yield_year);
    }

    /**
     *Доходность стратегии за последний год.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation yield_year = 12 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setYieldYear($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->yield_year = $var;

        return $this;
    }

}


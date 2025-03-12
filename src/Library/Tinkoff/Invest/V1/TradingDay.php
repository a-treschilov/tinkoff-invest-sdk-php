<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Информация о времени торгов.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.TradingDay</code>
 */
class TradingDay extends \Google\Protobuf\Internal\Message
{
    /**
     * Дата.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 1;</code>
     */
    protected $date = null;
    /**
     * Признак торгового дня на бирже.
     *
     * Generated from protobuf field <code>bool is_trading_day = 2;</code>
     */
    protected $is_trading_day = false;
    /**
     * Время начала торгов по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3;</code>
     */
    protected $start_time = null;
    /**
     * Время окончания торгов по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4;</code>
     */
    protected $end_time = null;
    /**
     * Время начала аукциона открытия по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp opening_auction_start_time = 7;</code>
     */
    protected $opening_auction_start_time = null;
    /**
     * Время окончания аукциона закрытия по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp closing_auction_end_time = 8;</code>
     */
    protected $closing_auction_end_time = null;
    /**
     * Время начала аукциона открытия вечерней сессии по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp evening_opening_auction_start_time = 9;</code>
     */
    protected $evening_opening_auction_start_time = null;
    /**
     * Время начала вечерней сессии по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp evening_start_time = 10;</code>
     */
    protected $evening_start_time = null;
    /**
     * Время окончания вечерней сессии по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp evening_end_time = 11;</code>
     */
    protected $evening_end_time = null;
    /**
     * Время начала основного клиринга по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp clearing_start_time = 12;</code>
     */
    protected $clearing_start_time = null;
    /**
     * Время окончания основного клиринга по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp clearing_end_time = 13;</code>
     */
    protected $clearing_end_time = null;
    /**
     * Время начала премаркета по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp premarket_start_time = 14;</code>
     */
    protected $premarket_start_time = null;
    /**
     * Время окончания премаркета по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp premarket_end_time = 15;</code>
     */
    protected $premarket_end_time = null;
    /**
     * Время начала аукциона закрытия по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp closing_auction_start_time = 16;</code>
     */
    protected $closing_auction_start_time = null;
    /**
     * Время окончания аукциона открытия по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp opening_auction_end_time = 17;</code>
     */
    protected $opening_auction_end_time = null;
    /**
     * Торговые интервалы.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.TradingInterval intervals = 18;</code>
     */
    private $intervals;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $date
     *           Дата.
     *     @type bool $is_trading_day
     *           Признак торгового дня на бирже.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Время начала торгов по UTC.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           Время окончания торгов по UTC.
     *     @type \Google\Protobuf\Timestamp $opening_auction_start_time
     *           Время начала аукциона открытия по UTC.
     *     @type \Google\Protobuf\Timestamp $closing_auction_end_time
     *           Время окончания аукциона закрытия по UTC.
     *     @type \Google\Protobuf\Timestamp $evening_opening_auction_start_time
     *           Время начала аукциона открытия вечерней сессии по UTC.
     *     @type \Google\Protobuf\Timestamp $evening_start_time
     *           Время начала вечерней сессии по UTC.
     *     @type \Google\Protobuf\Timestamp $evening_end_time
     *           Время окончания вечерней сессии по UTC.
     *     @type \Google\Protobuf\Timestamp $clearing_start_time
     *           Время начала основного клиринга по UTC.
     *     @type \Google\Protobuf\Timestamp $clearing_end_time
     *           Время окончания основного клиринга по UTC.
     *     @type \Google\Protobuf\Timestamp $premarket_start_time
     *           Время начала премаркета по UTC.
     *     @type \Google\Protobuf\Timestamp $premarket_end_time
     *           Время окончания премаркета по UTC.
     *     @type \Google\Protobuf\Timestamp $closing_auction_start_time
     *           Время начала аукциона закрытия по UTC.
     *     @type \Google\Protobuf\Timestamp $opening_auction_end_time
     *           Время окончания аукциона открытия по UTC.
     *     @type array<\Tinkoff\Invest\V1\TradingInterval>|\Google\Protobuf\Internal\RepeatedField $intervals
     *           Торговые интервалы.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     * Дата.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDate()
    {
        return $this->date;
    }

    public function hasDate()
    {
        return isset($this->date);
    }

    public function clearDate()
    {
        unset($this->date);
    }

    /**
     * Дата.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->date = $var;

        return $this;
    }

    /**
     * Признак торгового дня на бирже.
     *
     * Generated from protobuf field <code>bool is_trading_day = 2;</code>
     * @return bool
     */
    public function getIsTradingDay()
    {
        return $this->is_trading_day;
    }

    /**
     * Признак торгового дня на бирже.
     *
     * Generated from protobuf field <code>bool is_trading_day = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsTradingDay($var)
    {
        GPBUtil::checkBool($var);
        $this->is_trading_day = $var;

        return $this;
    }

    /**
     * Время начала торгов по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Время начала торгов по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Время окончания торгов по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * Время окончания торгов по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Время начала аукциона открытия по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp opening_auction_start_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getOpeningAuctionStartTime()
    {
        return $this->opening_auction_start_time;
    }

    public function hasOpeningAuctionStartTime()
    {
        return isset($this->opening_auction_start_time);
    }

    public function clearOpeningAuctionStartTime()
    {
        unset($this->opening_auction_start_time);
    }

    /**
     * Время начала аукциона открытия по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp opening_auction_start_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setOpeningAuctionStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->opening_auction_start_time = $var;

        return $this;
    }

    /**
     * Время окончания аукциона закрытия по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp closing_auction_end_time = 8;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getClosingAuctionEndTime()
    {
        return $this->closing_auction_end_time;
    }

    public function hasClosingAuctionEndTime()
    {
        return isset($this->closing_auction_end_time);
    }

    public function clearClosingAuctionEndTime()
    {
        unset($this->closing_auction_end_time);
    }

    /**
     * Время окончания аукциона закрытия по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp closing_auction_end_time = 8;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setClosingAuctionEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->closing_auction_end_time = $var;

        return $this;
    }

    /**
     * Время начала аукциона открытия вечерней сессии по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp evening_opening_auction_start_time = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEveningOpeningAuctionStartTime()
    {
        return $this->evening_opening_auction_start_time;
    }

    public function hasEveningOpeningAuctionStartTime()
    {
        return isset($this->evening_opening_auction_start_time);
    }

    public function clearEveningOpeningAuctionStartTime()
    {
        unset($this->evening_opening_auction_start_time);
    }

    /**
     * Время начала аукциона открытия вечерней сессии по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp evening_opening_auction_start_time = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEveningOpeningAuctionStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->evening_opening_auction_start_time = $var;

        return $this;
    }

    /**
     * Время начала вечерней сессии по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp evening_start_time = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEveningStartTime()
    {
        return $this->evening_start_time;
    }

    public function hasEveningStartTime()
    {
        return isset($this->evening_start_time);
    }

    public function clearEveningStartTime()
    {
        unset($this->evening_start_time);
    }

    /**
     * Время начала вечерней сессии по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp evening_start_time = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEveningStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->evening_start_time = $var;

        return $this;
    }

    /**
     * Время окончания вечерней сессии по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp evening_end_time = 11;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEveningEndTime()
    {
        return $this->evening_end_time;
    }

    public function hasEveningEndTime()
    {
        return isset($this->evening_end_time);
    }

    public function clearEveningEndTime()
    {
        unset($this->evening_end_time);
    }

    /**
     * Время окончания вечерней сессии по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp evening_end_time = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEveningEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->evening_end_time = $var;

        return $this;
    }

    /**
     * Время начала основного клиринга по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp clearing_start_time = 12;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getClearingStartTime()
    {
        return $this->clearing_start_time;
    }

    public function hasClearingStartTime()
    {
        return isset($this->clearing_start_time);
    }

    public function clearClearingStartTime()
    {
        unset($this->clearing_start_time);
    }

    /**
     * Время начала основного клиринга по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp clearing_start_time = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setClearingStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->clearing_start_time = $var;

        return $this;
    }

    /**
     * Время окончания основного клиринга по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp clearing_end_time = 13;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getClearingEndTime()
    {
        return $this->clearing_end_time;
    }

    public function hasClearingEndTime()
    {
        return isset($this->clearing_end_time);
    }

    public function clearClearingEndTime()
    {
        unset($this->clearing_end_time);
    }

    /**
     * Время окончания основного клиринга по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp clearing_end_time = 13;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setClearingEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->clearing_end_time = $var;

        return $this;
    }

    /**
     * Время начала премаркета по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp premarket_start_time = 14;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getPremarketStartTime()
    {
        return $this->premarket_start_time;
    }

    public function hasPremarketStartTime()
    {
        return isset($this->premarket_start_time);
    }

    public function clearPremarketStartTime()
    {
        unset($this->premarket_start_time);
    }

    /**
     * Время начала премаркета по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp premarket_start_time = 14;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPremarketStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->premarket_start_time = $var;

        return $this;
    }

    /**
     * Время окончания премаркета по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp premarket_end_time = 15;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getPremarketEndTime()
    {
        return $this->premarket_end_time;
    }

    public function hasPremarketEndTime()
    {
        return isset($this->premarket_end_time);
    }

    public function clearPremarketEndTime()
    {
        unset($this->premarket_end_time);
    }

    /**
     * Время окончания премаркета по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp premarket_end_time = 15;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPremarketEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->premarket_end_time = $var;

        return $this;
    }

    /**
     * Время начала аукциона закрытия по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp closing_auction_start_time = 16;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getClosingAuctionStartTime()
    {
        return $this->closing_auction_start_time;
    }

    public function hasClosingAuctionStartTime()
    {
        return isset($this->closing_auction_start_time);
    }

    public function clearClosingAuctionStartTime()
    {
        unset($this->closing_auction_start_time);
    }

    /**
     * Время начала аукциона закрытия по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp closing_auction_start_time = 16;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setClosingAuctionStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->closing_auction_start_time = $var;

        return $this;
    }

    /**
     * Время окончания аукциона открытия по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp opening_auction_end_time = 17;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getOpeningAuctionEndTime()
    {
        return $this->opening_auction_end_time;
    }

    public function hasOpeningAuctionEndTime()
    {
        return isset($this->opening_auction_end_time);
    }

    public function clearOpeningAuctionEndTime()
    {
        unset($this->opening_auction_end_time);
    }

    /**
     * Время окончания аукциона открытия по UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp opening_auction_end_time = 17;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setOpeningAuctionEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->opening_auction_end_time = $var;

        return $this;
    }

    /**
     * Торговые интервалы.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.TradingInterval intervals = 18;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIntervals()
    {
        return $this->intervals;
    }

    /**
     * Торговые интервалы.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.TradingInterval intervals = 18;</code>
     * @param array<\Tinkoff\Invest\V1\TradingInterval>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIntervals($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\TradingInterval::class);
        $this->intervals = $arr;

        return $this;
    }

}


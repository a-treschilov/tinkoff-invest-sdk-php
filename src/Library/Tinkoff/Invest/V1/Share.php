<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Объект передачи информации об акции.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.Share</code>
 */
class Share extends \Google\Protobuf\Internal\Message
{
    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     */
    protected $figi = '';
    /**
     *Тикер инструмента.
     *
     * Generated from protobuf field <code>string ticker = 2;</code>
     */
    protected $ticker = '';
    /**
     *Класс-код (секция торгов).
     *
     * Generated from protobuf field <code>string class_code = 3;</code>
     */
    protected $class_code = '';
    /**
     *Isin-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string isin = 4;</code>
     */
    protected $isin = '';
    /**
     *Лотность инструмента. Возможно совершение операций только на количества ценной бумаги, кратные параметру *lot*. Подробнее: [лот](https://tinkoff.github.io/investAPI/glossary#lot)
     *
     * Generated from protobuf field <code>int32 lot = 5;</code>
     */
    protected $lot = 0;
    /**
     *Валюта расчётов.
     *
     * Generated from protobuf field <code>string currency = 6;</code>
     */
    protected $currency = '';
    /**
     *Коэффициент ставки риска длинной позиции по инструменту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation klong = 7;</code>
     */
    protected $klong = null;
    /**
     *Коэффициент ставки риска короткой позиции по инструменту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation kshort = 8;</code>
     */
    protected $kshort = null;
    /**
     *Ставка риска минимальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong = 9;</code>
     */
    protected $dlong = null;
    /**
     *Ставка риска минимальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort = 10;</code>
     */
    protected $dshort = null;
    /**
     *Ставка риска начальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong_min = 11;</code>
     */
    protected $dlong_min = null;
    /**
     *Ставка риска начальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort_min = 12;</code>
     */
    protected $dshort_min = null;
    /**
     *Признак доступности для операций в шорт.
     *
     * Generated from protobuf field <code>bool short_enabled_flag = 13;</code>
     */
    protected $short_enabled_flag = false;
    /**
     *Название инструмента.
     *
     * Generated from protobuf field <code>string name = 15;</code>
     */
    protected $name = '';
    /**
     *Торговая площадка.
     *
     * Generated from protobuf field <code>string exchange = 16;</code>
     */
    protected $exchange = '';
    /**
     *Дата IPO акции в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp ipo_date = 17;</code>
     */
    protected $ipo_date = null;
    /**
     *Размер выпуска.
     *
     * Generated from protobuf field <code>int64 issue_size = 18;</code>
     */
    protected $issue_size = 0;
    /**
     *Код страны эмитента.
     *
     * Generated from protobuf field <code>string country_of_risk = 19;</code>
     */
    protected $country_of_risk = '';
    /**
     *Наименование страны эмитента.
     *
     * Generated from protobuf field <code>string country_of_risk_name = 20;</code>
     */
    protected $country_of_risk_name = '';
    /**
     *Сектор экономики.
     *
     * Generated from protobuf field <code>string sector = 21;</code>
     */
    protected $sector = '';
    /**
     *Плановый размер выпуска.
     *
     * Generated from protobuf field <code>int64 issue_size_plan = 22;</code>
     */
    protected $issue_size_plan = 0;
    /**
     *Номинал.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue nominal = 23;</code>
     */
    protected $nominal = null;
    /**
     *Текущий режим торгов инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus trading_status = 25;</code>
     */
    protected $trading_status = 0;
    /**
     *Признак внебиржевой ценной бумаги.
     *
     * Generated from protobuf field <code>bool otc_flag = 26;</code>
     */
    protected $otc_flag = false;
    /**
     *Признак доступности для покупки.
     *
     * Generated from protobuf field <code>bool buy_available_flag = 27;</code>
     */
    protected $buy_available_flag = false;
    /**
     *Признак доступности для продажи.
     *
     * Generated from protobuf field <code>bool sell_available_flag = 28;</code>
     */
    protected $sell_available_flag = false;
    /**
     *Признак наличия дивидендной доходности.
     *
     * Generated from protobuf field <code>bool div_yield_flag = 29;</code>
     */
    protected $div_yield_flag = false;
    /**
     *Тип акции. Возможные значения: [ShareType](https://tinkoff.github.io/investAPI/instruments#sharetype)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.ShareType share_type = 30;</code>
     */
    protected $share_type = 0;
    /**
     *Шаг цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation min_price_increment = 31;</code>
     */
    protected $min_price_increment = null;
    /**
     *Признак доступности торгов через API.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 32;</code>
     */
    protected $api_trade_available_flag = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          Figi-идентификатор инструмента.
     *     @type string $ticker
     *          Тикер инструмента.
     *     @type string $class_code
     *          Класс-код (секция торгов).
     *     @type string $isin
     *          Isin-идентификатор инструмента.
     *     @type int $lot
     *          Лотность инструмента. Возможно совершение операций только на количества ценной бумаги, кратные параметру *lot*. Подробнее: [лот](https://tinkoff.github.io/investAPI/glossary#lot)
     *     @type string $currency
     *          Валюта расчётов.
     *     @type \Tinkoff\Invest\V1\Quotation $klong
     *          Коэффициент ставки риска длинной позиции по инструменту.
     *     @type \Tinkoff\Invest\V1\Quotation $kshort
     *          Коэффициент ставки риска короткой позиции по инструменту.
     *     @type \Tinkoff\Invest\V1\Quotation $dlong
     *          Ставка риска минимальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *     @type \Tinkoff\Invest\V1\Quotation $dshort
     *          Ставка риска минимальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *     @type \Tinkoff\Invest\V1\Quotation $dlong_min
     *          Ставка риска начальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *     @type \Tinkoff\Invest\V1\Quotation $dshort_min
     *          Ставка риска начальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *     @type bool $short_enabled_flag
     *          Признак доступности для операций в шорт.
     *     @type string $name
     *          Название инструмента.
     *     @type string $exchange
     *          Торговая площадка.
     *     @type \Google\Protobuf\Timestamp $ipo_date
     *          Дата IPO акции в часовом поясе UTC.
     *     @type int|string $issue_size
     *          Размер выпуска.
     *     @type string $country_of_risk
     *          Код страны эмитента.
     *     @type string $country_of_risk_name
     *          Наименование страны эмитента.
     *     @type string $sector
     *          Сектор экономики.
     *     @type int|string $issue_size_plan
     *          Плановый размер выпуска.
     *     @type \Tinkoff\Invest\V1\MoneyValue $nominal
     *          Номинал.
     *     @type int $trading_status
     *          Текущий режим торгов инструмента.
     *     @type bool $otc_flag
     *          Признак внебиржевой ценной бумаги.
     *     @type bool $buy_available_flag
     *          Признак доступности для покупки.
     *     @type bool $sell_available_flag
     *          Признак доступности для продажи.
     *     @type bool $div_yield_flag
     *          Признак наличия дивидендной доходности.
     *     @type int $share_type
     *          Тип акции. Возможные значения: [ShareType](https://tinkoff.github.io/investAPI/instruments#sharetype)
     *     @type \Tinkoff\Invest\V1\Quotation $min_price_increment
     *          Шаг цены.
     *     @type bool $api_trade_available_flag
     *          Признак доступности торгов через API.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Figi-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string figi = 1;</code>
     * @return string
     */
    public function getFigi()
    {
        return $this->figi;
    }

    /**
     *Figi-идентификатор инструмента.
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
     *Тикер инструмента.
     *
     * Generated from protobuf field <code>string ticker = 2;</code>
     * @return string
     */
    public function getTicker()
    {
        return $this->ticker;
    }

    /**
     *Тикер инструмента.
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
     *Класс-код (секция торгов).
     *
     * Generated from protobuf field <code>string class_code = 3;</code>
     * @return string
     */
    public function getClassCode()
    {
        return $this->class_code;
    }

    /**
     *Класс-код (секция торгов).
     *
     * Generated from protobuf field <code>string class_code = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setClassCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->class_code = $var;

        return $this;
    }

    /**
     *Isin-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string isin = 4;</code>
     * @return string
     */
    public function getIsin()
    {
        return $this->isin;
    }

    /**
     *Isin-идентификатор инструмента.
     *
     * Generated from protobuf field <code>string isin = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setIsin($var)
    {
        GPBUtil::checkString($var, True);
        $this->isin = $var;

        return $this;
    }

    /**
     *Лотность инструмента. Возможно совершение операций только на количества ценной бумаги, кратные параметру *lot*. Подробнее: [лот](https://tinkoff.github.io/investAPI/glossary#lot)
     *
     * Generated from protobuf field <code>int32 lot = 5;</code>
     * @return int
     */
    public function getLot()
    {
        return $this->lot;
    }

    /**
     *Лотность инструмента. Возможно совершение операций только на количества ценной бумаги, кратные параметру *lot*. Подробнее: [лот](https://tinkoff.github.io/investAPI/glossary#lot)
     *
     * Generated from protobuf field <code>int32 lot = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setLot($var)
    {
        GPBUtil::checkInt32($var);
        $this->lot = $var;

        return $this;
    }

    /**
     *Валюта расчётов.
     *
     * Generated from protobuf field <code>string currency = 6;</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     *Валюта расчётов.
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
     *Коэффициент ставки риска длинной позиции по инструменту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation klong = 7;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getKlong()
    {
        return $this->klong;
    }

    /**
     *Коэффициент ставки риска длинной позиции по инструменту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation klong = 7;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setKlong($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->klong = $var;

        return $this;
    }

    /**
     *Коэффициент ставки риска короткой позиции по инструменту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation kshort = 8;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getKshort()
    {
        return $this->kshort;
    }

    /**
     *Коэффициент ставки риска короткой позиции по инструменту.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation kshort = 8;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setKshort($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->kshort = $var;

        return $this;
    }

    /**
     *Ставка риска минимальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong = 9;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getDlong()
    {
        return $this->dlong;
    }

    /**
     *Ставка риска минимальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong = 9;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setDlong($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->dlong = $var;

        return $this;
    }

    /**
     *Ставка риска минимальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort = 10;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getDshort()
    {
        return $this->dshort;
    }

    /**
     *Ставка риска минимальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort = 10;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setDshort($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->dshort = $var;

        return $this;
    }

    /**
     *Ставка риска начальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong_min = 11;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getDlongMin()
    {
        return $this->dlong_min;
    }

    /**
     *Ставка риска начальной маржи в лонг. Подробнее: [ставка риска в лонг](https://help.tinkoff.ru/margin-trade/long/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dlong_min = 11;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setDlongMin($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->dlong_min = $var;

        return $this;
    }

    /**
     *Ставка риска начальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort_min = 12;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getDshortMin()
    {
        return $this->dshort_min;
    }

    /**
     *Ставка риска начальной маржи в шорт. Подробнее: [ставка риска в шорт](https://help.tinkoff.ru/margin-trade/short/risk-rate/)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation dshort_min = 12;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setDshortMin($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->dshort_min = $var;

        return $this;
    }

    /**
     *Признак доступности для операций в шорт.
     *
     * Generated from protobuf field <code>bool short_enabled_flag = 13;</code>
     * @return bool
     */
    public function getShortEnabledFlag()
    {
        return $this->short_enabled_flag;
    }

    /**
     *Признак доступности для операций в шорт.
     *
     * Generated from protobuf field <code>bool short_enabled_flag = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setShortEnabledFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->short_enabled_flag = $var;

        return $this;
    }

    /**
     *Название инструмента.
     *
     * Generated from protobuf field <code>string name = 15;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *Название инструмента.
     *
     * Generated from protobuf field <code>string name = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     *Торговая площадка.
     *
     * Generated from protobuf field <code>string exchange = 16;</code>
     * @return string
     */
    public function getExchange()
    {
        return $this->exchange;
    }

    /**
     *Торговая площадка.
     *
     * Generated from protobuf field <code>string exchange = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setExchange($var)
    {
        GPBUtil::checkString($var, True);
        $this->exchange = $var;

        return $this;
    }

    /**
     *Дата IPO акции в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp ipo_date = 17;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getIpoDate()
    {
        return $this->ipo_date;
    }

    /**
     *Дата IPO акции в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp ipo_date = 17;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setIpoDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->ipo_date = $var;

        return $this;
    }

    /**
     *Размер выпуска.
     *
     * Generated from protobuf field <code>int64 issue_size = 18;</code>
     * @return int|string
     */
    public function getIssueSize()
    {
        return $this->issue_size;
    }

    /**
     *Размер выпуска.
     *
     * Generated from protobuf field <code>int64 issue_size = 18;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIssueSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->issue_size = $var;

        return $this;
    }

    /**
     *Код страны эмитента.
     *
     * Generated from protobuf field <code>string country_of_risk = 19;</code>
     * @return string
     */
    public function getCountryOfRisk()
    {
        return $this->country_of_risk;
    }

    /**
     *Код страны эмитента.
     *
     * Generated from protobuf field <code>string country_of_risk = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryOfRisk($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_of_risk = $var;

        return $this;
    }

    /**
     *Наименование страны эмитента.
     *
     * Generated from protobuf field <code>string country_of_risk_name = 20;</code>
     * @return string
     */
    public function getCountryOfRiskName()
    {
        return $this->country_of_risk_name;
    }

    /**
     *Наименование страны эмитента.
     *
     * Generated from protobuf field <code>string country_of_risk_name = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryOfRiskName($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_of_risk_name = $var;

        return $this;
    }

    /**
     *Сектор экономики.
     *
     * Generated from protobuf field <code>string sector = 21;</code>
     * @return string
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     *Сектор экономики.
     *
     * Generated from protobuf field <code>string sector = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setSector($var)
    {
        GPBUtil::checkString($var, True);
        $this->sector = $var;

        return $this;
    }

    /**
     *Плановый размер выпуска.
     *
     * Generated from protobuf field <code>int64 issue_size_plan = 22;</code>
     * @return int|string
     */
    public function getIssueSizePlan()
    {
        return $this->issue_size_plan;
    }

    /**
     *Плановый размер выпуска.
     *
     * Generated from protobuf field <code>int64 issue_size_plan = 22;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIssueSizePlan($var)
    {
        GPBUtil::checkInt64($var);
        $this->issue_size_plan = $var;

        return $this;
    }

    /**
     *Номинал.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue nominal = 23;</code>
     * @return \Tinkoff\Invest\V1\MoneyValue
     */
    public function getNominal()
    {
        return $this->nominal;
    }

    /**
     *Номинал.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.MoneyValue nominal = 23;</code>
     * @param \Tinkoff\Invest\V1\MoneyValue $var
     * @return $this
     */
    public function setNominal($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\MoneyValue::class);
        $this->nominal = $var;

        return $this;
    }

    /**
     *Текущий режим торгов инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus trading_status = 25;</code>
     * @return int
     */
    public function getTradingStatus()
    {
        return $this->trading_status;
    }

    /**
     *Текущий режим торгов инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.SecurityTradingStatus trading_status = 25;</code>
     * @param int $var
     * @return $this
     */
    public function setTradingStatus($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\SecurityTradingStatus::class);
        $this->trading_status = $var;

        return $this;
    }

    /**
     *Признак внебиржевой ценной бумаги.
     *
     * Generated from protobuf field <code>bool otc_flag = 26;</code>
     * @return bool
     */
    public function getOtcFlag()
    {
        return $this->otc_flag;
    }

    /**
     *Признак внебиржевой ценной бумаги.
     *
     * Generated from protobuf field <code>bool otc_flag = 26;</code>
     * @param bool $var
     * @return $this
     */
    public function setOtcFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->otc_flag = $var;

        return $this;
    }

    /**
     *Признак доступности для покупки.
     *
     * Generated from protobuf field <code>bool buy_available_flag = 27;</code>
     * @return bool
     */
    public function getBuyAvailableFlag()
    {
        return $this->buy_available_flag;
    }

    /**
     *Признак доступности для покупки.
     *
     * Generated from protobuf field <code>bool buy_available_flag = 27;</code>
     * @param bool $var
     * @return $this
     */
    public function setBuyAvailableFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->buy_available_flag = $var;

        return $this;
    }

    /**
     *Признак доступности для продажи.
     *
     * Generated from protobuf field <code>bool sell_available_flag = 28;</code>
     * @return bool
     */
    public function getSellAvailableFlag()
    {
        return $this->sell_available_flag;
    }

    /**
     *Признак доступности для продажи.
     *
     * Generated from protobuf field <code>bool sell_available_flag = 28;</code>
     * @param bool $var
     * @return $this
     */
    public function setSellAvailableFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->sell_available_flag = $var;

        return $this;
    }

    /**
     *Признак наличия дивидендной доходности.
     *
     * Generated from protobuf field <code>bool div_yield_flag = 29;</code>
     * @return bool
     */
    public function getDivYieldFlag()
    {
        return $this->div_yield_flag;
    }

    /**
     *Признак наличия дивидендной доходности.
     *
     * Generated from protobuf field <code>bool div_yield_flag = 29;</code>
     * @param bool $var
     * @return $this
     */
    public function setDivYieldFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->div_yield_flag = $var;

        return $this;
    }

    /**
     *Тип акции. Возможные значения: [ShareType](https://tinkoff.github.io/investAPI/instruments#sharetype)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.ShareType share_type = 30;</code>
     * @return int
     */
    public function getShareType()
    {
        return $this->share_type;
    }

    /**
     *Тип акции. Возможные значения: [ShareType](https://tinkoff.github.io/investAPI/instruments#sharetype)
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.ShareType share_type = 30;</code>
     * @param int $var
     * @return $this
     */
    public function setShareType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\ShareType::class);
        $this->share_type = $var;

        return $this;
    }

    /**
     *Шаг цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation min_price_increment = 31;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getMinPriceIncrement()
    {
        return $this->min_price_increment;
    }

    /**
     *Шаг цены.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation min_price_increment = 31;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setMinPriceIncrement($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->min_price_increment = $var;

        return $this;
    }

    /**
     *Признак доступности торгов через API.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 32;</code>
     * @return bool
     */
    public function getApiTradeAvailableFlag()
    {
        return $this->api_trade_available_flag;
    }

    /**
     *Признак доступности торгов через API.
     *
     * Generated from protobuf field <code>bool api_trade_available_flag = 32;</code>
     * @param bool $var
     * @return $this
     */
    public function setApiTradeAvailableFlag($var)
    {
        GPBUtil::checkBool($var);
        $this->api_trade_available_flag = $var;

        return $this;
    }

}


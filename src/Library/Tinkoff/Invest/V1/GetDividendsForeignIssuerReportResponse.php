<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetDividendsForeignIssuerReportResponse</code>
 */
class GetDividendsForeignIssuerReportResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.DividendsForeignIssuerReport dividends_foreign_issuer_report = 1;</code>
     */
    private $dividends_foreign_issuer_report;
    /**
     *Количество записей в отчете.
     *
     * Generated from protobuf field <code>int32 itemsCount = 2;</code>
     */
    protected $itemsCount = 0;
    /**
     *Количество страниц с данными отчета, начинается с 0.
     *
     * Generated from protobuf field <code>int32 pagesCount = 3;</code>
     */
    protected $pagesCount = 0;
    /**
     *Текущая страница, начинается с 0.
     *
     * Generated from protobuf field <code>int32 page = 4;</code>
     */
    protected $page = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Tinkoff\Invest\V1\DividendsForeignIssuerReport>|\Google\Protobuf\Internal\RepeatedField $dividends_foreign_issuer_report
     *     @type int $itemsCount
     *          Количество записей в отчете.
     *     @type int $pagesCount
     *          Количество страниц с данными отчета, начинается с 0.
     *     @type int $page
     *          Текущая страница, начинается с 0.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.DividendsForeignIssuerReport dividends_foreign_issuer_report = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDividendsForeignIssuerReport()
    {
        return $this->dividends_foreign_issuer_report;
    }

    /**
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.DividendsForeignIssuerReport dividends_foreign_issuer_report = 1;</code>
     * @param array<\Tinkoff\Invest\V1\DividendsForeignIssuerReport>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDividendsForeignIssuerReport($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\DividendsForeignIssuerReport::class);
        $this->dividends_foreign_issuer_report = $arr;

        return $this;
    }

    /**
     *Количество записей в отчете.
     *
     * Generated from protobuf field <code>int32 itemsCount = 2;</code>
     * @return int
     */
    public function getItemsCount()
    {
        return $this->itemsCount;
    }

    /**
     *Количество записей в отчете.
     *
     * Generated from protobuf field <code>int32 itemsCount = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setItemsCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->itemsCount = $var;

        return $this;
    }

    /**
     *Количество страниц с данными отчета, начинается с 0.
     *
     * Generated from protobuf field <code>int32 pagesCount = 3;</code>
     * @return int
     */
    public function getPagesCount()
    {
        return $this->pagesCount;
    }

    /**
     *Количество страниц с данными отчета, начинается с 0.
     *
     * Generated from protobuf field <code>int32 pagesCount = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPagesCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->pagesCount = $var;

        return $this;
    }

    /**
     *Текущая страница, начинается с 0.
     *
     * Generated from protobuf field <code>int32 page = 4;</code>
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     *Текущая страница, начинается с 0.
     *
     * Generated from protobuf field <code>int32 page = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->page = $var;

        return $this;
    }

}


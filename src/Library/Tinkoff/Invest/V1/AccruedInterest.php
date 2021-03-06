<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Операция начисления купонов.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.AccruedInterest</code>
 */
class AccruedInterest extends \Google\Protobuf\Internal\Message
{
    /**
     *Дата и время выплаты в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 1;</code>
     */
    protected $date = null;
    /**
     *Величина выплаты.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation value = 2;</code>
     */
    protected $value = null;
    /**
     *Величина выплаты в процентах от номинала.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation value_percent = 3;</code>
     */
    protected $value_percent = null;
    /**
     *Номинал облигации.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation nominal = 4;</code>
     */
    protected $nominal = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $date
     *          Дата и время выплаты в часовом поясе UTC.
     *     @type \Tinkoff\Invest\V1\Quotation $value
     *          Величина выплаты.
     *     @type \Tinkoff\Invest\V1\Quotation $value_percent
     *          Величина выплаты в процентах от номинала.
     *     @type \Tinkoff\Invest\V1\Quotation $nominal
     *          Номинал облигации.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Дата и время выплаты в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp date = 1;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     *Дата и время выплаты в часовом поясе UTC.
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
     *Величина выплаты.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation value = 2;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     *Величина выплаты.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation value = 2;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->value = $var;

        return $this;
    }

    /**
     *Величина выплаты в процентах от номинала.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation value_percent = 3;</code>
     * @return \Tinkoff\Invest\V1\Quotation
     */
    public function getValuePercent()
    {
        return $this->value_percent;
    }

    /**
     *Величина выплаты в процентах от номинала.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Quotation value_percent = 3;</code>
     * @param \Tinkoff\Invest\V1\Quotation $var
     * @return $this
     */
    public function setValuePercent($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Quotation::class);
        $this->value_percent = $var;

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

}


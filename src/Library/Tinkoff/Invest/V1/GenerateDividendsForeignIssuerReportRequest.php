<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Объект запроса формирования отчёта "Справка о доходах за пределами РФ".
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GenerateDividendsForeignIssuerReportRequest</code>
 */
class GenerateDividendsForeignIssuerReportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор счёта клиента.
     *
     * Generated from protobuf field <code>string account_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $account_id = '';
    /**
     *Начало периода (по UTC).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $from = null;
    /**
     *Окончание периода (по UTC), как правило, возможно сформировать отчет по дату, на несколько дней меньше текущей. Начало и окончание периода должны быть в рамках одного календарного года.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $to = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_id
     *          Идентификатор счёта клиента.
     *     @type \Google\Protobuf\Timestamp $from
     *          Начало периода (по UTC).
     *     @type \Google\Protobuf\Timestamp $to
     *          Окончание периода (по UTC), как правило, возможно сформировать отчет по дату, на несколько дней меньше текущей. Начало и окончание периода должны быть в рамках одного календарного года.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор счёта клиента.
     *
     * Generated from protobuf field <code>string account_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     *Идентификатор счёта клиента.
     *
     * Generated from protobuf field <code>string account_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     *Начало периода (по UTC).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFrom()
    {
        return $this->from;
    }

    public function hasFrom()
    {
        return isset($this->from);
    }

    public function clearFrom()
    {
        unset($this->from);
    }

    /**
     *Начало периода (по UTC).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFrom($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->from = $var;

        return $this;
    }

    /**
     *Окончание периода (по UTC), как правило, возможно сформировать отчет по дату, на несколько дней меньше текущей. Начало и окончание периода должны быть в рамках одного календарного года.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTo()
    {
        return $this->to;
    }

    public function hasTo()
    {
        return isset($this->to);
    }

    public function clearTo()
    {
        unset($this->to);
    }

    /**
     *Окончание периода (по UTC), как правило, возможно сформировать отчет по дату, на несколько дней меньше текущей. Начало и окончание периода должны быть в рамках одного календарного года.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->to = $var;

        return $this;
    }

}


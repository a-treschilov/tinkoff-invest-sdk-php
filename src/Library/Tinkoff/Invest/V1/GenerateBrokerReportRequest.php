<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GenerateBrokerReportRequest</code>
 */
class GenerateBrokerReportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор счёта клиента.
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     */
    protected $account_id = '';
    /**
     *Начало периода в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2;</code>
     */
    protected $from = null;
    /**
     *Окончание периода в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3;</code>
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
     *          Начало периода в часовом поясе UTC.
     *     @type \Google\Protobuf\Timestamp $to
     *          Окончание периода в часовом поясе UTC.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор счёта клиента.
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     *Идентификатор счёта клиента.
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
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
     *Начало периода в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     *Начало периода в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp from = 2;</code>
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
     *Окончание периода в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     *Окончание периода в часовом поясе UTC.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp to = 3;</code>
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


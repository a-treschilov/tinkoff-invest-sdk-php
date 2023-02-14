<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GenerateBrokerReportResponse</code>
 */
class GenerateBrokerReportResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор задачи формирования брокерского отчёта.
     *
     * Generated from protobuf field <code>string task_id = 1;</code>
     */
    protected $task_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $task_id
     *          Идентификатор задачи формирования брокерского отчёта.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор задачи формирования брокерского отчёта.
     *
     * Generated from protobuf field <code>string task_id = 1;</code>
     * @return string
     */
    public function getTaskId()
    {
        return $this->task_id;
    }

    /**
     *Идентификатор задачи формирования брокерского отчёта.
     *
     * Generated from protobuf field <code>string task_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskId($var)
    {
        GPBUtil::checkString($var, True);
        $this->task_id = $var;

        return $this;
    }

}

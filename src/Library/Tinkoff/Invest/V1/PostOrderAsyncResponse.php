<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Результат выставления асинхронного торгового поручения.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.PostOrderAsyncResponse</code>
 */
class PostOrderAsyncResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор ключа идемпотентности, переданный клиентом, в формате UID. Максимальная длина 36 символов.
     *
     * Generated from protobuf field <code>string order_request_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $order_request_id = '';
    /**
     *Текущий статус заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderExecutionReportStatus execution_report_status = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $execution_report_status = 0;
    /**
     *Идентификатор торгового поручения.
     *
     * Generated from protobuf field <code>optional string trade_intent_id = 3;</code>
     */
    protected $trade_intent_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $order_request_id
     *          Идентификатор ключа идемпотентности, переданный клиентом, в формате UID. Максимальная длина 36 символов.
     *     @type int $execution_report_status
     *          Текущий статус заявки.
     *     @type string $trade_intent_id
     *          Идентификатор торгового поручения.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Orders::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор ключа идемпотентности, переданный клиентом, в формате UID. Максимальная длина 36 символов.
     *
     * Generated from protobuf field <code>string order_request_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getOrderRequestId()
    {
        return $this->order_request_id;
    }

    /**
     *Идентификатор ключа идемпотентности, переданный клиентом, в формате UID. Максимальная длина 36 символов.
     *
     * Generated from protobuf field <code>string order_request_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setOrderRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_request_id = $var;

        return $this;
    }

    /**
     *Текущий статус заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderExecutionReportStatus execution_report_status = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getExecutionReportStatus()
    {
        return $this->execution_report_status;
    }

    /**
     *Текущий статус заявки.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderExecutionReportStatus execution_report_status = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setExecutionReportStatus($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\OrderExecutionReportStatus::class);
        $this->execution_report_status = $var;

        return $this;
    }

    /**
     *Идентификатор торгового поручения.
     *
     * Generated from protobuf field <code>optional string trade_intent_id = 3;</code>
     * @return string
     */
    public function getTradeIntentId()
    {
        return isset($this->trade_intent_id) ? $this->trade_intent_id : '';
    }

    public function hasTradeIntentId()
    {
        return isset($this->trade_intent_id);
    }

    public function clearTradeIntentId()
    {
        unset($this->trade_intent_id);
    }

    /**
     *Идентификатор торгового поручения.
     *
     * Generated from protobuf field <code>optional string trade_intent_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTradeIntentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trade_intent_id = $var;

        return $this;
    }

}


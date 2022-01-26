<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: stoporders.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос отмены выставленной стоп-заявки.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.CancelStopOrderRequest</code>
 */
class CancelStopOrderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор счёта клиента
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     */
    protected $account_id = '';
    /**
     *Уникальный идентификатор стоп-заявки.
     *
     * Generated from protobuf field <code>string stop_order_id = 2;</code>
     */
    protected $stop_order_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_id
     *          Идентификатор счёта клиента
     *     @type string $stop_order_id
     *          Уникальный идентификатор стоп-заявки.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Stoporders::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор счёта клиента
     *
     * Generated from protobuf field <code>string account_id = 1;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     *Идентификатор счёта клиента
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
     *Уникальный идентификатор стоп-заявки.
     *
     * Generated from protobuf field <code>string stop_order_id = 2;</code>
     * @return string
     */
    public function getStopOrderId()
    {
        return $this->stop_order_id;
    }

    /**
     *Уникальный идентификатор стоп-заявки.
     *
     * Generated from protobuf field <code>string stop_order_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStopOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stop_order_id = $var;

        return $this;
    }

}


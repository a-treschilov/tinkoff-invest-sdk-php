<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос позиций портфеля по счету.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.PositionsRequest</code>
 */
class PositionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор счета пользователя.
     *
     * Generated from protobuf field <code>string account_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $account_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_id
     *          Идентификатор счета пользователя.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор счета пользователя.
     *
     * Generated from protobuf field <code>string account_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     *Идентификатор счета пользователя.
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

}


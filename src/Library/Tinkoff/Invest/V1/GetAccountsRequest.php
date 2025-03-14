<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: users.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос получения счетов пользователя.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetAccountsRequest</code>
 */
class GetAccountsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Статус счета.
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.AccountStatus status = 1;</code>
     */
    protected $status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *          Статус счета.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Users::initOnce();
        parent::__construct($data);
    }

    /**
     *Статус счета.
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.AccountStatus status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : 0;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     *Статус счета.
     *
     * Generated from protobuf field <code>optional .tinkoff.public.invest.api.contract.v1.AccountStatus status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\AccountStatus::class);
        $this->status = $var;

        return $this;
    }

}


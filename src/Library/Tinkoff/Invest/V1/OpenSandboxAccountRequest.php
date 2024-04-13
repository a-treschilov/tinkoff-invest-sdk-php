<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sandbox.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос открытия счёта в песочнице.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.OpenSandboxAccountRequest</code>
 */
class OpenSandboxAccountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Название счёта
     *
     * Generated from protobuf field <code>optional string name = 1;</code>
     */
    protected $name = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Название счёта
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Sandbox::initOnce();
        parent::__construct($data);
    }

    /**
     * Название счёта
     *
     * Generated from protobuf field <code>optional string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Название счёта
     *
     * Generated from protobuf field <code>optional string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}


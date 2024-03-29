<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Список операций.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.OperationsResponse</code>
 */
class OperationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Массив операций.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Operation operations = 1;</code>
     */
    private $operations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Tinkoff\Invest\V1\Operation>|\Google\Protobuf\Internal\RepeatedField $operations
     *          Массив операций.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     *Массив операций.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Operation operations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     *Массив операций.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Operation operations = 1;</code>
     * @param array<\Tinkoff\Invest\V1\Operation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\Operation::class);
        $this->operations = $arr;

        return $this;
    }

}


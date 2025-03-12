<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: signals.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос стратегий.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetStrategiesRequest</code>
 */
class GetStrategiesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Идентификатор стратегии.
     *
     * Generated from protobuf field <code>optional string strategy_id = 1;</code>
     */
    protected $strategy_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $strategy_id
     *          Идентификатор стратегии.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Signals::initOnce();
        parent::__construct($data);
    }

    /**
     *Идентификатор стратегии.
     *
     * Generated from protobuf field <code>optional string strategy_id = 1;</code>
     * @return string
     */
    public function getStrategyId()
    {
        return isset($this->strategy_id) ? $this->strategy_id : '';
    }

    public function hasStrategyId()
    {
        return isset($this->strategy_id);
    }

    public function clearStrategyId()
    {
        unset($this->strategy_id);
    }

    /**
     *Идентификатор стратегии.
     *
     * Generated from protobuf field <code>optional string strategy_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStrategyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->strategy_id = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: users.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Текущие лимиты пользователя.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetUserTariffResponse</code>
 */
class GetUserTariffResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Массив лимитов пользователя по unary-запросам.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.UnaryLimit unary_limits = 1;</code>
     */
    private $unary_limits;
    /**
     *Массив лимитов пользователей для stream-соединений.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.StreamLimit stream_limits = 2;</code>
     */
    private $stream_limits;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Tinkoff\Invest\V1\UnaryLimit>|\Google\Protobuf\Internal\RepeatedField $unary_limits
     *          Массив лимитов пользователя по unary-запросам.
     *     @type array<\Tinkoff\Invest\V1\StreamLimit>|\Google\Protobuf\Internal\RepeatedField $stream_limits
     *          Массив лимитов пользователей для stream-соединений.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Users::initOnce();
        parent::__construct($data);
    }

    /**
     *Массив лимитов пользователя по unary-запросам.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.UnaryLimit unary_limits = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUnaryLimits()
    {
        return $this->unary_limits;
    }

    /**
     *Массив лимитов пользователя по unary-запросам.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.UnaryLimit unary_limits = 1;</code>
     * @param array<\Tinkoff\Invest\V1\UnaryLimit>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUnaryLimits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\UnaryLimit::class);
        $this->unary_limits = $arr;

        return $this;
    }

    /**
     *Массив лимитов пользователей для stream-соединений.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.StreamLimit stream_limits = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStreamLimits()
    {
        return $this->stream_limits;
    }

    /**
     *Массив лимитов пользователей для stream-соединений.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.StreamLimit stream_limits = 2;</code>
     * @param array<\Tinkoff\Invest\V1\StreamLimit>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStreamLimits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\StreamLimit::class);
        $this->stream_limits = $arr;

        return $this;
    }

}


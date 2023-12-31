<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Дивиденды.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetDividendsResponse</code>
 */
class GetDividendsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Dividend dividends = 1;</code>
     */
    private $dividends;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Tinkoff\Invest\V1\Dividend>|\Google\Protobuf\Internal\RepeatedField $dividends
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Dividend dividends = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDividends()
    {
        return $this->dividends;
    }

    /**
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.Dividend dividends = 1;</code>
     * @param array<\Tinkoff\Invest\V1\Dividend>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDividends($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\Dividend::class);
        $this->dividends = $arr;

        return $this;
    }

}


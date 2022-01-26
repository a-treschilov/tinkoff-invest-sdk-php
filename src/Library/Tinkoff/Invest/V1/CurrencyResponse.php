<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Данные по валюте.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.CurrencyResponse</code>
 */
class CurrencyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Информация о валюте.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Currency instrument = 1;</code>
     */
    protected $instrument = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\Currency $instrument
     *           Информация о валюте.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     * Информация о валюте.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Currency instrument = 1;</code>
     * @return \Tinkoff\Invest\V1\Currency
     */
    public function getInstrument()
    {
        return $this->instrument;
    }

    /**
     * Информация о валюте.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.Currency instrument = 1;</code>
     * @param \Tinkoff\Invest\V1\Currency $var
     * @return $this
     */
    public function setInstrument($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\Currency::class);
        $this->instrument = $var;

        return $this;
    }

}


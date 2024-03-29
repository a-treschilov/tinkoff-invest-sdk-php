<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Справочник стран.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetCountriesResponse</code>
 */
class GetCountriesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     *Массив стран.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.CountryResponse countries = 1;</code>
     */
    private $countries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Tinkoff\Invest\V1\CountryResponse>|\Google\Protobuf\Internal\RepeatedField $countries
     *          Массив стран.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Массив стран.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.CountryResponse countries = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     *Массив стран.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.CountryResponse countries = 1;</code>
     * @param array<\Tinkoff\Invest\V1\CountryResponse>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCountries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\CountryResponse::class);
        $this->countries = $arr;

        return $this;
    }

}


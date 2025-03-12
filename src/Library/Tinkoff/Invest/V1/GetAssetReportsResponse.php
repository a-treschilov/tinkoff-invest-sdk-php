<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Отчеты эмитентов
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.GetAssetReportsResponse</code>
 */
class GetAssetReportsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Массив событий по облигации.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.GetAssetReportsResponse.GetAssetReportsEvent events = 1;</code>
     */
    private $events;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Tinkoff\Invest\V1\GetAssetReportsResponse\GetAssetReportsEvent>|\Google\Protobuf\Internal\RepeatedField $events
     *           Массив событий по облигации.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     * Массив событий по облигации.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.GetAssetReportsResponse.GetAssetReportsEvent events = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Массив событий по облигации.
     *
     * Generated from protobuf field <code>repeated .tinkoff.public.invest.api.contract.v1.GetAssetReportsResponse.GetAssetReportsEvent events = 1;</code>
     * @param array<\Tinkoff\Invest\V1\GetAssetReportsResponse\GetAssetReportsEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Tinkoff\Invest\V1\GetAssetReportsResponse\GetAssetReportsEvent::class);
        $this->events = $arr;

        return $this;
    }

}


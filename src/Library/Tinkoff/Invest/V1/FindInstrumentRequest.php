<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос на поиск инструментов.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.FindInstrumentRequest</code>
 */
class FindInstrumentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *Строка поиска.
     *
     * Generated from protobuf field <code>string query = 1;</code>
     */
    protected $query = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     *          Строка поиска.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *Строка поиска.
     *
     * Generated from protobuf field <code>string query = 1;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     *Строка поиска.
     *
     * Generated from protobuf field <code>string query = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

}


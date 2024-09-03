<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: marketdata.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Запрос подписки на стаканы.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.OrderBookInstrument</code>
 */
class OrderBookInstrument extends \Google\Protobuf\Internal\Message
{
    /**
     *Deprecated FIGI-идентификатор инструмента. Используйте `instrument_id`.
     *
     * Generated from protobuf field <code>string figi = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $figi = '';
    /**
     *Глубина стакана.
     *
     * Generated from protobuf field <code>int32 depth = 2;</code>
     */
    protected $depth = 0;
    /**
     *Идентификатор инструмента. Принимает значение `figi` или `instrument_uid`.
     *
     * Generated from protobuf field <code>string instrument_id = 3;</code>
     */
    protected $instrument_id = '';
    /**
     *Тип стакана.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderBookType order_book_type = 4;</code>
     */
    protected $order_book_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $figi
     *          Deprecated FIGI-идентификатор инструмента. Используйте `instrument_id`.
     *     @type int $depth
     *          Глубина стакана.
     *     @type string $instrument_id
     *          Идентификатор инструмента. Принимает значение `figi` или `instrument_uid`.
     *     @type int $order_book_type
     *          Тип стакана.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Marketdata::initOnce();
        parent::__construct($data);
    }

    /**
     *Deprecated FIGI-идентификатор инструмента. Используйте `instrument_id`.
     *
     * Generated from protobuf field <code>string figi = 1 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getFigi()
    {
        @trigger_error('figi is deprecated.', E_USER_DEPRECATED);
        return $this->figi;
    }

    /**
     *Deprecated FIGI-идентификатор инструмента. Используйте `instrument_id`.
     *
     * Generated from protobuf field <code>string figi = 1 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setFigi($var)
    {
        @trigger_error('figi is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->figi = $var;

        return $this;
    }

    /**
     *Глубина стакана.
     *
     * Generated from protobuf field <code>int32 depth = 2;</code>
     * @return int
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     *Глубина стакана.
     *
     * Generated from protobuf field <code>int32 depth = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDepth($var)
    {
        GPBUtil::checkInt32($var);
        $this->depth = $var;

        return $this;
    }

    /**
     *Идентификатор инструмента. Принимает значение `figi` или `instrument_uid`.
     *
     * Generated from protobuf field <code>string instrument_id = 3;</code>
     * @return string
     */
    public function getInstrumentId()
    {
        return $this->instrument_id;
    }

    /**
     *Идентификатор инструмента. Принимает значение `figi` или `instrument_uid`.
     *
     * Generated from protobuf field <code>string instrument_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setInstrumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instrument_id = $var;

        return $this;
    }

    /**
     *Тип стакана.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderBookType order_book_type = 4;</code>
     * @return int
     */
    public function getOrderBookType()
    {
        return $this->order_book_type;
    }

    /**
     *Тип стакана.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.OrderBookType order_book_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setOrderBookType($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\OrderBookType::class);
        $this->order_book_type = $var;

        return $this;
    }

}


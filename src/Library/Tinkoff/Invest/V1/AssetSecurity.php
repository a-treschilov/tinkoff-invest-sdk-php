<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: instruments.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *Ценная бумага.
 *
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.AssetSecurity</code>
 */
class AssetSecurity extends \Google\Protobuf\Internal\Message
{
    /**
     *ISIN-идентификатор ценной бумаги.
     *
     * Generated from protobuf field <code>string isin = 1;</code>
     */
    protected $isin = '';
    /**
     *Тип ценной бумаги.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     */
    protected $type = '';
    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.InstrumentType instrument_kind = 10;</code>
     */
    protected $instrument_kind = 0;
    protected $ext;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $isin
     *          ISIN-идентификатор ценной бумаги.
     *     @type string $type
     *          Тип ценной бумаги.
     *     @type int $instrument_kind
     *          Тип инструмента.
     *     @type \Tinkoff\Invest\V1\AssetShare $share
     *          Акция. Заполняется только для акций (тип актива asset.type = "ASSET_TYPE_SECURITY" и security.type = share).
     *     @type \Tinkoff\Invest\V1\AssetBond $bond
     *          Облигация. Заполняется только для облигаций (тип актива asset.type = "ASSET_TYPE_SECURITY" и security.type = bond).
     *     @type \Tinkoff\Invest\V1\AssetStructuredProduct $sp
     *          Структурная нота. Заполняется только для структурных продуктов (тип актива asset.type = "ASSET_TYPE_SECURITY" и security.type = sp).
     *     @type \Tinkoff\Invest\V1\AssetEtf $etf
     *           Фонд. Заполняется только для фондов (тип актива asset.type = "ASSET_TYPE_SECURITY" и security.type = etf).
     *     @type \Tinkoff\Invest\V1\AssetClearingCertificate $clearing_certificate
     *           Клиринговый сертификат участия. Заполняется только для клиринговых сертификатов (тип актива asset.type = "ASSET_TYPE_SECURITY" и security.type = clearing_certificate).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Instruments::initOnce();
        parent::__construct($data);
    }

    /**
     *ISIN-идентификатор ценной бумаги.
     *
     * Generated from protobuf field <code>string isin = 1;</code>
     * @return string
     */
    public function getIsin()
    {
        return $this->isin;
    }

    /**
     *ISIN-идентификатор ценной бумаги.
     *
     * Generated from protobuf field <code>string isin = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setIsin($var)
    {
        GPBUtil::checkString($var, True);
        $this->isin = $var;

        return $this;
    }

    /**
     *Тип ценной бумаги.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *Тип ценной бумаги.
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.InstrumentType instrument_kind = 10;</code>
     * @return int
     */
    public function getInstrumentKind()
    {
        return $this->instrument_kind;
    }

    /**
     *Тип инструмента.
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.InstrumentType instrument_kind = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setInstrumentKind($var)
    {
        GPBUtil::checkEnum($var, \Tinkoff\Invest\V1\InstrumentType::class);
        $this->instrument_kind = $var;

        return $this;
    }

    /**
     *Акция. Заполняется только для акций (тип актива asset.type = "ASSET_TYPE_SECURITY" и security.type = share).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AssetShare share = 3;</code>
     * @return \Tinkoff\Invest\V1\AssetShare|null
     */
    public function getShare()
    {
        return $this->readOneof(3);
    }

    public function hasShare()
    {
        return $this->hasOneof(3);
    }

    /**
     *Акция. Заполняется только для акций (тип актива asset.type = "ASSET_TYPE_SECURITY" и security.type = share).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AssetShare share = 3;</code>
     * @param \Tinkoff\Invest\V1\AssetShare $var
     * @return $this
     */
    public function setShare($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\AssetShare::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     *Облигация. Заполняется только для облигаций (тип актива asset.type = "ASSET_TYPE_SECURITY" и security.type = bond).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AssetBond bond = 4;</code>
     * @return \Tinkoff\Invest\V1\AssetBond|null
     */
    public function getBond()
    {
        return $this->readOneof(4);
    }

    public function hasBond()
    {
        return $this->hasOneof(4);
    }

    /**
     *Облигация. Заполняется только для облигаций (тип актива asset.type = "ASSET_TYPE_SECURITY" и security.type = bond).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AssetBond bond = 4;</code>
     * @param \Tinkoff\Invest\V1\AssetBond $var
     * @return $this
     */
    public function setBond($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\AssetBond::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     *Структурная нота. Заполняется только для структурных продуктов (тип актива asset.type = "ASSET_TYPE_SECURITY" и security.type = sp).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AssetStructuredProduct sp = 5;</code>
     * @return \Tinkoff\Invest\V1\AssetStructuredProduct|null
     */
    public function getSp()
    {
        return $this->readOneof(5);
    }

    public function hasSp()
    {
        return $this->hasOneof(5);
    }

    /**
     *Структурная нота. Заполняется только для структурных продуктов (тип актива asset.type = "ASSET_TYPE_SECURITY" и security.type = sp).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AssetStructuredProduct sp = 5;</code>
     * @param \Tinkoff\Invest\V1\AssetStructuredProduct $var
     * @return $this
     */
    public function setSp($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\AssetStructuredProduct::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Фонд. Заполняется только для фондов (тип актива asset.type = "ASSET_TYPE_SECURITY" и security.type = etf).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AssetEtf etf = 6;</code>
     * @return \Tinkoff\Invest\V1\AssetEtf|null
     */
    public function getEtf()
    {
        return $this->readOneof(6);
    }

    public function hasEtf()
    {
        return $this->hasOneof(6);
    }

    /**
     * Фонд. Заполняется только для фондов (тип актива asset.type = "ASSET_TYPE_SECURITY" и security.type = etf).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AssetEtf etf = 6;</code>
     * @param \Tinkoff\Invest\V1\AssetEtf $var
     * @return $this
     */
    public function setEtf($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\AssetEtf::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Клиринговый сертификат участия. Заполняется только для клиринговых сертификатов (тип актива asset.type = "ASSET_TYPE_SECURITY" и security.type = clearing_certificate).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AssetClearingCertificate clearing_certificate = 7;</code>
     * @return \Tinkoff\Invest\V1\AssetClearingCertificate|null
     */
    public function getClearingCertificate()
    {
        return $this->readOneof(7);
    }

    public function hasClearingCertificate()
    {
        return $this->hasOneof(7);
    }

    /**
     * Клиринговый сертификат участия. Заполняется только для клиринговых сертификатов (тип актива asset.type = "ASSET_TYPE_SECURITY" и security.type = clearing_certificate).
     *
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.AssetClearingCertificate clearing_certificate = 7;</code>
     * @param \Tinkoff\Invest\V1\AssetClearingCertificate $var
     * @return $this
     */
    public function setClearingCertificate($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\AssetClearingCertificate::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getExt()
    {
        return $this->whichOneof("ext");
    }

}


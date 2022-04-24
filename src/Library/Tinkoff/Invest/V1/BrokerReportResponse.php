<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: operations.proto

namespace Tinkoff\Invest\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tinkoff.public.invest.api.contract.v1.BrokerReportResponse</code>
 */
class BrokerReportResponse extends \Google\Protobuf\Internal\Message
{
    protected $payload;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Tinkoff\Invest\V1\GenerateBrokerReportResponse $generate_broker_report_response
     *     @type \Tinkoff\Invest\V1\GetBrokerReportResponse $get_broker_report_response
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.GenerateBrokerReportResponse generate_broker_report_response = 1;</code>
     * @return \Tinkoff\Invest\V1\GenerateBrokerReportResponse
     */
    public function getGenerateBrokerReportResponse()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.GenerateBrokerReportResponse generate_broker_report_response = 1;</code>
     * @param \Tinkoff\Invest\V1\GenerateBrokerReportResponse $var
     * @return $this
     */
    public function setGenerateBrokerReportResponse($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\GenerateBrokerReportResponse::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.GetBrokerReportResponse get_broker_report_response = 2;</code>
     * @return \Tinkoff\Invest\V1\GetBrokerReportResponse
     */
    public function getGetBrokerReportResponse()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.tinkoff.public.invest.api.contract.v1.GetBrokerReportResponse get_broker_report_response = 2;</code>
     * @param \Tinkoff\Invest\V1\GetBrokerReportResponse $var
     * @return $this
     */
    public function setGetBrokerReportResponse($var)
    {
        GPBUtil::checkMessage($var, \Tinkoff\Invest\V1\GetBrokerReportResponse::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->whichOneof("payload");
    }

}


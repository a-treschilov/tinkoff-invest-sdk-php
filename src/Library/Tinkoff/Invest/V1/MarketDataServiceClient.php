<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Tinkoff\Invest\V1;

/**
 */
class MarketDataServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Метод запроса исторических свечей по инструменту.
     * @param \Tinkoff\Invest\V1\GetCandlesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCandles(\Tinkoff\Invest\V1\GetCandlesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/tinkoff.public.invest.api.contract.v1.MarketDataService/GetCandles',
        $argument,
        ['\Tinkoff\Invest\V1\GetCandlesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Метод запроса последних цен по инструментам.
     * @param \Tinkoff\Invest\V1\GetLastPricesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLastPrices(\Tinkoff\Invest\V1\GetLastPricesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/tinkoff.public.invest.api.contract.v1.MarketDataService/GetLastPrices',
        $argument,
        ['\Tinkoff\Invest\V1\GetLastPricesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Метод получения стакана по инструменту.
     * @param \Tinkoff\Invest\V1\GetOrderBookRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetOrderBook(\Tinkoff\Invest\V1\GetOrderBookRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/tinkoff.public.invest.api.contract.v1.MarketDataService/GetOrderBook',
        $argument,
        ['\Tinkoff\Invest\V1\GetOrderBookResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Метод запроса статуса торгов по инструментам.
     * @param \Tinkoff\Invest\V1\GetTradingStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTradingStatus(\Tinkoff\Invest\V1\GetTradingStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/tinkoff.public.invest.api.contract.v1.MarketDataService/GetTradingStatus',
        $argument,
        ['\Tinkoff\Invest\V1\GetTradingStatusResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Метод запроса последних обезличенных сделок по инструменту.
     * @param \Tinkoff\Invest\V1\GetLastTradesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLastTrades(\Tinkoff\Invest\V1\GetLastTradesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/tinkoff.public.invest.api.contract.v1.MarketDataService/GetLastTrades',
        $argument,
        ['\Tinkoff\Invest\V1\GetLastTradesResponse', 'decode'],
        $metadata, $options);
    }

}

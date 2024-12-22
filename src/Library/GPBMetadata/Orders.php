<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: orders.proto

namespace GPBMetadata;

class Orders
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�`
orders.proto%tinkoff.public.invest.api.contract.v1google/protobuf/timestamp.protogoogle/api/field_behavior.proto"U
TradesStreamRequest
accounts (	
ping_delay_ms (H �B
_ping_delay_ms"�
TradesStreamResponseJ
order_trades (22.tinkoff.public.invest.api.contract.v1.OrderTradesH ;
ping (2+.tinkoff.public.invest.api.contract.v1.PingH S
subscription (2;.tinkoff.public.invest.api.contract.v1.SubscriptionResponseH B	
payload"�
OrderTrades
order_id (	.

created_at (2.google.protobuf.TimestampH
	direction (25.tinkoff.public.invest.api.contract.v1.OrderDirection
figi (	A
trades (21.tinkoff.public.invest.api.contract.v1.OrderTrade

account_id (	
instrument_uid (	"�

OrderTrade-
	date_time (2.google.protobuf.Timestamp?
price (20.tinkoff.public.invest.api.contract.v1.Quotation
quantity (
trade_id (	"�
PostOrderRequest
figi (	BH �
quantity (B�AD
price (20.tinkoff.public.invest.api.contract.v1.QuotationH�M
	direction (25.tinkoff.public.invest.api.contract.v1.OrderDirectionB�A

account_id (	B�AI

order_type (20.tinkoff.public.invest.api.contract.v1.OrderTypeB�A
order_id (	B�A
instrument_id (	M
time_in_force	 (26.tinkoff.public.invest.api.contract.v1.TimeInForceTypeD

price_type
 (20.tinkoff.public.invest.api.contract.v1.PriceTypeB
_figiB
_price"�
PostOrderResponse
order_id (	b
execution_report_status (2A.tinkoff.public.invest.api.contract.v1.OrderExecutionReportStatus
lots_requested (
lots_executed (N
initial_order_price (21.tinkoff.public.invest.api.contract.v1.MoneyValueO
executed_order_price (21.tinkoff.public.invest.api.contract.v1.MoneyValueM
total_order_amount (21.tinkoff.public.invest.api.contract.v1.MoneyValueM
initial_commission (21.tinkoff.public.invest.api.contract.v1.MoneyValueN
executed_commission	 (21.tinkoff.public.invest.api.contract.v1.MoneyValueD
	aci_value
 (21.tinkoff.public.invest.api.contract.v1.MoneyValue
figi (	H
	direction (25.tinkoff.public.invest.api.contract.v1.OrderDirectionQ
initial_security_price (21.tinkoff.public.invest.api.contract.v1.MoneyValueD

order_type (20.tinkoff.public.invest.api.contract.v1.OrderType
message (	P
initial_order_price_pt (20.tinkoff.public.invest.api.contract.v1.Quotation
instrument_uid (	
order_request_id (	S
response_metadata� (27.tinkoff.public.invest.api.contract.v1.ResponseMetadata"�
PostOrderAsyncRequest
instrument_id (	B�A
quantity (B�AD
price (20.tinkoff.public.invest.api.contract.v1.QuotationH �M
	direction (25.tinkoff.public.invest.api.contract.v1.OrderDirectionB�A

account_id (	B�AI

order_type (20.tinkoff.public.invest.api.contract.v1.OrderTypeB�A
order_id (	B�AR
time_in_force (26.tinkoff.public.invest.api.contract.v1.TimeInForceTypeH�I

price_type	 (20.tinkoff.public.invest.api.contract.v1.PriceTypeH�B
_priceB
_time_in_forceB
_price_type"�
PostOrderAsyncResponse
order_request_id (	B�Ag
execution_report_status (2A.tinkoff.public.invest.api.contract.v1.OrderExecutionReportStatusB�A
trade_intent_id (	H �B
_trade_intent_id"�
CancelOrderRequest

account_id (	B�A
order_id (	B�AN
order_id_type (22.tinkoff.public.invest.api.contract.v1.OrderIdTypeH �B
_order_id_type"�
CancelOrderResponse(
time (2.google.protobuf.TimestampS
response_metadata� (27.tinkoff.public.invest.api.contract.v1.ResponseMetadata"�
GetOrderStateRequest

account_id (	B�A
order_id (	B�AD

price_type (20.tinkoff.public.invest.api.contract.v1.PriceTypeN
order_id_type (22.tinkoff.public.invest.api.contract.v1.OrderIdTypeH �B
_order_id_type"+
GetOrdersRequest

account_id (	B�A"V
GetOrdersResponseA
orders (21.tinkoff.public.invest.api.contract.v1.OrderState"�	

OrderState
order_id (	b
execution_report_status (2A.tinkoff.public.invest.api.contract.v1.OrderExecutionReportStatus
lots_requested (
lots_executed (N
initial_order_price (21.tinkoff.public.invest.api.contract.v1.MoneyValueO
executed_order_price (21.tinkoff.public.invest.api.contract.v1.MoneyValueM
total_order_amount (21.tinkoff.public.invest.api.contract.v1.MoneyValueQ
average_position_price (21.tinkoff.public.invest.api.contract.v1.MoneyValueM
initial_commission	 (21.tinkoff.public.invest.api.contract.v1.MoneyValueN
executed_commission
 (21.tinkoff.public.invest.api.contract.v1.MoneyValue
figi (	H
	direction (25.tinkoff.public.invest.api.contract.v1.OrderDirectionQ
initial_security_price (21.tinkoff.public.invest.api.contract.v1.MoneyValueA
stages (21.tinkoff.public.invest.api.contract.v1.OrderStageM
service_commission (21.tinkoff.public.invest.api.contract.v1.MoneyValue
currency (	D

order_type (20.tinkoff.public.invest.api.contract.v1.OrderType.

order_date (2.google.protobuf.Timestamp
instrument_uid (	
order_request_id (	"�

OrderStage@
price (21.tinkoff.public.invest.api.contract.v1.MoneyValue
quantity (
trade_id (	2
execution_time (2.google.protobuf.Timestamp"�
ReplaceOrderRequest

account_id (	B�A
order_id (	B�A
idempotency_key (	B�A
quantity (B�AD
price (20.tinkoff.public.invest.api.contract.v1.QuotationH �I

price_type (20.tinkoff.public.invest.api.contract.v1.PriceTypeH�B
_priceB
_price_type"�
GetMaxLotsRequest

account_id (	B�A
instrument_id (	B�AD
price (20.tinkoff.public.invest.api.contract.v1.QuotationH �B
_price"�
GetMaxLotsResponse
currency (	[

buy_limits (2G.tinkoff.public.invest.api.contract.v1.GetMaxLotsResponse.BuyLimitsViewb
buy_margin_limits (2G.tinkoff.public.invest.api.contract.v1.GetMaxLotsResponse.BuyLimitsView]
sell_limits (2H.tinkoff.public.invest.api.contract.v1.GetMaxLotsResponse.SellLimitsViewd
sell_margin_limits (2H.tinkoff.public.invest.api.contract.v1.GetMaxLotsResponse.SellLimitsView�
BuyLimitsViewJ
buy_money_amount (20.tinkoff.public.invest.api.contract.v1.Quotation
buy_max_lots (
buy_max_market_lots (\'
SellLimitsView
sell_max_lots ("�
GetOrderPriceRequest

account_id (	
instrument_id (	?
price (20.tinkoff.public.invest.api.contract.v1.QuotationH
	direction (25.tinkoff.public.invest.api.contract.v1.OrderDirection
quantity ("�
GetOrderPriceResponseM
total_order_amount (21.tinkoff.public.invest.api.contract.v1.MoneyValueO
initial_order_amount (21.tinkoff.public.invest.api.contract.v1.MoneyValue
lots_requested (N
executed_commission (21.tinkoff.public.invest.api.contract.v1.MoneyValueR
executed_commission_rub (21.tinkoff.public.invest.api.contract.v1.MoneyValueM
service_commission	 (21.tinkoff.public.invest.api.contract.v1.MoneyValueJ
deal_commission
 (21.tinkoff.public.invest.api.contract.v1.MoneyValue\\

extra_bond (2F.tinkoff.public.invest.api.contract.v1.GetOrderPriceResponse.ExtraBondH `
extra_future (2H.tinkoff.public.invest.api.contract.v1.GetOrderPriceResponse.ExtraFutureH �
	ExtraBondD
	aci_value (21.tinkoff.public.invest.api.contract.v1.MoneyValueQ
nominal_conversion_rate (20.tinkoff.public.invest.api.contract.v1.QuotationX
ExtraFutureI
initial_margin (21.tinkoff.public.invest.api.contract.v1.MoneyValueB
instrument_extra"Y
OrderStateStreamRequest
accounts (	
ping_delay_ms (H �B
_ping_delay_ms"�
SubscriptionResponse
tracking_id (	O
status (2?.tinkoff.public.invest.api.contract.v1.ResultSubscriptionStatus
	stream_id (	
accounts (	F
error (22.tinkoff.public.invest.api.contract.v1.ErrorDetailH �B
_error"�
OrderStateStreamResponsea
order_state (2J.tinkoff.public.invest.api.contract.v1.OrderStateStreamResponse.OrderStateH ;
ping (2+.tinkoff.public.invest.api.contract.v1.PingH S
subscription (2;.tinkoff.public.invest.api.contract.v1.SubscriptionResponseH �


OrderState
order_id (	
order_request_id (	H �
client_code (	.

created_at (2.google.protobuf.Timestampb
execution_report_status (2A.tinkoff.public.invest.api.contract.v1.OrderExecutionReportStatusi
status_info (2O.tinkoff.public.invest.api.contract.v1.OrderStateStreamResponse.StatusCauseInfoH�
ticker (	

class_code (	
lot_size	 (H
	direction
 (25.tinkoff.public.invest.api.contract.v1.OrderDirectionM
time_in_force (26.tinkoff.public.invest.api.contract.v1.TimeInForceTypeD

order_type (20.tinkoff.public.invest.api.contract.v1.OrderType

account_id (	N
initial_order_price (21.tinkoff.public.invest.api.contract.v1.MoneyValueF
order_price (21.tinkoff.public.invest.api.contract.v1.MoneyValueF
amount (21.tinkoff.public.invest.api.contract.v1.MoneyValueH�O
executed_order_price (21.tinkoff.public.invest.api.contract.v1.MoneyValue
currency (	
lots_requested (
lots_executed (
	lots_left (
lots_cancelled (_
marker (2J.tinkoff.public.invest.api.contract.v1.OrderStateStreamResponse.MarkerTypeH�A
trades! (21.tinkoff.public.invest.api.contract.v1.OrderTrade3
completion_time# (2.google.protobuf.Timestamp
exchange$ (	
instrument_uid) (	B
_order_request_idB
_status_infoB	
_amountB	
_marker"�

MarkerType
MARKER_UNKNOWN 
MARKER_BROKER
MARKER_CHAT
MARKER_PAPER
MARKER_MARGIN
MARKER_TKBNM
MARKER_SHORT
MARKER_SPECMM
	MARKER_PO"�
StatusCauseInfo
CAUSE_UNSPECIFIED 
CAUSE_CANCELLED_BY_CLIENT
CAUSE_CANCELLED_BY_EXCHANGE\'
#CAUSE_CANCELLED_NOT_ENOUGH_POSITION#
CAUSE_CANCELLED_BY_CLIENT_BLOCK
CAUSE_REJECTED_BY_BROKER
CAUSE_REJECTED_BY_EXCHANGE
CAUSE_CANCELLED_BY_BROKERB	
payload*d
OrderDirection
ORDER_DIRECTION_UNSPECIFIED 
ORDER_DIRECTION_BUY
ORDER_DIRECTION_SELL*n
	OrderType
ORDER_TYPE_UNSPECIFIED 
ORDER_TYPE_LIMIT
ORDER_TYPE_MARKET
ORDER_TYPE_BESTPRICE*�
OrderExecutionReportStatus\'
#EXECUTION_REPORT_STATUS_UNSPECIFIED  
EXECUTION_REPORT_STATUS_FILL$
 EXECUTION_REPORT_STATUS_REJECTED%
!EXECUTION_REPORT_STATUS_CANCELLED
EXECUTION_REPORT_STATUS_NEW)
%EXECUTION_REPORT_STATUS_PARTIALLYFILL*�
TimeInForceType
TIME_IN_FORCE_UNSPECIFIED 
TIME_IN_FORCE_DAY
TIME_IN_FORCE_FILL_AND_KILL
TIME_IN_FORCE_FILL_OR_KILL*c
OrderIdType
ORDER_ID_TYPE_UNSPECIFIED 
ORDER_ID_TYPE_EXCHANGE
ORDER_ID_TYPE_REQUEST2�
OrdersStreamService�
TradesStream:.tinkoff.public.invest.api.contract.v1.TradesStreamRequest;.tinkoff.public.invest.api.contract.v1.TradesStreamResponse0�
OrderStateStream>.tinkoff.public.invest.api.contract.v1.OrderStateStreamRequest?.tinkoff.public.invest.api.contract.v1.OrderStateStreamResponse02�
OrdersService~
	PostOrder7.tinkoff.public.invest.api.contract.v1.PostOrderRequest8.tinkoff.public.invest.api.contract.v1.PostOrderResponse�
PostOrderAsync<.tinkoff.public.invest.api.contract.v1.PostOrderAsyncRequest=.tinkoff.public.invest.api.contract.v1.PostOrderAsyncResponse�
CancelOrder9.tinkoff.public.invest.api.contract.v1.CancelOrderRequest:.tinkoff.public.invest.api.contract.v1.CancelOrderResponse
GetOrderState;.tinkoff.public.invest.api.contract.v1.GetOrderStateRequest1.tinkoff.public.invest.api.contract.v1.OrderState~
	GetOrders7.tinkoff.public.invest.api.contract.v1.GetOrdersRequest8.tinkoff.public.invest.api.contract.v1.GetOrdersResponse�
ReplaceOrder:.tinkoff.public.invest.api.contract.v1.ReplaceOrderRequest8.tinkoff.public.invest.api.contract.v1.PostOrderResponse�

GetMaxLots8.tinkoff.public.invest.api.contract.v1.GetMaxLotsRequest9.tinkoff.public.invest.api.contract.v1.GetMaxLotsResponse�
GetOrderPrice;.tinkoff.public.invest.api.contract.v1.GetOrderPriceRequest<.tinkoff.public.invest.api.contract.v1.GetOrderPriceResponseBa
ru.tinkoff.piapi.contract.v1PZ./;investapi�TIAPI�Tinkoff.InvestApi.V1�Tinkoff\\Invest\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}


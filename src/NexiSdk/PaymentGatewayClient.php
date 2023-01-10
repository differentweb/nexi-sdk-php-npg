<?php

namespace NexiSdk;

use Exception;
use NexiSdk\configuration\IConfiguration;
use NexiSdk\model\CancelRequest;
use NexiSdk\model\CancelResponse;
use NexiSdk\model\CaptureRequest;
use NexiSdk\model\CaptureResponse;
use NexiSdk\model\CardVerificationRequest;
use NexiSdk\model\CardVerificationResponse;
use NexiSdk\model\ChannelType;
use NexiSdk\model\ContractsByCustomerResponse;
use NexiSdk\model\CreateHostedFieldOrderRequest;
use NexiSdk\model\CreateHostedFieldOrderResponse;
use NexiSdk\model\CreateHostedOrderRequest;
use NexiSdk\model\CreateHostedOrderResponse;
use NexiSdk\model\DelayChargeRequest;
use NexiSdk\model\DelayChargeResponse;
use NexiSdk\model\IncrementalRequest;
use NexiSdk\model\IncrementalResponse;
use NexiSdk\model\MITRequest;
use NexiSdk\model\MITResponse;
use NexiSdk\model\MOTORequest;
use NexiSdk\model\MOTOResponse;
use NexiSdk\model\NoShowRequest;
use NexiSdk\model\NoShowResponse;
use NexiSdk\model\Operation;
use NexiSdk\model\OperationList;
use NexiSdk\model\OperationType;
use NexiSdk\model\Order;
use NexiSdk\model\OrderDetails;
use NexiSdk\model\Orders;
use NexiSdk\model\PayByLinkRequest;
use NexiSdk\model\PayByLinkResponse;
use NexiSdk\model\PaymentMethodList;
use NexiSdk\model\RefundRequest;
use NexiSdk\model\RefundResponse;
use NexiSdk\model\TechSearchResponse;
use NexiSdk\model\TecRequest;
use NexiSdk\model\TecResponse;
use NexiSdk\model\ThreeDSInitRequest;
use NexiSdk\model\ThreeDSInitResponse;
use NexiSdk\model\ThreeDSPaymentRequest;
use NexiSdk\model\ThreeDSPaymentResponse;
use NexiSdk\model\ThreeDSValidationRequest;
use NexiSdk\model\ThreeDSValidationResponse;

/**
 * Class PaymentGatewayClient
 *
 * @category Sdk
 * @package  NexiSdk
 * @author   iPlus Service s.r.l. <assistenza@iplusservice.it>
 * @license  https://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://www.iplusservice.it
 */
class PaymentGatewayClient
{

    /**
     * Undocumented variable
     *
     * @var IConfiguration
     */
    private $_configuration;
    private $_httpFacade;

    /**
     * Undocumented function
     *
     * @param IConfiguration $configuration configuration for current instance
     */
    public function __construct(
        IConfiguration $configuration
    ) {
        $this->_configuration = $configuration;
        $this->_httpFacade = new HttpClientCurl();
    }

    /**
     * Undocumented function
     *
     * @param string $component
     * @return void
     */
    private function escapeUrlComponent(
        string $component
    ) {
        // TODO compose link with urlescape?
        return $component;
    }

    /**
     * Undocumented function
     *
     * @param Order $order
     * @return void
     */
    private function validateOrderValues(
        Order $order
    ) {
        if ($order->getOrderId() == null || $order->getOrderId() == "") {
            throw new Exception("MissingOrderId()");
        }
        if ($order->getAmount() == null) {
            throw new Exception("MissingAmount()");
        }
        if ($order->getCurrency() == null || $order->getCurrency() == "") {
            throw new Exception("MissingCurrency()");
        }
    }

    /**
     * Undocumented function
     *
     * @param CreateHostedOrderRequest $createHostedOrderRequest test parameter FIXME
     *
     * @return CreateHostedOrderResponse
     */
    public function createOrderForHostedPayment(
        CreateHostedOrderRequest $createHostedOrderRequest
    ): CreateHostedOrderResponse {
        $this->validateOrderValues($createHostedOrderRequest->getOrder());
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/orders/hpp",
            $createHostedOrderRequest
        );
        return CreateHostedOrderResponse::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param CreateHostedFieldOrderRequest $createHostedFieldOrderRequest
     * @return CreateHostedFieldOrderResponse
     */
    public function createOrderForConfigurablePaymentPage(
        CreateHostedFieldOrderRequest $createHostedFieldOrderRequest
    ): CreateHostedFieldOrderResponse {
        $this->validateOrderValues($createHostedFieldOrderRequest->getOrder());
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/orders/build",
            $createHostedFieldOrderRequest
        );
        return CreateHostedFieldOrderResponse::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param integer|null $fromTime
     * @param integer|null $toTime
     * @param integer|null $maxRecords
     * @param string|null $customField
     * @return array
     */
    public function findOrders(
        ?int $fromTime,
        ?int $toTime,
        ?int $maxRecords,
        ?string $customField
    ): array {
        $queryParams = array();
        if ($fromTime != null) {
            // FIXME FORMAT
            $queryParams["fromTime"] = $fromTime;
        }
        if ($toTime != null) {
            // FIXME FORMAT
            $queryParams["toTime"] = $toTime;
        }
        if ($maxRecords != null) {
            $queryParams["maxRecords"] = $maxRecords;
        }
        if ($customField != null) {
            $queryParams["customField"] = $customField;
        }
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/orders",
            $queryParams
        );
        $orders = [];
        foreach (json_decode($result, true) as $oneDecoded) {
            $orders[] = Order::fromJsonDeserializedData($oneDecoded);
        }
        return $orders;
    }

    /**
     * Undocumented function
     *
     * @param integer|null $fromTime
     * @param integer|null $toTime
     * @param ChannelType|null $channelType
     * @param OperationType|null $operationType
     * @param integer|null $maxRecords
     * @param string|null $customField
     * @return OperationList
     */
    public function findOperations(
        ?int $fromTime,
        ?int $toTime,
        ?int $maxRecords,
        ?ChannelType $channelType,
        ?OperationType $operationType,
        ?string $customField
    ): OperationList {
        $queryParams = array();
        if ($fromTime != null) {
            // FIXME FORMAT
            $queryParams["fromTime"] = $fromTime;
        }
        if ($toTime != null) {
            // FIXME FORMAT
            $queryParams["toTime"] = $toTime;
        }
        if ($channelType != null) {
            $queryParams["channelType"] = $channelType->jsonSerialize();
        }
        if ($operationType != null) {
            $queryParams["operationType"] = $operationType->jsonSerialize();
        }
        if ($maxRecords != null) {
            $queryParams["maxRecords"] = $maxRecords;
        }
        if ($customField != null) {
            $queryParams["customField"] = $customField;
        }
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/operations",
            $queryParams
        );
        return OperationList::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param string $operationId
     * @return Operation
     */
    public function findOperationById(
        string $operationId
    ): Operation {
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/operations/" . $this->escapeUrlComponent($operationId),
            array()
        );
        return Operation::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param string $orderId
     *
     * @return OrderDetails
     */
    public function findOrderById(
        string $orderId
    ): OrderDetails {
        $result = $this->_httpFacade->executeHttpGet(
            $this->_configuration,
            "/orders/" . $this->escapeUrlComponent($orderId),
            array()
        );
        return OrderDetails::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param string $operationId
     * @param RefundRequest $refundRequest
     *
     * @return RefundResponse
     */
    public function refund(
        string $operationId,
        RefundRequest $refundRequest
    ): RefundResponse {
        // TODO: idempotency key
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/operations/" . $this->escapeUrlComponent($operationId) . "/refunds",
            $refundRequest
        );
        return RefundResponse::fromJsonDeserializedData(json_decode($result));
    }

    /**
     * Undocumented function
     *
     * @param string $operationId
     * @param CaptureRequest $captureRequest
     *
     * @return CaptureResponse
     */
    public function capture(
        string $operationId,
        CaptureRequest $captureRequest
    ): CaptureResponse {
        // TODO: idempotency key
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/operations/" . $this->escapeUrlComponent($operationId) . "/captures",
            $captureRequest
        );
        return CaptureResponse::fromJsonDeserializedData(json_decode($result));
    }

    /**
     * Undocumented function
     *
     * @param string $operationId
     * @param CaptureRequest $cancelRequest
     *
     * @return CancelResponse
     */
    public function cancel(
        string $operationId,
        CancelRequest $cancelRequest
    ): CancelResponse {
        // TODO: idempotency key
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/operations/" . $this->escapeUrlComponent($operationId) . "/cancels",
            $cancelRequest
        );
        return CancelResponse::fromJsonDeserializedData(json_decode($result));
    }

    /**
     * Undocumented function
     *
     * @return PaymentMethodList
     */
    public function listSupportedPaymentMethods(): PaymentMethodList
    {
        $result = $this->_httpFacade->executeHttpGet(
            $this->_configuration,
            "/payment_methods",
            array()
        );
        return PaymentMethodList::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param MOTORequest $motoRequest
     *
     * @return MOTOResponse
     */
    public function createOrderForMotoPayment(
        MOTORequest $motoRequest
    ): MOTOResponse {
        $this->validateOrderValues($motoRequest->getOrder());
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/orders/moto",
            $motoRequest
        );
        return MOTOResponse::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param CardVerificationRequest $cardVerificationRequest
     *
     * @return CardVerificationResponse
     */
    public function cardVerification(
        CardVerificationRequest $cardVerificationRequest
    ): CardVerificationResponse {
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/orders/card_verification",
            $cardVerificationRequest
        );
        return CardVerificationResponse::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param MITRequest $mitRequest
     *
     * @return MITResponse
     */
    public function createOrderForMerchantInitiatedTransaction(
        MITRequest $mitRequest
    ): MITResponse {
        $this->validateOrderValues($mitRequest->getOrder());
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/orders/mit",
            $mitRequest
        );
        return MITResponse::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param PayByLinkRequest $payByLinkRequest
     *
     * @return PayByLinkResponse
     */
    public function createOrderForPayByLinkCreatePayment(
        PayByLinkRequest $payByLinkRequest
    ): PayByLinkResponse {
        $this->validateOrderValues($payByLinkRequest->getOrder());
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/orders/paybylink",
            $payByLinkRequest
        );
        return PayByLinkResponse::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param string $linkId
     *
     * @return void
     */
    public function payByLinkCancelPayment(
        string $linkId
    ): void {
        $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/paybylink/" . $this->escapeUrlComponent($linkId) . "/cancels",
            array()
        );
    }

    /**
     * Undocumented function
     *
     * @param string $customerId
     *
     * @return ContractsByCustomerResponse
     */
    public function findRecurringContractsByCustomerId(
        string $customerId
    ): ContractsByCustomerResponse {
        $result = $this->_httpFacade->executeHttpGet(
            $this->_configuration,
            "/contracts/customers/" . $this->escapeUrlComponent($customerId),
            array()
        );
        return ContractsByCustomerResponse::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param string $contractId
     *
     * @return void
     */
    public function disableContract(
        string $contractId
    ): void {
        $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/contracts/" . $this->escapeUrlComponent($contractId) . "/deactivation",
            null
        );
    }

    /**
     * Undocumented function
     *
     * @param ThreeDSInitRequest $threeDsInitRequest
     *
     * @return ThreeDSInitResponse
     */
    public function threeSteps3DSInit(
        ThreeDSInitRequest $threeDSInitRequest
    ): ThreeDSInitResponse {
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/orders/3steps/init",
            $threeDSInitRequest
        );
        return ThreeDSInitResponse::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param ThreeDSValidationRequest $threeDsValidationRequest
     *
     * @return ThreeDSValidationResponse
     */
    public function threeSteps3DSValidation(
        ThreeDSValidationRequest $threeDSValidationRequest
    ): ThreeDSValidationResponse {
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/orders/3steps/validation",
            $threeDSValidationRequest
        );
        return ThreeDSValidationResponse::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param ThreeDSPaymentRequest $threeDsPaymentRequest
     *
     * @return ThreeDSPaymentResponse
     */
    public function threeSteps3DSPayment(
        ThreeDSPaymentRequest $threeDSPaymentRequest
    ): ThreeDSPaymentResponse {
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/orders/3steps/payment",
            $threeDSPaymentRequest
        );
        return ThreeDSPaymentResponse::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param ThreeDSInitRequest $threeDsInitRequest
     *
     * @return ThreeDSInitResponse
     */
    public function twoSteps3DSInit(
        ThreeDSInitRequest $threeDSInitRequest
    ): ThreeDSInitResponse {
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/orders/2steps/init",
            $threeDSInitRequest
        );
        return ThreeDSInitResponse::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param ThreeDSPaymentRequest $threeDsPaymentRequest
     *
     * @return ThreeDSPaymentResponse
     */
    public function twoSteps3DSPayment(
        ThreeDSPaymentRequest $threeDSPaymentRequest
    ): ThreeDSPaymentResponse {
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/orders/2steps/payment",
            $threeDSPaymentRequest
        );
        return ThreeDSPaymentResponse::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param TecRequest $tecRequest
     *
     * @return TecResponse
     */
    public function createTermsAndConditions(
        TecRequest $tecRequest
    ): TecResponse {
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/terms_and_conditions",
            $tecRequest
        );
        return TecResponse::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    public function retrieveTermsAndConditions(): array
    {
        $result = $this->_httpFacade->executeHttpGet(
            $this->_configuration,
            "/terms_and_conditions",
            array()
        );
        $tecs = [];
        foreach (json_decode($result, true) as $oneDecoded) {
            $tecs[] = TecResponse::fromJsonDeserializedData($oneDecoded);
        }
        return $tecs;
    }

    /**
     * Undocumented function
     *
     * @param string $termsAndConditionsId
     *
     * @return TecSearchResponse
     */
    public function retrieveTermsAndConditionsDetails(
        string $termsAndConditionsId
    ): TechSearchResponse {
        $result = $this->_httpFacade->executeHttpGet(
            $this->_configuration,
            "/terms_and_conditions/" . $this->escapeUrlComponent($termsAndConditionsId),
            array()
        );
        return TechSearchResponse::fromJsonDeserializedData(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param string $termsAnsConditionsId
     *
     * @return void
     */
    public function cancelTermsAndConditionsById(
        string $termsAndConditionsId
    ): void {
        $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/terms_and_conditions/" . $this->escapeUrlComponent($termsAndConditionsId) . "/cancels",
            null
        );
    }

    /**
     * Undocumented function
     *
     * @param IncrementalRequest $incrementalRequest
     *
     * @return IncrementalResponse
     */
    public function incremental(
        IncrementalRequest $incrementalRequest
    ): IncrementalResponse {
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/incrementals",
            $incrementalRequest
        );
        return new IncrementalResponse(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param DelayChargeRequest $delayChargeRequest
     *
     * @return DelayChargeResponse
     */
    public function delayCharge(
        DelayChargeRequest $delayChargeRequest
    ): DelayChargeResponse {
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/delay_charges",
            $delayChargeRequest
        );
        return new DelayChargeResponse(json_decode($result, true));
    }

    /**
     * Undocumented function
     *
     * @param NoShowRequest $noShowRequest
     *
     * @return NoShowResponse
     */
    public function noShow(
        NoShowRequest $noShowRequest
    ): NoShowResponse {
        $result = $this->_httpFacade->executeHttpPost(
            $this->_configuration,
            "/no_shows",
            $noShowRequest
        );
        return new NoShowResponse(json_decode($result, true));
    }
}

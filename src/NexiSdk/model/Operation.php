<?php

namespace NexiSdk\model;

class Operation implements \JsonSerializable
{

    private ?string $orderId = null;

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId)
    {
        $this->orderId = $orderId;
    }

    private ?string $operationId = null;

    public function getOperationId()
    {
        return $this->operationId;
    }

    public function setOperationId(string $operationId)
    {
        $this->operationId = $operationId;
    }

    private ?ChannelType $channel = null;

    public function getChannel()
    {
        return $this->channel;
    }

    public function setChannel(ChannelType $channel)
    {
        $this->channel = $channel;
    }

    private ?OperationType $operationType = null;

    public function getOperationType()
    {
        return $this->operationType;
    }

    public function setOperationType(OperationType $operationType)
    {
        $this->operationType = $operationType;
    }

    private ?OperationResult $operationResult = null;

    public function getOperationResult()
    {
        return $this->operationResult;
    }

    public function setOperationResult(OperationResult $operationResult)
    {
        $this->operationResult = $operationResult;
    }

    private ?string $operationTime = null;

    public function getOperationTime()
    {
        return $this->operationTime;
    }

    public function setOperationTime(string $operationTime)
    {
        $this->operationTime = $operationTime;
    }

    private ?PaymentMethodType $paymentMethod = null;

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(PaymentMethodType $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    private ?string $paymentCircuit = null;

    public function getPaymentCircuit()
    {
        return $this->paymentCircuit;
    }

    public function setPaymentCircuit(string $paymentCircuit)
    {
        $this->paymentCircuit = $paymentCircuit;
    }

    private ?string $paymentInstrumentInfo = null;

    public function getPaymentInstrumentInfo()
    {
        return $this->paymentInstrumentInfo;
    }

    public function setPaymentInstrumentInfo(string $paymentInstrumentInfo)
    {
        $this->paymentInstrumentInfo = $paymentInstrumentInfo;
    }

    private ?string $paymentEndToEndId = null;

    public function getPaymentEndToEndId()
    {
        return $this->paymentEndToEndId;
    }

    public function setPaymentEndToEndId(string $paymentEndToEndId)
    {
        $this->paymentEndToEndId = $paymentEndToEndId;
    }

    private ?string $cancelledOperationId = null;

    public function getCancelledOperationId()
    {
        return $this->cancelledOperationId;
    }

    public function setCancelledOperationId(string $cancelledOperationId)
    {
        $this->cancelledOperationId = $cancelledOperationId;
    }

    private ?string $operationAmount = null;

    public function getOperationAmount()
    {
        return $this->operationAmount;
    }

    public function setOperationAmount(string $operationAmount)
    {
        $this->operationAmount = $operationAmount;
    }

    private ?string $operationCurrency = null;

    public function getOperationCurrency()
    {
        return $this->operationCurrency;
    }

    public function setOperationCurrency(string $operationCurrency)
    {
        $this->operationCurrency = $operationCurrency;
    }

    private ?CustomerInfo $customerInfo = null;

    public function getCustomerInfo()
    {
        return $this->customerInfo;
    }

    public function setCustomerInfo(CustomerInfo $customerInfo)
    {
        $this->customerInfo = $customerInfo;
    }

    private ?array $warnings = null;

    public function getWarnings()
    {
        return $this->warnings;
    }

    public function setWarnings(array $warnings)
    {
        $this->warnings = $warnings;
    }

    private ?string $paymentLinkId = null;

    public function getPaymentLinkId()
    {
        return $this->paymentLinkId;
    }

    public function setPaymentLinkId(string $paymentLinkId)
    {
        $this->paymentLinkId = $paymentLinkId;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new Operation();

        if (array_key_exists("orderId", $realdata)) {
            $returnObject->setOrderId($realdata["orderId"]);
        }

        if (array_key_exists("operationId", $realdata)) {
            $returnObject->setOperationId($realdata["operationId"]);
        }

        if (array_key_exists("channel", $realdata)) {
            $returnObject->setChannel(ChannelType::fromJsonDeserializedData($realdata["channel"]));
        }

        if (array_key_exists("operationType", $realdata)) {
            $returnObject->setOperationType(OperationType::fromJsonDeserializedData($realdata["operationType"]));
        }

        if (array_key_exists("operationResult", $realdata)) {
            $returnObject->setOperationResult(OperationResult::fromJsonDeserializedData($realdata["operationResult"]));
        }

        if (array_key_exists("operationTime", $realdata)) {
            $returnObject->setOperationTime($realdata["operationTime"]);
        }

        if (array_key_exists("paymentMethod", $realdata)) {
            $returnObject->setPaymentMethod(PaymentMethodType::fromJsonDeserializedData($realdata["paymentMethod"]));
        }

        if (array_key_exists("paymentCircuit", $realdata)) {
            $returnObject->setPaymentCircuit($realdata["paymentCircuit"]);
        }

        if (array_key_exists("paymentInstrumentInfo", $realdata)) {
            $returnObject->setPaymentInstrumentInfo($realdata["paymentInstrumentInfo"]);
        }

        if (array_key_exists("paymentEndToEndId", $realdata)) {
            $returnObject->setPaymentEndToEndId($realdata["paymentEndToEndId"]);
        }

        if (array_key_exists("cancelledOperationId", $realdata)) {
            $returnObject->setCancelledOperationId($realdata["cancelledOperationId"]);
        }

        if (array_key_exists("operationAmount", $realdata)) {
            $returnObject->setOperationAmount($realdata["operationAmount"]);
        }

        if (array_key_exists("operationCurrency", $realdata)) {
            $returnObject->setOperationCurrency($realdata["operationCurrency"]);
        }

        if (array_key_exists("customerInfo", $realdata)) {
            $returnObject->setCustomerInfo(CustomerInfo::fromJsonDeserializedData($realdata["customerInfo"]));
        }

        if (array_key_exists("warnings", $realdata)) {
            $returnObject->setWarnings($realdata["warnings"]);
        }

        if (array_key_exists("paymentLinkId", $realdata)) {
            $returnObject->setPaymentLinkId($realdata["paymentLinkId"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->orderId !== null) {
            $data["orderId"] = $this->orderId;
        }
        if ($this->operationId !== null) {
            $data["operationId"] = $this->operationId;
        }
        if ($this->channel !== null) {
            $data["channel"] = $this->channel;
        }
        if ($this->operationType !== null) {
            $data["operationType"] = $this->operationType;
        }
        if ($this->operationResult !== null) {
            $data["operationResult"] = $this->operationResult;
        }
        if ($this->operationTime !== null) {
            $data["operationTime"] = $this->operationTime;
        }
        if ($this->paymentMethod !== null) {
            $data["paymentMethod"] = $this->paymentMethod;
        }
        if ($this->paymentCircuit !== null) {
            $data["paymentCircuit"] = $this->paymentCircuit;
        }
        if ($this->paymentInstrumentInfo !== null) {
            $data["paymentInstrumentInfo"] = $this->paymentInstrumentInfo;
        }
        if ($this->paymentEndToEndId !== null) {
            $data["paymentEndToEndId"] = $this->paymentEndToEndId;
        }
        if ($this->cancelledOperationId !== null) {
            $data["cancelledOperationId"] = $this->cancelledOperationId;
        }
        if ($this->operationAmount !== null) {
            $data["operationAmount"] = $this->operationAmount;
        }
        if ($this->operationCurrency !== null) {
            $data["operationCurrency"] = $this->operationCurrency;
        }
        if ($this->customerInfo !== null) {
            $data["customerInfo"] = $this->customerInfo;
        }
        if ($this->warnings !== null) {
            $data["warnings"] = $this->warnings;
        }
        if ($this->paymentLinkId !== null) {
            $data["paymentLinkId"] = $this->paymentLinkId;
        }

        return $data;
    }

}

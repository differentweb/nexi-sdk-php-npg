<?php

namespace NexiSdk\model;

class WebhookNotificationBody implements \JsonSerializable
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

    private ?string $paymentId = null;

    public function getPaymentId()
    {
        return $this->paymentId;
    }

    public function setPaymentId(string $paymentId)
    {
        $this->paymentId = $paymentId;
    }

    private ?string $result = null;

    public function getResult()
    {
        return $this->result;
    }

    public function setResult(string $result)
    {
        $this->result = $result;
    }

    private ?string $paymentMethod = null;

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(string $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
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

    private ?string $orderAmount = null;

    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    public function setOrderAmount(string $orderAmount)
    {
        $this->orderAmount = $orderAmount;
    }

    private ?string $currency = null;

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
    }

    private ?string $customerId = null;

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setCustomerId(string $customerId)
    {
        $this->customerId = $customerId;
    }

    private ?string $description = null;

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    private ?string $customField = null;

    public function getCustomField()
    {
        return $this->customField;
    }

    public function setCustomField(string $customField)
    {
        $this->customField = $customField;
    }

    private ?string $orderTime = null;

    public function getOrderTime()
    {
        return $this->orderTime;
    }

    public function setOrderTime(string $orderTime)
    {
        $this->orderTime = $orderTime;
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

    private ?string $operationType = null;

    public function getOperationType()
    {
        return $this->operationType;
    }

    public function setOperationType(string $operationType)
    {
        $this->operationType = $operationType;
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

    private ?string $operationTime = null;

    public function getOperationTime()
    {
        return $this->operationTime;
    }

    public function setOperationTime(string $operationTime)
    {
        $this->operationTime = $operationTime;
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

    private ?string $eventType = null;

    public function getEventType()
    {
        return $this->eventType;
    }

    public function setEventType(string $eventType)
    {
        $this->eventType = $eventType;
    }

    private ?string $securityToken = null;

    public function getSecurityToken()
    {
        return $this->securityToken;
    }

    public function setSecurityToken(string $securityToken)
    {
        $this->securityToken = $securityToken;
    }

    private ?string $errorCode = null;

    public function getErrorCode()
    {
        return $this->errorCode;
    }

    public function setErrorCode(string $errorCode)
    {
        $this->errorCode = $errorCode;
    }

    private ?string $errorMessage = null;

    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(string $errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    private ?WebhookNotificationAdditionalData $additionalData = null;

    public function getAdditionalData()
    {
        return $this->additionalData;
    }

    public function setAdditionalData(WebhookNotificationAdditionalData $additionalData)
    {
        $this->additionalData = $additionalData;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new WebhookNotificationBody();

        if (array_key_exists("orderId", $realdata)) {
            $returnObject->setOrderId($realdata["orderId"]);
        }

        if (array_key_exists("paymentId", $realdata)) {
            $returnObject->setPaymentId($realdata["paymentId"]);
        }

        if (array_key_exists("result", $realdata)) {
            $returnObject->setResult($realdata["result"]);
        }

        if (array_key_exists("paymentMethod", $realdata)) {
            $returnObject->setPaymentMethod($realdata["paymentMethod"]);
        }

        if (array_key_exists("paymentInstrumentInfo", $realdata)) {
            $returnObject->setPaymentInstrumentInfo($realdata["paymentInstrumentInfo"]);
        }

        if (array_key_exists("orderAmount", $realdata)) {
            $returnObject->setOrderAmount($realdata["orderAmount"]);
        }

        if (array_key_exists("currency", $realdata)) {
            $returnObject->setCurrency($realdata["currency"]);
        }

        if (array_key_exists("customerId", $realdata)) {
            $returnObject->setCustomerId($realdata["customerId"]);
        }

        if (array_key_exists("description", $realdata)) {
            $returnObject->setDescription($realdata["description"]);
        }

        if (array_key_exists("customField", $realdata)) {
            $returnObject->setCustomField($realdata["customField"]);
        }

        if (array_key_exists("orderTime", $realdata)) {
            $returnObject->setOrderTime($realdata["orderTime"]);
        }

        if (array_key_exists("operationId", $realdata)) {
            $returnObject->setOperationId($realdata["operationId"]);
        }

        if (array_key_exists("operationType", $realdata)) {
            $returnObject->setOperationType($realdata["operationType"]);
        }

        if (array_key_exists("cancelledOperationId", $realdata)) {
            $returnObject->setCancelledOperationId($realdata["cancelledOperationId"]);
        }

        if (array_key_exists("operationTime", $realdata)) {
            $returnObject->setOperationTime($realdata["operationTime"]);
        }

        if (array_key_exists("operationAmount", $realdata)) {
            $returnObject->setOperationAmount($realdata["operationAmount"]);
        }

        if (array_key_exists("eventType", $realdata)) {
            $returnObject->setEventType($realdata["eventType"]);
        }

        if (array_key_exists("securityToken", $realdata)) {
            $returnObject->setSecurityToken($realdata["securityToken"]);
        }

        if (array_key_exists("errorCode", $realdata)) {
            $returnObject->setErrorCode($realdata["errorCode"]);
        }

        if (array_key_exists("errorMessage", $realdata)) {
            $returnObject->setErrorMessage($realdata["errorMessage"]);
        }

        if (array_key_exists("additionalData", $realdata)) {
            $returnObject->setAdditionalData(WebhookNotificationAdditionalData::fromJsonDeserializedData($realdata["additionalData"]));
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
        if ($this->paymentId !== null) {
            $data["paymentId"] = $this->paymentId;
        }
        if ($this->result !== null) {
            $data["result"] = $this->result;
        }
        if ($this->paymentMethod !== null) {
            $data["paymentMethod"] = $this->paymentMethod;
        }
        if ($this->paymentInstrumentInfo !== null) {
            $data["paymentInstrumentInfo"] = $this->paymentInstrumentInfo;
        }
        if ($this->orderAmount !== null) {
            $data["orderAmount"] = $this->orderAmount;
        }
        if ($this->currency !== null) {
            $data["currency"] = $this->currency;
        }
        if ($this->customerId !== null) {
            $data["customerId"] = $this->customerId;
        }
        if ($this->description !== null) {
            $data["description"] = $this->description;
        }
        if ($this->customField !== null) {
            $data["customField"] = $this->customField;
        }
        if ($this->orderTime !== null) {
            $data["orderTime"] = $this->orderTime;
        }
        if ($this->operationId !== null) {
            $data["operationId"] = $this->operationId;
        }
        if ($this->operationType !== null) {
            $data["operationType"] = $this->operationType;
        }
        if ($this->cancelledOperationId !== null) {
            $data["cancelledOperationId"] = $this->cancelledOperationId;
        }
        if ($this->operationTime !== null) {
            $data["operationTime"] = $this->operationTime;
        }
        if ($this->operationAmount !== null) {
            $data["operationAmount"] = $this->operationAmount;
        }
        if ($this->eventType !== null) {
            $data["eventType"] = $this->eventType;
        }
        if ($this->securityToken !== null) {
            $data["securityToken"] = $this->securityToken;
        }
        if ($this->errorCode !== null) {
            $data["errorCode"] = $this->errorCode;
        }
        if ($this->errorMessage !== null) {
            $data["errorMessage"] = $this->errorMessage;
        }
        if ($this->additionalData !== null) {
            $data["additionalData"] = $this->additionalData;
        }

        return $data;
    }

}

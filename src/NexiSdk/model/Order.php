<?php

namespace NexiSdk\model;

class Order implements \JsonSerializable
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

    private ?int $amount = null;

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount(int $amount)
    {
        $this->amount = $amount;
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

    private ?CustomerInfo $customerInfo = null;

    public function getCustomerInfo()
    {
        return $this->customerInfo;
    }

    public function setCustomerInfo(CustomerInfo $customerInfo)
    {
        $this->customerInfo = $customerInfo;
    }

    private ?array $transactionSummary = null;

    public function getTransactionSummary()
    {
        return $this->transactionSummary;
    }

    public function setTransactionSummary(array $transactionSummary)
    {
        $this->transactionSummary = $transactionSummary;
    }

    private ?array $installments = null;

    public function getInstallments()
    {
        return $this->installments;
    }

    public function setInstallments(array $installments)
    {
        $this->installments = $installments;
    }

    private ?array $termsAndConditionsIds = null;

    public function getTermsAndConditionsIds()
    {
        return $this->termsAndConditionsIds;
    }

    public function setTermsAndConditionsIds(array $termsAndConditionsIds)
    {
        $this->termsAndConditionsIds = $termsAndConditionsIds;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new Order();

        if (array_key_exists("orderId", $realdata)) {
            $returnObject->setOrderId($realdata["orderId"]);
        }

        if (array_key_exists("amount", $realdata)) {
            $returnObject->setAmount($realdata["amount"]);
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

        if (array_key_exists("customerInfo", $realdata)) {
            $returnObject->setCustomerInfo(CustomerInfo::fromJsonDeserializedData($realdata["customerInfo"]));
        }

        if (array_key_exists("transactionSummary", $realdata)) {
            $returnObject->setTransactionSummary($realdata["transactionSummary"]);
        }

        if (array_key_exists("installments", $realdata)) {
            $returnObject->setInstallments($realdata["installments"]);
        }

        if (array_key_exists("termsAndConditionsIds", $realdata)) {
            $returnObject->setTermsAndConditionsIds($realdata["termsAndConditionsIds"]);
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
        if ($this->amount !== null) {
            $data["amount"] = $this->amount;
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
        if ($this->customerInfo !== null) {
            $data["customerInfo"] = $this->customerInfo;
        }
        if ($this->transactionSummary !== null) {
            $data["transactionSummary"] = $this->transactionSummary;
        }
        if ($this->installments !== null) {
            $data["installments"] = $this->installments;
        }
        if ($this->termsAndConditionsIds !== null) {
            $data["termsAndConditionsIds"] = $this->termsAndConditionsIds;
        }

        return $data;
    }

}

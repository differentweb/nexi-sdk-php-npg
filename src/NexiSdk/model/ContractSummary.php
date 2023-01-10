<?php

namespace NexiSdk\model;

class ContractSummary implements \JsonSerializable
{

    private ?string $contractId = null;

    public function getContractId()
    {
        return $this->contractId;
    }

    public function setContractId(string $contractId)
    {
        $this->contractId = $contractId;
    }

    private ?RecurringContractType $contractType = null;

    public function getContractType()
    {
        return $this->contractType;
    }

    public function setContractType(RecurringContractType $contractType)
    {
        $this->contractType = $contractType;
    }

    private ?string $contractExpiryDate = null;

    public function getContractExpiryDate()
    {
        return $this->contractExpiryDate;
    }

    public function setContractExpiryDate(string $contractExpiryDate)
    {
        $this->contractExpiryDate = $contractExpiryDate;
    }

    private ?string $contractFrequency = null;

    public function getContractFrequency()
    {
        return $this->contractFrequency;
    }

    public function setContractFrequency(string $contractFrequency)
    {
        $this->contractFrequency = $contractFrequency;
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

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new ContractSummary();

        if (array_key_exists("contractId", $realdata)) {
            $returnObject->setContractId($realdata["contractId"]);
        }

        if (array_key_exists("contractType", $realdata)) {
            $returnObject->setContractType(RecurringContractType::fromJsonDeserializedData($realdata["contractType"]));
        }

        if (array_key_exists("contractExpiryDate", $realdata)) {
            $returnObject->setContractExpiryDate($realdata["contractExpiryDate"]);
        }

        if (array_key_exists("contractFrequency", $realdata)) {
            $returnObject->setContractFrequency($realdata["contractFrequency"]);
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

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->contractId !== null) {
            $data["contractId"] = $this->contractId;
        }
        if ($this->contractType !== null) {
            $data["contractType"] = $this->contractType;
        }
        if ($this->contractExpiryDate !== null) {
            $data["contractExpiryDate"] = $this->contractExpiryDate;
        }
        if ($this->contractFrequency !== null) {
            $data["contractFrequency"] = $this->contractFrequency;
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

        return $data;
    }

}

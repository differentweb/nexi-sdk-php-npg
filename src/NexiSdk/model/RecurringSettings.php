<?php

namespace NexiSdk\model;

class RecurringSettings implements \JsonSerializable
{

    private ?RecurringAction $action = null;

    public function getAction()
    {
        return $this->action;
    }

    public function setAction(RecurringAction $action)
    {
        $this->action = $action;
    }

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

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new RecurringSettings();

        if (array_key_exists("action", $realdata)) {
            $returnObject->setAction(RecurringAction::fromJsonDeserializedData($realdata["action"]));
        }

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

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->action !== null) {
            $data["action"] = $this->action;
        }
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

        return $data;
    }

}

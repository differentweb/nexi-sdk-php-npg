<?php

namespace NexiSdk\model;

class MITRequest implements \JsonSerializable
{

    private ?Order $order = null;

    public function getOrder()
    {
        return $this->order;
    }

    public function setOrder(Order $order)
    {
        $this->order = $order;
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

    private ?CaptureType $captureType = null;

    public function getCaptureType()
    {
        return $this->captureType;
    }

    public function setCaptureType(CaptureType $captureType)
    {
        $this->captureType = $captureType;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new MITRequest();

        if (array_key_exists("order", $realdata)) {
            $returnObject->setOrder(Order::fromJsonDeserializedData($realdata["order"]));
        }

        if (array_key_exists("contractId", $realdata)) {
            $returnObject->setContractId($realdata["contractId"]);
        }

        if (array_key_exists("captureType", $realdata)) {
            $returnObject->setCaptureType(CaptureType::fromJsonDeserializedData($realdata["captureType"]));
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->order !== null) {
            $data["order"] = $this->order;
        }
        if ($this->contractId !== null) {
            $data["contractId"] = $this->contractId;
        }
        if ($this->captureType !== null) {
            $data["captureType"] = $this->captureType;
        }

        return $data;
    }

}

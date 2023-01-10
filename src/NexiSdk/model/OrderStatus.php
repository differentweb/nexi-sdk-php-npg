<?php

namespace NexiSdk\model;

class OrderStatus implements \JsonSerializable
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

    private ?string $authorizedAmount = null;

    public function getAuthorizedAmount()
    {
        return $this->authorizedAmount;
    }

    public function setAuthorizedAmount(string $authorizedAmount)
    {
        $this->authorizedAmount = $authorizedAmount;
    }

    private ?string $capturedAmount = null;

    public function getCapturedAmount()
    {
        return $this->capturedAmount;
    }

    public function setCapturedAmount(string $capturedAmount)
    {
        $this->capturedAmount = $capturedAmount;
    }

    private ?OperationType $lastOperationType = null;

    public function getLastOperationType()
    {
        return $this->lastOperationType;
    }

    public function setLastOperationType(OperationType $lastOperationType)
    {
        $this->lastOperationType = $lastOperationType;
    }

    private ?string $lastOperationTime = null;

    public function getLastOperationTime()
    {
        return $this->lastOperationTime;
    }

    public function setLastOperationTime(string $lastOperationTime)
    {
        $this->lastOperationTime = $lastOperationTime;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new OrderStatus();

        if (array_key_exists("order", $realdata)) {
            $returnObject->setOrder(Order::fromJsonDeserializedData($realdata["order"]));
        }

        if (array_key_exists("authorizedAmount", $realdata)) {
            $returnObject->setAuthorizedAmount($realdata["authorizedAmount"]);
        }

        if (array_key_exists("capturedAmount", $realdata)) {
            $returnObject->setCapturedAmount($realdata["capturedAmount"]);
        }

        if (array_key_exists("lastOperationType", $realdata)) {
            $returnObject->setLastOperationType(OperationType::fromJsonDeserializedData($realdata["lastOperationType"]));
        }

        if (array_key_exists("lastOperationTime", $realdata)) {
            $returnObject->setLastOperationTime($realdata["lastOperationTime"]);
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
        if ($this->authorizedAmount !== null) {
            $data["authorizedAmount"] = $this->authorizedAmount;
        }
        if ($this->capturedAmount !== null) {
            $data["capturedAmount"] = $this->capturedAmount;
        }
        if ($this->lastOperationType !== null) {
            $data["lastOperationType"] = $this->lastOperationType;
        }
        if ($this->lastOperationTime !== null) {
            $data["lastOperationTime"] = $this->lastOperationTime;
        }

        return $data;
    }

}

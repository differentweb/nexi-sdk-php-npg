<?php

namespace NexiSdk\model;

class RefundResponse implements \JsonSerializable
{

    private ?string $operationId = null;

    public function getOperationId()
    {
        return $this->operationId;
    }

    public function setOperationId(string $operationId)
    {
        $this->operationId = $operationId;
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

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new RefundResponse();

        if (array_key_exists("operationId", $realdata)) {
            $returnObject->setOperationId($realdata["operationId"]);
        }

        if (array_key_exists("operationTime", $realdata)) {
            $returnObject->setOperationTime($realdata["operationTime"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->operationId !== null) {
            $data["operationId"] = $this->operationId;
        }
        if ($this->operationTime !== null) {
            $data["operationTime"] = $this->operationTime;
        }

        return $data;
    }

}

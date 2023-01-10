<?php

namespace NexiSdk\model;

class ThreeDSValidationRequest implements \JsonSerializable
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

    private ?string $threeDSAuthResponse = null;

    public function getThreeDSAuthResponse()
    {
        return $this->threeDSAuthResponse;
    }

    public function setThreeDSAuthResponse(string $threeDSAuthResponse)
    {
        $this->threeDSAuthResponse = $threeDSAuthResponse;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new ThreeDSValidationRequest();

        if (array_key_exists("operationId", $realdata)) {
            $returnObject->setOperationId($realdata["operationId"]);
        }

        if (array_key_exists("threeDSAuthResponse", $realdata)) {
            $returnObject->setThreeDSAuthResponse($realdata["threeDSAuthResponse"]);
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
        if ($this->threeDSAuthResponse !== null) {
            $data["threeDSAuthResponse"] = $this->threeDSAuthResponse;
        }

        return $data;
    }

}

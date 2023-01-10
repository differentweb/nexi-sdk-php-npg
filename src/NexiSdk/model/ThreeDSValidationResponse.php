<?php

namespace NexiSdk\model;

class ThreeDSValidationResponse implements \JsonSerializable
{

    private ?Operation $operation = null;

    public function getOperation()
    {
        return $this->operation;
    }

    public function setOperation(Operation $operation)
    {
        $this->operation = $operation;
    }

    private ?ThreeDSAuthResult $threeDSAuthResult = null;

    public function getThreeDSAuthResult()
    {
        return $this->threeDSAuthResult;
    }

    public function setThreeDSAuthResult(ThreeDSAuthResult $threeDSAuthResult)
    {
        $this->threeDSAuthResult = $threeDSAuthResult;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new ThreeDSValidationResponse();

        if (array_key_exists("operation", $realdata)) {
            $returnObject->setOperation(Operation::fromJsonDeserializedData($realdata["operation"]));
        }

        if (array_key_exists("threeDSAuthResult", $realdata)) {
            $returnObject->setThreeDSAuthResult(ThreeDSAuthResult::fromJsonDeserializedData($realdata["threeDSAuthResult"]));
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->operation !== null) {
            $data["operation"] = $this->operation;
        }
        if ($this->threeDSAuthResult !== null) {
            $data["threeDSAuthResult"] = $this->threeDSAuthResult;
        }

        return $data;
    }

}

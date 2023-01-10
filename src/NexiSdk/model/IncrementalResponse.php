<?php

namespace NexiSdk\model;

class IncrementalResponse implements \JsonSerializable
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

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new IncrementalResponse();

        if (array_key_exists("operation", $realdata)) {
            $returnObject->setOperation(Operation::fromJsonDeserializedData($realdata["operation"]));
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

        return $data;
    }

}

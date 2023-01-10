<?php

namespace NexiSdk\model;

class OperationList implements \JsonSerializable
{

    private ?array $operations = null;

    public function getOperations()
    {
        return $this->operations;
    }

    public function setOperations(array $operations)
    {
        $this->operations = $operations;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new OperationList();

        if (array_key_exists("operations", $realdata)) {
            $returnObject->setOperations($realdata["operations"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->operations !== null) {
            $data["operations"] = $this->operations;
        }

        return $data;
    }

}

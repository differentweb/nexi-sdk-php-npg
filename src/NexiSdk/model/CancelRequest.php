<?php

namespace NexiSdk\model;

class CancelRequest implements \JsonSerializable
{

    private ?string $description = null;

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new CancelRequest();

        if (array_key_exists("description", $realdata)) {
            $returnObject->setDescription($realdata["description"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->description !== null) {
            $data["description"] = $this->description;
        }

        return $data;
    }

}

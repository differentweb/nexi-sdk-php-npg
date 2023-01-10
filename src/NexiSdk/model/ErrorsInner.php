<?php

namespace NexiSdk\model;

class ErrorsInner implements \JsonSerializable
{

    private ?string $code = null;

    public function getCode()
    {
        return $this->code;
    }

    public function setCode(string $code)
    {
        $this->code = $code;
    }

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

        $returnObject = new ErrorsInner();

        if (array_key_exists("code", $realdata)) {
            $returnObject->setCode($realdata["code"]);
        }

        if (array_key_exists("description", $realdata)) {
            $returnObject->setDescription($realdata["description"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->code !== null) {
            $data["code"] = $this->code;
        }
        if ($this->description !== null) {
            $data["description"] = $this->description;
        }

        return $data;
    }

}

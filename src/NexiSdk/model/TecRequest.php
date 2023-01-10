<?php

namespace NexiSdk\model;

class TecRequest implements \JsonSerializable
{

    private ?string $name = null;

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    private ?array $termsAndConditions = null;

    public function getTermsAndConditions()
    {
        return $this->termsAndConditions;
    }

    public function setTermsAndConditions(array $termsAndConditions)
    {
        $this->termsAndConditions = $termsAndConditions;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new TecRequest();

        if (array_key_exists("name", $realdata)) {
            $returnObject->setName($realdata["name"]);
        }

        if (array_key_exists("termsAndConditions", $realdata)) {
            $returnObject->setTermsAndConditions($realdata["termsAndConditions"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->name !== null) {
            $data["name"] = $this->name;
        }
        if ($this->termsAndConditions !== null) {
            $data["termsAndConditions"] = $this->termsAndConditions;
        }

        return $data;
    }

}

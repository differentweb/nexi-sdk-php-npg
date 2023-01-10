<?php

namespace NexiSdk\model;

class TecResponse implements \JsonSerializable
{

    private ?string $termsAndConditionsId = null;

    public function getTermsAndConditionsId()
    {
        return $this->termsAndConditionsId;
    }

    public function setTermsAndConditionsId(string $termsAndConditionsId)
    {
        $this->termsAndConditionsId = $termsAndConditionsId;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new TecResponse();

        if (array_key_exists("termsAndConditionsId", $realdata)) {
            $returnObject->setTermsAndConditionsId($realdata["termsAndConditionsId"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->termsAndConditionsId !== null) {
            $data["termsAndConditionsId"] = $this->termsAndConditionsId;
        }

        return $data;
    }

}

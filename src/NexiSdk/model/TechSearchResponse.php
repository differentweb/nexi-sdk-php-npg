<?php

namespace NexiSdk\model;

class TechSearchResponse implements \JsonSerializable
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

    private ?string $name = null;

    public function getName()
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    private ?string $tecCreationDate = null;

    public function getTecCreationDate()
    {
        return $this->tecCreationDate;
    }

    public function setTecCreationDate(string $tecCreationDate)
    {
        $this->tecCreationDate = $tecCreationDate;
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

        $returnObject = new TechSearchResponse();

        if (array_key_exists("termsAndConditionsId", $realdata)) {
            $returnObject->setTermsAndConditionsId($realdata["termsAndConditionsId"]);
        }

        if (array_key_exists("name", $realdata)) {
            $returnObject->setName($realdata["name"]);
        }

        if (array_key_exists("tecCreationDate", $realdata)) {
            $returnObject->setTecCreationDate($realdata["tecCreationDate"]);
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
        if ($this->termsAndConditionsId !== null) {
            $data["termsAndConditionsId"] = $this->termsAndConditionsId;
        }
        if ($this->name !== null) {
            $data["name"] = $this->name;
        }
        if ($this->tecCreationDate !== null) {
            $data["tecCreationDate"] = $this->tecCreationDate;
        }
        if ($this->termsAndConditions !== null) {
            $data["termsAndConditions"] = $this->termsAndConditions;
        }

        return $data;
    }

}

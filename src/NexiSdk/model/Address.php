<?php

namespace NexiSdk\model;

class Address implements \JsonSerializable
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

    private ?string $street = null;

    public function getStreet()
    {
        return $this->street;
    }

    public function setStreet(string $street)
    {
        $this->street = $street;
    }

    private ?string $additionalInfo = null;

    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    public function setAdditionalInfo(string $additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
    }

    private ?string $city = null;

    public function getCity()
    {
        return $this->city;
    }

    public function setCity(string $city)
    {
        $this->city = $city;
    }

    private ?string $postCode = null;

    public function getPostCode()
    {
        return $this->postCode;
    }

    public function setPostCode(string $postCode)
    {
        $this->postCode = $postCode;
    }

    private ?string $province = null;

    public function getProvince()
    {
        return $this->province;
    }

    public function setProvince(string $province)
    {
        $this->province = $province;
    }

    private ?string $country = null;

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry(string $country)
    {
        $this->country = $country;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new Address();

        if (array_key_exists("name", $realdata)) {
            $returnObject->setName($realdata["name"]);
        }

        if (array_key_exists("street", $realdata)) {
            $returnObject->setStreet($realdata["street"]);
        }

        if (array_key_exists("additionalInfo", $realdata)) {
            $returnObject->setAdditionalInfo($realdata["additionalInfo"]);
        }

        if (array_key_exists("city", $realdata)) {
            $returnObject->setCity($realdata["city"]);
        }

        if (array_key_exists("postCode", $realdata)) {
            $returnObject->setPostCode($realdata["postCode"]);
        }

        if (array_key_exists("province", $realdata)) {
            $returnObject->setProvince($realdata["province"]);
        }

        if (array_key_exists("country", $realdata)) {
            $returnObject->setCountry($realdata["country"]);
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
        if ($this->street !== null) {
            $data["street"] = $this->street;
        }
        if ($this->additionalInfo !== null) {
            $data["additionalInfo"] = $this->additionalInfo;
        }
        if ($this->city !== null) {
            $data["city"] = $this->city;
        }
        if ($this->postCode !== null) {
            $data["postCode"] = $this->postCode;
        }
        if ($this->province !== null) {
            $data["province"] = $this->province;
        }
        if ($this->country !== null) {
            $data["country"] = $this->country;
        }

        return $data;
    }

}

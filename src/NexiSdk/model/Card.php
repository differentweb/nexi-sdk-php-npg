<?php

namespace NexiSdk\model;

class Card implements \JsonSerializable
{

    private ?string $pan = null;

    public function getPan()
    {
        return $this->pan;
    }

    public function setPan(string $pan)
    {
        $this->pan = $pan;
    }

    private ?string $expiryDate = null;

    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    public function setExpiryDate(string $expiryDate)
    {
        $this->expiryDate = $expiryDate;
    }

    private ?string $cvv = null;

    public function getCvv()
    {
        return $this->cvv;
    }

    public function setCvv(string $cvv)
    {
        $this->cvv = $cvv;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new Card();

        if (array_key_exists("pan", $realdata)) {
            $returnObject->setPan($realdata["pan"]);
        }

        if (array_key_exists("expiryDate", $realdata)) {
            $returnObject->setExpiryDate($realdata["expiryDate"]);
        }

        if (array_key_exists("cvv", $realdata)) {
            $returnObject->setCvv($realdata["cvv"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->pan !== null) {
            $data["pan"] = $this->pan;
        }
        if ($this->expiryDate !== null) {
            $data["expiryDate"] = $this->expiryDate;
        }
        if ($this->cvv !== null) {
            $data["cvv"] = $this->cvv;
        }

        return $data;
    }

}

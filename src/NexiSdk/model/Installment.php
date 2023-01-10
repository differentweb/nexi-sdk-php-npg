<?php

namespace NexiSdk\model;

class Installment implements \JsonSerializable
{

    private ?string $date = null;

    public function getDate()
    {
        return $this->date;
    }

    public function setDate(string $date)
    {
        $this->date = $date;
    }

    private ?int $amount = null;

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount(int $amount)
    {
        $this->amount = $amount;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new Installment();

        if (array_key_exists("date", $realdata)) {
            $returnObject->setDate($realdata["date"]);
        }

        if (array_key_exists("amount", $realdata)) {
            $returnObject->setAmount($realdata["amount"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->date !== null) {
            $data["date"] = $this->date;
        }
        if ($this->amount !== null) {
            $data["amount"] = $this->amount;
        }

        return $data;
    }

}

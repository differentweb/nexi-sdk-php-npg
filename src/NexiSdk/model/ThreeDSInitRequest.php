<?php

namespace NexiSdk\model;

class ThreeDSInitRequest implements \JsonSerializable
{

    private ?Order $order = null;

    public function getOrder()
    {
        return $this->order;
    }

    public function setOrder(Order $order)
    {
        $this->order = $order;
    }

    private ?Card $card = null;

    public function getCard()
    {
        return $this->card;
    }

    public function setCard(Card $card)
    {
        $this->card = $card;
    }

    private ?RecurringSettings $recurrence = null;

    public function getRecurrence()
    {
        return $this->recurrence;
    }

    public function setRecurrence(RecurringSettings $recurrence)
    {
        $this->recurrence = $recurrence;
    }

    private ?ExemptionsSettings $exemptions = null;

    public function getExemptions()
    {
        return $this->exemptions;
    }

    public function setExemptions(ExemptionsSettings $exemptions)
    {
        $this->exemptions = $exemptions;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new ThreeDSInitRequest();

        if (array_key_exists("order", $realdata)) {
            $returnObject->setOrder(Order::fromJsonDeserializedData($realdata["order"]));
        }

        if (array_key_exists("card", $realdata)) {
            $returnObject->setCard(Card::fromJsonDeserializedData($realdata["card"]));
        }

        if (array_key_exists("recurrence", $realdata)) {
            $returnObject->setRecurrence(RecurringSettings::fromJsonDeserializedData($realdata["recurrence"]));
        }

        if (array_key_exists("exemptions", $realdata)) {
            $returnObject->setExemptions(ExemptionsSettings::fromJsonDeserializedData($realdata["exemptions"]));
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->order !== null) {
            $data["order"] = $this->order;
        }
        if ($this->card !== null) {
            $data["card"] = $this->card;
        }
        if ($this->recurrence !== null) {
            $data["recurrence"] = $this->recurrence;
        }
        if ($this->exemptions !== null) {
            $data["exemptions"] = $this->exemptions;
        }

        return $data;
    }

}

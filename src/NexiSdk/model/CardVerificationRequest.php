<?php

namespace NexiSdk\model;

class CardVerificationRequest implements \JsonSerializable
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

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new CardVerificationRequest();

        if (array_key_exists("order", $realdata)) {
            $returnObject->setOrder(Order::fromJsonDeserializedData($realdata["order"]));
        }

        if (array_key_exists("card", $realdata)) {
            $returnObject->setCard(Card::fromJsonDeserializedData($realdata["card"]));
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

        return $data;
    }

}

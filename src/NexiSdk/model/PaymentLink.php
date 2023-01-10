<?php

namespace NexiSdk\model;

class PaymentLink implements \JsonSerializable
{

    private ?string $linkId = null;

    public function getLinkId()
    {
        return $this->linkId;
    }

    public function setLinkId(string $linkId)
    {
        $this->linkId = $linkId;
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

    private ?string $expirationDate = null;

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    public function setExpirationDate(string $expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    private ?string $link = null;

    public function getLink()
    {
        return $this->link;
    }

    public function setLink(string $link)
    {
        $this->link = $link;
    }

    private ?string $paidByOperationId = null;

    public function getPaidByOperationId()
    {
        return $this->paidByOperationId;
    }

    public function setPaidByOperationId(string $paidByOperationId)
    {
        $this->paidByOperationId = $paidByOperationId;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new PaymentLink();

        if (array_key_exists("linkId", $realdata)) {
            $returnObject->setLinkId($realdata["linkId"]);
        }

        if (array_key_exists("amount", $realdata)) {
            $returnObject->setAmount($realdata["amount"]);
        }

        if (array_key_exists("expirationDate", $realdata)) {
            $returnObject->setExpirationDate($realdata["expirationDate"]);
        }

        if (array_key_exists("link", $realdata)) {
            $returnObject->setLink($realdata["link"]);
        }

        if (array_key_exists("paidByOperationId", $realdata)) {
            $returnObject->setPaidByOperationId($realdata["paidByOperationId"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->linkId !== null) {
            $data["linkId"] = $this->linkId;
        }
        if ($this->amount !== null) {
            $data["amount"] = $this->amount;
        }
        if ($this->expirationDate !== null) {
            $data["expirationDate"] = $this->expirationDate;
        }
        if ($this->link !== null) {
            $data["link"] = $this->link;
        }
        if ($this->paidByOperationId !== null) {
            $data["paidByOperationId"] = $this->paidByOperationId;
        }

        return $data;
    }

}

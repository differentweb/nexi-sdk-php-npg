<?php

namespace NexiSdk\model;

class PayByLinkRequest implements \JsonSerializable
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

    private ?PaymentSession $paymentSession = null;

    public function getPaymentSession()
    {
        return $this->paymentSession;
    }

    public function setPaymentSession(PaymentSession $paymentSession)
    {
        $this->paymentSession = $paymentSession;
    }

    private ?string $expitrationDate = null;

    public function getExpitrationDate()
    {
        return $this->expitrationDate;
    }

    public function setExpitrationDate(string $expitrationDate)
    {
        $this->expitrationDate = $expitrationDate;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new PayByLinkRequest();

        if (array_key_exists("order", $realdata)) {
            $returnObject->setOrder(Order::fromJsonDeserializedData($realdata["order"]));
        }

        if (array_key_exists("paymentSession", $realdata)) {
            $returnObject->setPaymentSession(PaymentSession::fromJsonDeserializedData($realdata["paymentSession"]));
        }

        if (array_key_exists("expitrationDate", $realdata)) {
            $returnObject->setExpitrationDate($realdata["expitrationDate"]);
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
        if ($this->paymentSession !== null) {
            $data["paymentSession"] = $this->paymentSession;
        }
        if ($this->expitrationDate !== null) {
            $data["expitrationDate"] = $this->expitrationDate;
        }

        return $data;
    }

}

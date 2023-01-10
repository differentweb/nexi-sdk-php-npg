<?php

namespace NexiSdk\model;

class OrderDetails implements \JsonSerializable
{

    private ?OrderStatus $orderStatus = null;

    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    public function setOrderStatus(OrderStatus $orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    private ?array $operations = null;

    public function getOperations()
    {
        return $this->operations;
    }

    public function setOperations(array $operations)
    {
        $this->operations = $operations;
    }

    private ?array $paymentLink = null;

    public function getPaymentLink()
    {
        return $this->paymentLink;
    }

    public function setPaymentLink(array $paymentLink)
    {
        $this->paymentLink = $paymentLink;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new OrderDetails();

        if (array_key_exists("orderStatus", $realdata)) {
            $returnObject->setOrderStatus(OrderStatus::fromJsonDeserializedData($realdata["orderStatus"]));
        }

        if (array_key_exists("operations", $realdata)) {
            $returnObject->setOperations($realdata["operations"]);
        }

        if (array_key_exists("paymentLink", $realdata)) {
            $returnObject->setPaymentLink($realdata["paymentLink"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->orderStatus !== null) {
            $data["orderStatus"] = $this->orderStatus;
        }
        if ($this->operations !== null) {
            $data["operations"] = $this->operations;
        }
        if ($this->paymentLink !== null) {
            $data["paymentLink"] = $this->paymentLink;
        }

        return $data;
    }

}

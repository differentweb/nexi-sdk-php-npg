<?php

namespace NexiSdk\model;

class OrderList implements \JsonSerializable
{

    private ?array $orders = null;

    public function getOrders()
    {
        return $this->orders;
    }

    public function setOrders(array $orders)
    {
        $this->orders = $orders;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new OrderList();

        if (array_key_exists("orders", $realdata)) {
            $returnObject->setOrders($realdata["orders"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->orders !== null) {
            $data["orders"] = $this->orders;
        }

        return $data;
    }

}

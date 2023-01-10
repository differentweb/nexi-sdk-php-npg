<?php

namespace NexiSdk\model;

class PaymentMethodList implements \JsonSerializable
{

    private ?array $paymentMethods = null;

    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    public function setPaymentMethods(array $paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new PaymentMethodList();

        if (array_key_exists("paymentMethods", $realdata)) {
            $returnObject->setPaymentMethods($realdata["paymentMethods"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->paymentMethods !== null) {
            $data["paymentMethods"] = $this->paymentMethods;
        }

        return $data;
    }

}

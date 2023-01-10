<?php

namespace NexiSdk\model;

class PaymentMethodType implements \JsonSerializable
{

    private $value;

    private function __construct($value)
    {
        $this->value = $value;
    }

    public function jsonSerialize()
    {
        return $this->value;
    }

    public static function CARD()
    {
        return new PaymentMethodType("CARD");
    }

    public static function APM()
    {
        return new PaymentMethodType("APM");
    }

    #[\ReturnTypeWillChange]
    public static function fromJsonDeserializedData($data)
    {
        switch ($data) {
            case "CARD":
                return static::CARD();
            case "APM":
                return static::APM();
        }

        return new \Exception("Invalid value: " . $data);
    }

}

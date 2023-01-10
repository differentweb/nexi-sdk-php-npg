<?php

namespace NexiSdk\model;

class ActionType implements \JsonSerializable
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

    public static function PAY()
    {
        return new ActionType("PAY");
    }

    public static function VERIFY()
    {
        return new ActionType("VERIFY");
    }

    public static function PREAUTH()
    {
        return new ActionType("PREAUTH");
    }

    #[\ReturnTypeWillChange]
    public static function fromJsonDeserializedData($data)
    {
        switch ($data) {
            case "PAY":
                return static::PAY();
            case "VERIFY":
                return static::VERIFY();
            case "PREAUTH":
                return static::PREAUTH();
        }

        return new \Exception("Invalid value: " . $data);
    }

}

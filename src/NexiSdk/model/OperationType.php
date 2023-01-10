<?php

namespace NexiSdk\model;

class OperationType implements \JsonSerializable
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

    public static function AUTHORIZATION()
    {
        return new OperationType("AUTHORIZATION");
    }

    public static function CAPTURE()
    {
        return new OperationType("CAPTURE");
    }

    public static function VOID()
    {
        return new OperationType("VOID");
    }

    public static function REFUND()
    {
        return new OperationType("REFUND");
    }

    public static function CANCEL()
    {
        return new OperationType("CANCEL");
    }

    #[\ReturnTypeWillChange]
    public static function fromJsonDeserializedData($data)
    {
        switch ($data) {
            case "AUTHORIZATION":
                return static::AUTHORIZATION();
            case "CAPTURE":
                return static::CAPTURE();
            case "VOID":
                return static::VOID();
            case "REFUND":
                return static::REFUND();
            case "CANCEL":
                return static::CANCEL();
        }

        return new \Exception("Invalid value: " . $data);
    }

}

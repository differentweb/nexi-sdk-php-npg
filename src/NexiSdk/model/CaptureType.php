<?php

namespace NexiSdk\model;

class CaptureType implements \JsonSerializable
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

    public static function IMPLICIT()
    {
        return new CaptureType("IMPLICIT");
    }

    public static function EXPLICIT()
    {
        return new CaptureType("EXPLICIT");
    }

    #[\ReturnTypeWillChange]
    public static function fromJsonDeserializedData($data)
    {
        switch ($data) {
            case "IMPLICIT":
                return static::IMPLICIT();
            case "EXPLICIT":
                return static::EXPLICIT();
        }

        return new \Exception("Invalid value: " . $data);
    }

}

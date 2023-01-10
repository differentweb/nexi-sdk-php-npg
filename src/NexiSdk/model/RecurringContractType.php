<?php

namespace NexiSdk\model;

class RecurringContractType implements \JsonSerializable
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

    public static function MIT_UNSCHEDULED()
    {
        return new RecurringContractType("MIT_UNSCHEDULED");
    }

    public static function MIT_SCHEDULED()
    {
        return new RecurringContractType("MIT_SCHEDULED");
    }

    public static function CIT()
    {
        return new RecurringContractType("CIT");
    }

    #[\ReturnTypeWillChange]
    public static function fromJsonDeserializedData($data)
    {
        switch ($data) {
            case "MIT_UNSCHEDULED":
                return static::MIT_UNSCHEDULED();
            case "MIT_SCHEDULED":
                return static::MIT_SCHEDULED();
            case "CIT":
                return static::CIT();
        }

        return new \Exception("Invalid value: " . $data);
    }

}

<?php

namespace NexiSdk\model;

class ExemptionsSettings implements \JsonSerializable
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

    public static function NO_PREFERENCE()
    {
        return new ExemptionsSettings("NO_PREFERENCE");
    }

    public static function CHALLENGE_REQUESTED()
    {
        return new ExemptionsSettings("CHALLENGE_REQUESTED");
    }

    #[\ReturnTypeWillChange]
    public static function fromJsonDeserializedData($data)
    {
        switch ($data) {
            case "NO_PREFERENCE":
                return static::NO_PREFERENCE();
            case "CHALLENGE_REQUESTED":
                return static::CHALLENGE_REQUESTED();
        }

        return new \Exception("Invalid value: " . $data);
    }

}

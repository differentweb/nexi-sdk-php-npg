<?php

namespace NexiSdk\model;

class RecurringAction implements \JsonSerializable
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

    public static function NO_RECURRING()
    {
        return new RecurringAction("NO_RECURRING");
    }

    public static function SUBSEQUENT_PAYMENT()
    {
        return new RecurringAction("SUBSEQUENT_PAYMENT");
    }

    public static function CONTRACT_CREATION()
    {
        return new RecurringAction("CONTRACT_CREATION");
    }

    public static function CARD_SUBSTITUTION()
    {
        return new RecurringAction("CARD_SUBSTITUTION");
    }

    #[\ReturnTypeWillChange]
    public static function fromJsonDeserializedData($data)
    {
        switch ($data) {
            case "NO_RECURRING":
                return static::NO_RECURRING();
            case "SUBSEQUENT_PAYMENT":
                return static::SUBSEQUENT_PAYMENT();
            case "CONTRACT_CREATION":
                return static::CONTRACT_CREATION();
            case "CARD_SUBSTITUTION":
                return static::CARD_SUBSTITUTION();
        }

        return new \Exception("Invalid value: " . $data);
    }

}

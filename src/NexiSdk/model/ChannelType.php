<?php

namespace NexiSdk\model;

class ChannelType implements \JsonSerializable
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

    public static function ECOMMERCE()
    {
        return new ChannelType("ECOMMERCE");
    }

    public static function POS()
    {
        return new ChannelType("POS");
    }

    public static function BACKOFFICE()
    {
        return new ChannelType("BACKOFFICE");
    }

    #[\ReturnTypeWillChange]
    public static function fromJsonDeserializedData($data)
    {
        switch ($data) {
            case "ECOMMERCE":
                return static::ECOMMERCE();
            case "POS":
                return static::POS();
            case "BACKOFFICE":
                return static::BACKOFFICE();
        }

        return new \Exception("Invalid value: " . $data);
    }

}

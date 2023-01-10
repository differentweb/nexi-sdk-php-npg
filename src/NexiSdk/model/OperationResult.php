<?php

namespace NexiSdk\model;

class OperationResult implements \JsonSerializable
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

    public static function AUTHORIZED()
    {
        return new OperationResult("AUTHORIZED");
    }

    public static function EXECUTED()
    {
        return new OperationResult("EXECUTED");
    }

    public static function DECLINED()
    {
        return new OperationResult("DECLINED");
    }

    public static function DENIED_BY_RISK()
    {
        return new OperationResult("DENIED_BY_RISK");
    }

    public static function THREEDS_VALIDATED()
    {
        return new OperationResult("THREEDS_VALIDATED");
    }

    public static function THREEDS_FAILED()
    {
        return new OperationResult("THREEDS_FAILED");
    }

    public static function PENDING()
    {
        return new OperationResult("PENDING");
    }

    public static function CANCELED()
    {
        return new OperationResult("CANCELED");
    }

    public static function VOIDED()
    {
        return new OperationResult("VOIDED");
    }

    public static function REFUNDED()
    {
        return new OperationResult("REFUNDED");
    }

    public static function FAILED()
    {
        return new OperationResult("FAILED");
    }

    #[\ReturnTypeWillChange]
    public static function fromJsonDeserializedData($data)
    {
        switch ($data) {
            case "AUTHORIZED":
                return static::AUTHORIZED();
            case "EXECUTED":
                return static::EXECUTED();
            case "DECLINED":
                return static::DECLINED();
            case "DENIED_BY_RISK":
                return static::DENIED_BY_RISK();
            case "THREEDS_VALIDATED":
                return static::THREEDS_VALIDATED();
            case "THREEDS_FAILED":
                return static::THREEDS_FAILED();
            case "PENDING":
                return static::PENDING();
            case "CANCELED":
                return static::CANCELED();
            case "VOIDED":
                return static::VOIDED();
            case "REFUNDED":
                return static::REFUNDED();
            case "FAILED":
                return static::FAILED();
        }

        return new \Exception("Invalid value: " . $data);
    }

}

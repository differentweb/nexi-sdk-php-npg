<?php

namespace NexiSdk\model;

class MerchantRiskIndicatorGiftCardAmount implements \JsonSerializable
{

    private ?int $value = null;

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(int $value)
    {
        $this->value = $value;
    }

    private ?string $currency = null;

    public function getCurrency()
    {
        return $this->currency;
    }

    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new MerchantRiskIndicatorGiftCardAmount();

        if (array_key_exists("value", $realdata)) {
            $returnObject->setValue($realdata["value"]);
        }

        if (array_key_exists("currency", $realdata)) {
            $returnObject->setCurrency($realdata["currency"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->value !== null) {
            $data["value"] = $this->value;
        }
        if ($this->currency !== null) {
            $data["currency"] = $this->currency;
        }

        return $data;
    }

}

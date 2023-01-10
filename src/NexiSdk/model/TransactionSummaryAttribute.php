<?php

namespace NexiSdk\model;

class TransactionSummaryAttribute implements \JsonSerializable
{

    private ?string $label = null;

    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel(string $label)
    {
        $this->label = $label;
    }

    private ?string $value = null;

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(string $value)
    {
        $this->value = $value;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new TransactionSummaryAttribute();

        if (array_key_exists("label", $realdata)) {
            $returnObject->setLabel($realdata["label"]);
        }

        if (array_key_exists("value", $realdata)) {
            $returnObject->setValue($realdata["value"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->label !== null) {
            $data["label"] = $this->label;
        }
        if ($this->value !== null) {
            $data["value"] = $this->value;
        }

        return $data;
    }

}

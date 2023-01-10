<?php

namespace NexiSdk\model;

class CreateHostedFieldOrderResponse implements \JsonSerializable
{

    private ?string $hostedFieldHtml = null;

    public function getHostedFieldHtml()
    {
        return $this->hostedFieldHtml;
    }

    public function setHostedFieldHtml(string $hostedFieldHtml)
    {
        $this->hostedFieldHtml = $hostedFieldHtml;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new CreateHostedFieldOrderResponse();

        if (array_key_exists("hostedFieldHtml", $realdata)) {
            $returnObject->setHostedFieldHtml($realdata["hostedFieldHtml"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->hostedFieldHtml !== null) {
            $data["hostedFieldHtml"] = $this->hostedFieldHtml;
        }

        return $data;
    }

}

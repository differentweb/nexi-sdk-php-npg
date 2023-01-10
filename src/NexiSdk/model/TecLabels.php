<?php

namespace NexiSdk\model;

class TecLabels implements \JsonSerializable
{

    private ?string $language = null;

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    private ?string $checkMarkLabel = null;

    public function getCheckMarkLabel()
    {
        return $this->checkMarkLabel;
    }

    public function setCheckMarkLabel(string $checkMarkLabel)
    {
        $this->checkMarkLabel = $checkMarkLabel;
    }

    private ?string $linkLabel = null;

    public function getLinkLabel()
    {
        return $this->linkLabel;
    }

    public function setLinkLabel(string $linkLabel)
    {
        $this->linkLabel = $linkLabel;
    }

    private ?string $text = null;

    public function getText()
    {
        return $this->text;
    }

    public function setText(string $text)
    {
        $this->text = $text;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new TecLabels();

        if (array_key_exists("language", $realdata)) {
            $returnObject->setLanguage($realdata["language"]);
        }

        if (array_key_exists("checkMarkLabel", $realdata)) {
            $returnObject->setCheckMarkLabel($realdata["checkMarkLabel"]);
        }

        if (array_key_exists("linkLabel", $realdata)) {
            $returnObject->setLinkLabel($realdata["linkLabel"]);
        }

        if (array_key_exists("text", $realdata)) {
            $returnObject->setText($realdata["text"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->language !== null) {
            $data["language"] = $this->language;
        }
        if ($this->checkMarkLabel !== null) {
            $data["checkMarkLabel"] = $this->checkMarkLabel;
        }
        if ($this->linkLabel !== null) {
            $data["linkLabel"] = $this->linkLabel;
        }
        if ($this->text !== null) {
            $data["text"] = $this->text;
        }

        return $data;
    }

}

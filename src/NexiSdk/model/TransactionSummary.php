<?php

namespace NexiSdk\model;

class TransactionSummary implements \JsonSerializable
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

    private ?array $summaryList = null;

    public function getSummaryList()
    {
        return $this->summaryList;
    }

    public function setSummaryList(array $summaryList)
    {
        $this->summaryList = $summaryList;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new TransactionSummary();

        if (array_key_exists("language", $realdata)) {
            $returnObject->setLanguage($realdata["language"]);
        }

        if (array_key_exists("summaryList", $realdata)) {
            $returnObject->setSummaryList($realdata["summaryList"]);
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
        if ($this->summaryList !== null) {
            $data["summaryList"] = $this->summaryList;
        }

        return $data;
    }

}

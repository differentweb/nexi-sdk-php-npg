<?php

namespace NexiSdk\model;

class PaymentSession implements \JsonSerializable
{

    private ?ActionType $actionType = null;

    public function getActionType()
    {
        return $this->actionType;
    }

    public function setActionType(ActionType $actionType)
    {
        $this->actionType = $actionType;
    }

    private ?int $amount = null;

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount(int $amount)
    {
        $this->amount = $amount;
    }

    private ?RecurringSettings $recurrence = null;

    public function getRecurrence()
    {
        return $this->recurrence;
    }

    public function setRecurrence(RecurringSettings $recurrence)
    {
        $this->recurrence = $recurrence;
    }

    private ?CaptureType $captureType = null;

    public function getCaptureType()
    {
        return $this->captureType;
    }

    public function setCaptureType(CaptureType $captureType)
    {
        $this->captureType = $captureType;
    }

    private ?ExemptionsSettings $exemptions = null;

    public function getExemptions()
    {
        return $this->exemptions;
    }

    public function setExemptions(ExemptionsSettings $exemptions)
    {
        $this->exemptions = $exemptions;
    }

    private ?string $language = null;

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage(string $language)
    {
        $this->language = $language;
    }

    private ?string $resultUrl = null;

    public function getResultUrl()
    {
        return $this->resultUrl;
    }

    public function setResultUrl(string $resultUrl)
    {
        $this->resultUrl = $resultUrl;
    }

    private ?string $cancelUrl = null;

    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    public function setCancelUrl(string $cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;
    }

    private ?string $notificationUrl = null;

    public function getNotificationUrl()
    {
        return $this->notificationUrl;
    }

    public function setNotificationUrl(string $notificationUrl)
    {
        $this->notificationUrl = $notificationUrl;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new PaymentSession();

        if (array_key_exists("actionType", $realdata)) {
            $returnObject->setActionType(ActionType::fromJsonDeserializedData($realdata["actionType"]));
        }

        if (array_key_exists("amount", $realdata)) {
            $returnObject->setAmount($realdata["amount"]);
        }

        if (array_key_exists("recurrence", $realdata)) {
            $returnObject->setRecurrence(RecurringSettings::fromJsonDeserializedData($realdata["recurrence"]));
        }

        if (array_key_exists("captureType", $realdata)) {
            $returnObject->setCaptureType(CaptureType::fromJsonDeserializedData($realdata["captureType"]));
        }

        if (array_key_exists("exemptions", $realdata)) {
            $returnObject->setExemptions(ExemptionsSettings::fromJsonDeserializedData($realdata["exemptions"]));
        }

        if (array_key_exists("language", $realdata)) {
            $returnObject->setLanguage($realdata["language"]);
        }

        if (array_key_exists("resultUrl", $realdata)) {
            $returnObject->setResultUrl($realdata["resultUrl"]);
        }

        if (array_key_exists("cancelUrl", $realdata)) {
            $returnObject->setCancelUrl($realdata["cancelUrl"]);
        }

        if (array_key_exists("notificationUrl", $realdata)) {
            $returnObject->setNotificationUrl($realdata["notificationUrl"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->actionType !== null) {
            $data["actionType"] = $this->actionType;
        }
        if ($this->amount !== null) {
            $data["amount"] = $this->amount;
        }
        if ($this->recurrence !== null) {
            $data["recurrence"] = $this->recurrence;
        }
        if ($this->captureType !== null) {
            $data["captureType"] = $this->captureType;
        }
        if ($this->exemptions !== null) {
            $data["exemptions"] = $this->exemptions;
        }
        if ($this->language !== null) {
            $data["language"] = $this->language;
        }
        if ($this->resultUrl !== null) {
            $data["resultUrl"] = $this->resultUrl;
        }
        if ($this->cancelUrl !== null) {
            $data["cancelUrl"] = $this->cancelUrl;
        }
        if ($this->notificationUrl !== null) {
            $data["notificationUrl"] = $this->notificationUrl;
        }

        return $data;
    }

}

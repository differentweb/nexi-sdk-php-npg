<?php

namespace NexiSdk\model;

class WebhookNotificationAdditionalData implements \JsonSerializable
{

    private ?string $status = null;

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    private ?string $authorizationCode = null;

    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    public function setAuthorizationCode(string $authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
    }

    private ?string $rrn = null;

    public function getRrn()
    {
        return $this->rrn;
    }

    public function setRrn(string $rrn)
    {
        $this->rrn = $rrn;
    }

    private ?string $maskedPan = null;

    public function getMaskedPan()
    {
        return $this->maskedPan;
    }

    public function setMaskedPan(string $maskedPan)
    {
        $this->maskedPan = $maskedPan;
    }

    private ?string $cardExpiryDate = null;

    public function getCardExpiryDate()
    {
        return $this->cardExpiryDate;
    }

    public function setCardExpiryDate(string $cardExpiryDate)
    {
        $this->cardExpiryDate = $cardExpiryDate;
    }

    private ?string $cardType = null;

    public function getCardType()
    {
        return $this->cardType;
    }

    public function setCardType(string $cardType)
    {
        $this->cardType = $cardType;
    }

    private ?string $cardCountry = null;

    public function getCardCountry()
    {
        return $this->cardCountry;
    }

    public function setCardCountry(string $cardCountry)
    {
        $this->cardCountry = $cardCountry;
    }

    private ?string $threeDS = null;

    public function getThreeDS()
    {
        return $this->threeDS;
    }

    public function setThreeDS(string $threeDS)
    {
        $this->threeDS = $threeDS;
    }

    private ?string $schemaTID = null;

    public function getSchemaTID()
    {
        return $this->schemaTID;
    }

    public function setSchemaTID(string $schemaTID)
    {
        $this->schemaTID = $schemaTID;
    }

    private ?string $amountInMerchantCurrency = null;

    public function getAmountInMerchantCurrency()
    {
        return $this->amountInMerchantCurrency;
    }

    public function setAmountInMerchantCurrency(string $amountInMerchantCurrency)
    {
        $this->amountInMerchantCurrency = $amountInMerchantCurrency;
    }

    private ?string $merchantCurrency = null;

    public function getMerchantCurrency()
    {
        return $this->merchantCurrency;
    }

    public function setMerchantCurrency(string $merchantCurrency)
    {
        $this->merchantCurrency = $merchantCurrency;
    }

    private ?string $exchangeRate = null;

    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    public function setExchangeRate(string $exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new WebhookNotificationAdditionalData();

        if (array_key_exists("status", $realdata)) {
            $returnObject->setStatus($realdata["status"]);
        }

        if (array_key_exists("authorizationCode", $realdata)) {
            $returnObject->setAuthorizationCode($realdata["authorizationCode"]);
        }

        if (array_key_exists("rrn", $realdata)) {
            $returnObject->setRrn($realdata["rrn"]);
        }

        if (array_key_exists("maskedPan", $realdata)) {
            $returnObject->setMaskedPan($realdata["maskedPan"]);
        }

        if (array_key_exists("cardExpiryDate", $realdata)) {
            $returnObject->setCardExpiryDate($realdata["cardExpiryDate"]);
        }

        if (array_key_exists("cardType", $realdata)) {
            $returnObject->setCardType($realdata["cardType"]);
        }

        if (array_key_exists("cardCountry", $realdata)) {
            $returnObject->setCardCountry($realdata["cardCountry"]);
        }

        if (array_key_exists("threeDS", $realdata)) {
            $returnObject->setThreeDS($realdata["threeDS"]);
        }

        if (array_key_exists("schemaTID", $realdata)) {
            $returnObject->setSchemaTID($realdata["schemaTID"]);
        }

        if (array_key_exists("amountInMerchantCurrency", $realdata)) {
            $returnObject->setAmountInMerchantCurrency($realdata["amountInMerchantCurrency"]);
        }

        if (array_key_exists("merchantCurrency", $realdata)) {
            $returnObject->setMerchantCurrency($realdata["merchantCurrency"]);
        }

        if (array_key_exists("exchangeRate", $realdata)) {
            $returnObject->setExchangeRate($realdata["exchangeRate"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->status !== null) {
            $data["status"] = $this->status;
        }
        if ($this->authorizationCode !== null) {
            $data["authorizationCode"] = $this->authorizationCode;
        }
        if ($this->rrn !== null) {
            $data["rrn"] = $this->rrn;
        }
        if ($this->maskedPan !== null) {
            $data["maskedPan"] = $this->maskedPan;
        }
        if ($this->cardExpiryDate !== null) {
            $data["cardExpiryDate"] = $this->cardExpiryDate;
        }
        if ($this->cardType !== null) {
            $data["cardType"] = $this->cardType;
        }
        if ($this->cardCountry !== null) {
            $data["cardCountry"] = $this->cardCountry;
        }
        if ($this->threeDS !== null) {
            $data["threeDS"] = $this->threeDS;
        }
        if ($this->schemaTID !== null) {
            $data["schemaTID"] = $this->schemaTID;
        }
        if ($this->amountInMerchantCurrency !== null) {
            $data["amountInMerchantCurrency"] = $this->amountInMerchantCurrency;
        }
        if ($this->merchantCurrency !== null) {
            $data["merchantCurrency"] = $this->merchantCurrency;
        }
        if ($this->exchangeRate !== null) {
            $data["exchangeRate"] = $this->exchangeRate;
        }

        return $data;
    }

}

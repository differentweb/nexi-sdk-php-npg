<?php

namespace NexiSdk\model;

class CardHolderAccountInfo implements \JsonSerializable
{

    private ?string $chAccDate = null;

    public function getChAccDate()
    {
        return $this->chAccDate;
    }

    public function setChAccDate(string $chAccDate)
    {
        $this->chAccDate = $chAccDate;
    }

    private ?string $chAccAgeIndicator = null;

    public function getChAccAgeIndicator()
    {
        return $this->chAccAgeIndicator;
    }

    public function setChAccAgeIndicator(string $chAccAgeIndicator)
    {
        $this->chAccAgeIndicator = $chAccAgeIndicator;
    }

    private ?string $chAccChangeDate = null;

    public function getChAccChangeDate()
    {
        return $this->chAccChangeDate;
    }

    public function setChAccChangeDate(string $chAccChangeDate)
    {
        $this->chAccChangeDate = $chAccChangeDate;
    }

    private ?string $chAccChangeIndicator = null;

    public function getChAccChangeIndicator()
    {
        return $this->chAccChangeIndicator;
    }

    public function setChAccChangeIndicator(string $chAccChangeIndicator)
    {
        $this->chAccChangeIndicator = $chAccChangeIndicator;
    }

    private ?string $chAccPwChangeDate = null;

    public function getChAccPwChangeDate()
    {
        return $this->chAccPwChangeDate;
    }

    public function setChAccPwChangeDate(string $chAccPwChangeDate)
    {
        $this->chAccPwChangeDate = $chAccPwChangeDate;
    }

    private ?string $chAccPwChangeIndicator = null;

    public function getChAccPwChangeIndicator()
    {
        return $this->chAccPwChangeIndicator;
    }

    public function setChAccPwChangeIndicator(string $chAccPwChangeIndicator)
    {
        $this->chAccPwChangeIndicator = $chAccPwChangeIndicator;
    }

    private ?int $nbPurchaseAccount = null;

    public function getNbPurchaseAccount()
    {
        return $this->nbPurchaseAccount;
    }

    public function setNbPurchaseAccount(int $nbPurchaseAccount)
    {
        $this->nbPurchaseAccount = $nbPurchaseAccount;
    }

    private ?string $destinationAddressUsageDate = null;

    public function getDestinationAddressUsageDate()
    {
        return $this->destinationAddressUsageDate;
    }

    public function setDestinationAddressUsageDate(string $destinationAddressUsageDate)
    {
        $this->destinationAddressUsageDate = $destinationAddressUsageDate;
    }

    private ?string $destinationAddressUsageIndicator = null;

    public function getDestinationAddressUsageIndicator()
    {
        return $this->destinationAddressUsageIndicator;
    }

    public function setDestinationAddressUsageIndicator(string $destinationAddressUsageIndicator)
    {
        $this->destinationAddressUsageIndicator = $destinationAddressUsageIndicator;
    }

    private ?string $destinationNameIndicator = null;

    public function getDestinationNameIndicator()
    {
        return $this->destinationNameIndicator;
    }

    public function setDestinationNameIndicator(string $destinationNameIndicator)
    {
        $this->destinationNameIndicator = $destinationNameIndicator;
    }

    private ?int $txnActivityDay = null;

    public function getTxnActivityDay()
    {
        return $this->txnActivityDay;
    }

    public function setTxnActivityDay(int $txnActivityDay)
    {
        $this->txnActivityDay = $txnActivityDay;
    }

    private ?int $txnActivityYear = null;

    public function getTxnActivityYear()
    {
        return $this->txnActivityYear;
    }

    public function setTxnActivityYear(int $txnActivityYear)
    {
        $this->txnActivityYear = $txnActivityYear;
    }

    private ?int $provisionAttemptsDay = null;

    public function getProvisionAttemptsDay()
    {
        return $this->provisionAttemptsDay;
    }

    public function setProvisionAttemptsDay(int $provisionAttemptsDay)
    {
        $this->provisionAttemptsDay = $provisionAttemptsDay;
    }

    private ?string $suspiciousAccActivity = null;

    public function getSuspiciousAccActivity()
    {
        return $this->suspiciousAccActivity;
    }

    public function setSuspiciousAccActivity(string $suspiciousAccActivity)
    {
        $this->suspiciousAccActivity = $suspiciousAccActivity;
    }

    private ?string $paymentAccAgeDate = null;

    public function getPaymentAccAgeDate()
    {
        return $this->paymentAccAgeDate;
    }

    public function setPaymentAccAgeDate(string $paymentAccAgeDate)
    {
        $this->paymentAccAgeDate = $paymentAccAgeDate;
    }

    private ?string $paymentAccIndicator = null;

    public function getPaymentAccIndicator()
    {
        return $this->paymentAccIndicator;
    }

    public function setPaymentAccIndicator(string $paymentAccIndicator)
    {
        $this->paymentAccIndicator = $paymentAccIndicator;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new CardHolderAccountInfo();

        if (array_key_exists("chAccDate", $realdata)) {
            $returnObject->setChAccDate($realdata["chAccDate"]);
        }

        if (array_key_exists("chAccAgeIndicator", $realdata)) {
            $returnObject->setChAccAgeIndicator($realdata["chAccAgeIndicator"]);
        }

        if (array_key_exists("chAccChangeDate", $realdata)) {
            $returnObject->setChAccChangeDate($realdata["chAccChangeDate"]);
        }

        if (array_key_exists("chAccChangeIndicator", $realdata)) {
            $returnObject->setChAccChangeIndicator($realdata["chAccChangeIndicator"]);
        }

        if (array_key_exists("chAccPwChangeDate", $realdata)) {
            $returnObject->setChAccPwChangeDate($realdata["chAccPwChangeDate"]);
        }

        if (array_key_exists("chAccPwChangeIndicator", $realdata)) {
            $returnObject->setChAccPwChangeIndicator($realdata["chAccPwChangeIndicator"]);
        }

        if (array_key_exists("nbPurchaseAccount", $realdata)) {
            $returnObject->setNbPurchaseAccount($realdata["nbPurchaseAccount"]);
        }

        if (array_key_exists("destinationAddressUsageDate", $realdata)) {
            $returnObject->setDestinationAddressUsageDate($realdata["destinationAddressUsageDate"]);
        }

        if (array_key_exists("destinationAddressUsageIndicator", $realdata)) {
            $returnObject->setDestinationAddressUsageIndicator($realdata["destinationAddressUsageIndicator"]);
        }

        if (array_key_exists("destinationNameIndicator", $realdata)) {
            $returnObject->setDestinationNameIndicator($realdata["destinationNameIndicator"]);
        }

        if (array_key_exists("txnActivityDay", $realdata)) {
            $returnObject->setTxnActivityDay($realdata["txnActivityDay"]);
        }

        if (array_key_exists("txnActivityYear", $realdata)) {
            $returnObject->setTxnActivityYear($realdata["txnActivityYear"]);
        }

        if (array_key_exists("provisionAttemptsDay", $realdata)) {
            $returnObject->setProvisionAttemptsDay($realdata["provisionAttemptsDay"]);
        }

        if (array_key_exists("suspiciousAccActivity", $realdata)) {
            $returnObject->setSuspiciousAccActivity($realdata["suspiciousAccActivity"]);
        }

        if (array_key_exists("paymentAccAgeDate", $realdata)) {
            $returnObject->setPaymentAccAgeDate($realdata["paymentAccAgeDate"]);
        }

        if (array_key_exists("paymentAccIndicator", $realdata)) {
            $returnObject->setPaymentAccIndicator($realdata["paymentAccIndicator"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->chAccDate !== null) {
            $data["chAccDate"] = $this->chAccDate;
        }
        if ($this->chAccAgeIndicator !== null) {
            $data["chAccAgeIndicator"] = $this->chAccAgeIndicator;
        }
        if ($this->chAccChangeDate !== null) {
            $data["chAccChangeDate"] = $this->chAccChangeDate;
        }
        if ($this->chAccChangeIndicator !== null) {
            $data["chAccChangeIndicator"] = $this->chAccChangeIndicator;
        }
        if ($this->chAccPwChangeDate !== null) {
            $data["chAccPwChangeDate"] = $this->chAccPwChangeDate;
        }
        if ($this->chAccPwChangeIndicator !== null) {
            $data["chAccPwChangeIndicator"] = $this->chAccPwChangeIndicator;
        }
        if ($this->nbPurchaseAccount !== null) {
            $data["nbPurchaseAccount"] = $this->nbPurchaseAccount;
        }
        if ($this->destinationAddressUsageDate !== null) {
            $data["destinationAddressUsageDate"] = $this->destinationAddressUsageDate;
        }
        if ($this->destinationAddressUsageIndicator !== null) {
            $data["destinationAddressUsageIndicator"] = $this->destinationAddressUsageIndicator;
        }
        if ($this->destinationNameIndicator !== null) {
            $data["destinationNameIndicator"] = $this->destinationNameIndicator;
        }
        if ($this->txnActivityDay !== null) {
            $data["txnActivityDay"] = $this->txnActivityDay;
        }
        if ($this->txnActivityYear !== null) {
            $data["txnActivityYear"] = $this->txnActivityYear;
        }
        if ($this->provisionAttemptsDay !== null) {
            $data["provisionAttemptsDay"] = $this->provisionAttemptsDay;
        }
        if ($this->suspiciousAccActivity !== null) {
            $data["suspiciousAccActivity"] = $this->suspiciousAccActivity;
        }
        if ($this->paymentAccAgeDate !== null) {
            $data["paymentAccAgeDate"] = $this->paymentAccAgeDate;
        }
        if ($this->paymentAccIndicator !== null) {
            $data["paymentAccIndicator"] = $this->paymentAccIndicator;
        }

        return $data;
    }

}

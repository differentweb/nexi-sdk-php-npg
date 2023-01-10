<?php

namespace NexiSdk\model;

class CustomerInfo implements \JsonSerializable
{

    private ?string $cardHolderName = null;

    public function getCardHolderName()
    {
        return $this->cardHolderName;
    }

    public function setCardHolderName(string $cardHolderName)
    {
        $this->cardHolderName = $cardHolderName;
    }

    private ?string $cardHolderEmail = null;

    public function getCardHolderEmail()
    {
        return $this->cardHolderEmail;
    }

    public function setCardHolderEmail(string $cardHolderEmail)
    {
        $this->cardHolderEmail = $cardHolderEmail;
    }

    private ?Address $billingAddress = null;

    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    public function setBillingAddress(Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    private ?Address $shippingAddress = null;

    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    public function setShippingAddress(Address $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    private ?string $mobilePhoneCountryCode = null;

    public function getMobilePhoneCountryCode()
    {
        return $this->mobilePhoneCountryCode;
    }

    public function setMobilePhoneCountryCode(string $mobilePhoneCountryCode)
    {
        $this->mobilePhoneCountryCode = $mobilePhoneCountryCode;
    }

    private ?string $mobilePhone = null;

    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    public function setMobilePhone(string $mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
    }

    private ?string $homePhone = null;

    public function getHomePhone()
    {
        return $this->homePhone;
    }

    public function setHomePhone(string $homePhone)
    {
        $this->homePhone = $homePhone;
    }

    private ?string $workPhone = null;

    public function getWorkPhone()
    {
        return $this->workPhone;
    }

    public function setWorkPhone(string $workPhone)
    {
        $this->workPhone = $workPhone;
    }

    private ?CardHolderAccountInfo $cardHolderAcctInfo = null;

    public function getCardHolderAcctInfo()
    {
        return $this->cardHolderAcctInfo;
    }

    public function setCardHolderAcctInfo(CardHolderAccountInfo $cardHolderAcctInfo)
    {
        $this->cardHolderAcctInfo = $cardHolderAcctInfo;
    }

    private ?MerchantRiskIndicator $merchantRiskIndicator = null;

    public function getMerchantRiskIndicator()
    {
        return $this->merchantRiskIndicator;
    }

    public function setMerchantRiskIndicator(MerchantRiskIndicator $merchantRiskIndicator)
    {
        $this->merchantRiskIndicator = $merchantRiskIndicator;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new CustomerInfo();

        if (array_key_exists("cardHolderName", $realdata)) {
            $returnObject->setCardHolderName($realdata["cardHolderName"]);
        }

        if (array_key_exists("cardHolderEmail", $realdata)) {
            $returnObject->setCardHolderEmail($realdata["cardHolderEmail"]);
        }

        if (array_key_exists("billingAddress", $realdata)) {
            $returnObject->setBillingAddress(Address::fromJsonDeserializedData($realdata["billingAddress"]));
        }

        if (array_key_exists("shippingAddress", $realdata)) {
            $returnObject->setShippingAddress(Address::fromJsonDeserializedData($realdata["shippingAddress"]));
        }

        if (array_key_exists("mobilePhoneCountryCode", $realdata)) {
            $returnObject->setMobilePhoneCountryCode($realdata["mobilePhoneCountryCode"]);
        }

        if (array_key_exists("mobilePhone", $realdata)) {
            $returnObject->setMobilePhone($realdata["mobilePhone"]);
        }

        if (array_key_exists("homePhone", $realdata)) {
            $returnObject->setHomePhone($realdata["homePhone"]);
        }

        if (array_key_exists("workPhone", $realdata)) {
            $returnObject->setWorkPhone($realdata["workPhone"]);
        }

        if (array_key_exists("cardHolderAcctInfo", $realdata)) {
            $returnObject->setCardHolderAcctInfo(CardHolderAccountInfo::fromJsonDeserializedData($realdata["cardHolderAcctInfo"]));
        }

        if (array_key_exists("merchantRiskIndicator", $realdata)) {
            $returnObject->setMerchantRiskIndicator(MerchantRiskIndicator::fromJsonDeserializedData($realdata["merchantRiskIndicator"]));
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->cardHolderName !== null) {
            $data["cardHolderName"] = $this->cardHolderName;
        }
        if ($this->cardHolderEmail !== null) {
            $data["cardHolderEmail"] = $this->cardHolderEmail;
        }
        if ($this->billingAddress !== null) {
            $data["billingAddress"] = $this->billingAddress;
        }
        if ($this->shippingAddress !== null) {
            $data["shippingAddress"] = $this->shippingAddress;
        }
        if ($this->mobilePhoneCountryCode !== null) {
            $data["mobilePhoneCountryCode"] = $this->mobilePhoneCountryCode;
        }
        if ($this->mobilePhone !== null) {
            $data["mobilePhone"] = $this->mobilePhone;
        }
        if ($this->homePhone !== null) {
            $data["homePhone"] = $this->homePhone;
        }
        if ($this->workPhone !== null) {
            $data["workPhone"] = $this->workPhone;
        }
        if ($this->cardHolderAcctInfo !== null) {
            $data["cardHolderAcctInfo"] = $this->cardHolderAcctInfo;
        }
        if ($this->merchantRiskIndicator !== null) {
            $data["merchantRiskIndicator"] = $this->merchantRiskIndicator;
        }

        return $data;
    }

}

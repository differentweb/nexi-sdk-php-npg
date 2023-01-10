<?php

namespace NexiSdk\model;

class PayByLinkResponse implements \JsonSerializable
{

    private ?PaymentLink $paymentLink = null;

    public function getPaymentLink()
    {
        return $this->paymentLink;
    }

    public function setPaymentLink(PaymentLink $paymentLink)
    {
        $this->paymentLink = $paymentLink;
    }

    private ?string $securityToken = null;

    public function getSecurityToken()
    {
        return $this->securityToken;
    }

    public function setSecurityToken(string $securityToken)
    {
        $this->securityToken = $securityToken;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new PayByLinkResponse();

        if (array_key_exists("paymentLink", $realdata)) {
            $returnObject->setPaymentLink(PaymentLink::fromJsonDeserializedData($realdata["paymentLink"]));
        }

        if (array_key_exists("securityToken", $realdata)) {
            $returnObject->setSecurityToken($realdata["securityToken"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->paymentLink !== null) {
            $data["paymentLink"] = $this->paymentLink;
        }
        if ($this->securityToken !== null) {
            $data["securityToken"] = $this->securityToken;
        }

        return $data;
    }

}

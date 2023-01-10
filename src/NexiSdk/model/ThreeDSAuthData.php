<?php

namespace NexiSdk\model;

class ThreeDSAuthData implements \JsonSerializable
{

    private ?string $threeDSAuthResponse = null;

    public function getThreeDSAuthResponse()
    {
        return $this->threeDSAuthResponse;
    }

    public function setThreeDSAuthResponse(string $threeDSAuthResponse)
    {
        $this->threeDSAuthResponse = $threeDSAuthResponse;
    }

    private ?string $authenticationValue = null;

    public function getAuthenticationValue()
    {
        return $this->authenticationValue;
    }

    public function setAuthenticationValue(string $authenticationValue)
    {
        $this->authenticationValue = $authenticationValue;
    }

    private ?string $eci = null;

    public function getEci()
    {
        return $this->eci;
    }

    public function setEci(string $eci)
    {
        $this->eci = $eci;
    }

    private ?string $xid = null;

    public function getXid()
    {
        return $this->xid;
    }

    public function setXid(string $xid)
    {
        $this->xid = $xid;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new ThreeDSAuthData();

        if (array_key_exists("threeDSAuthResponse", $realdata)) {
            $returnObject->setThreeDSAuthResponse($realdata["threeDSAuthResponse"]);
        }

        if (array_key_exists("authenticationValue", $realdata)) {
            $returnObject->setAuthenticationValue($realdata["authenticationValue"]);
        }

        if (array_key_exists("eci", $realdata)) {
            $returnObject->setEci($realdata["eci"]);
        }

        if (array_key_exists("xid", $realdata)) {
            $returnObject->setXid($realdata["xid"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->threeDSAuthResponse !== null) {
            $data["threeDSAuthResponse"] = $this->threeDSAuthResponse;
        }
        if ($this->authenticationValue !== null) {
            $data["authenticationValue"] = $this->authenticationValue;
        }
        if ($this->eci !== null) {
            $data["eci"] = $this->eci;
        }
        if ($this->xid !== null) {
            $data["xid"] = $this->xid;
        }

        return $data;
    }

}

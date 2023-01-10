<?php

namespace NexiSdk\model;

class ThreeDSAuthResult implements \JsonSerializable
{

    private ?string $authenticationValue = null;

    public function getAuthenticationValue()
    {
        return $this->authenticationValue;
    }

    public function setAuthenticationValue(string $authenticationValue)
    {
        $this->authenticationValue = $authenticationValue;
    }

    private ?string $cavvAlgorithm = null;

    public function getCavvAlgorithm()
    {
        return $this->cavvAlgorithm;
    }

    public function setCavvAlgorithm(string $cavvAlgorithm)
    {
        $this->cavvAlgorithm = $cavvAlgorithm;
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

    private ?string $merchantAcquirerBin = null;

    public function getMerchantAcquirerBin()
    {
        return $this->merchantAcquirerBin;
    }

    public function setMerchantAcquirerBin(string $merchantAcquirerBin)
    {
        $this->merchantAcquirerBin = $merchantAcquirerBin;
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

    private ?string $status = null;

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    private ?string $vendorcode = null;

    public function getVendorcode()
    {
        return $this->vendorcode;
    }

    public function setVendorcode(string $vendorcode)
    {
        $this->vendorcode = $vendorcode;
    }

    private ?string $version = null;

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion(string $version)
    {
        $this->version = $version;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new ThreeDSAuthResult();

        if (array_key_exists("authenticationValue", $realdata)) {
            $returnObject->setAuthenticationValue($realdata["authenticationValue"]);
        }

        if (array_key_exists("cavvAlgorithm", $realdata)) {
            $returnObject->setCavvAlgorithm($realdata["cavvAlgorithm"]);
        }

        if (array_key_exists("eci", $realdata)) {
            $returnObject->setEci($realdata["eci"]);
        }

        if (array_key_exists("merchantAcquirerBin", $realdata)) {
            $returnObject->setMerchantAcquirerBin($realdata["merchantAcquirerBin"]);
        }

        if (array_key_exists("xid", $realdata)) {
            $returnObject->setXid($realdata["xid"]);
        }

        if (array_key_exists("status", $realdata)) {
            $returnObject->setStatus($realdata["status"]);
        }

        if (array_key_exists("vendorcode", $realdata)) {
            $returnObject->setVendorcode($realdata["vendorcode"]);
        }

        if (array_key_exists("version", $realdata)) {
            $returnObject->setVersion($realdata["version"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->authenticationValue !== null) {
            $data["authenticationValue"] = $this->authenticationValue;
        }
        if ($this->cavvAlgorithm !== null) {
            $data["cavvAlgorithm"] = $this->cavvAlgorithm;
        }
        if ($this->eci !== null) {
            $data["eci"] = $this->eci;
        }
        if ($this->merchantAcquirerBin !== null) {
            $data["merchantAcquirerBin"] = $this->merchantAcquirerBin;
        }
        if ($this->xid !== null) {
            $data["xid"] = $this->xid;
        }
        if ($this->status !== null) {
            $data["status"] = $this->status;
        }
        if ($this->vendorcode !== null) {
            $data["vendorcode"] = $this->vendorcode;
        }
        if ($this->version !== null) {
            $data["version"] = $this->version;
        }

        return $data;
    }

}

<?php

namespace NexiSdk\model;

class ThreeDSInitResponse implements \JsonSerializable
{

    private ?Operation $operation = null;

    public function getOperation()
    {
        return $this->operation;
    }

    public function setOperation(Operation $operation)
    {
        $this->operation = $operation;
    }

    private ?string $threeDSEnrollmentStatus = null;

    public function getThreeDSEnrollmentStatus()
    {
        return $this->threeDSEnrollmentStatus;
    }

    public function setThreeDSEnrollmentStatus(string $threeDSEnrollmentStatus)
    {
        $this->threeDSEnrollmentStatus = $threeDSEnrollmentStatus;
    }

    private ?string $threeDSAuthRequest = null;

    public function getThreeDSAuthRequest()
    {
        return $this->threeDSAuthRequest;
    }

    public function setThreeDSAuthRequest(string $threeDSAuthRequest)
    {
        $this->threeDSAuthRequest = $threeDSAuthRequest;
    }

    private ?string $threeDSAuthUrl = null;

    public function getThreeDSAuthUrl()
    {
        return $this->threeDSAuthUrl;
    }

    public function setThreeDSAuthUrl(string $threeDSAuthUrl)
    {
        $this->threeDSAuthUrl = $threeDSAuthUrl;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new ThreeDSInitResponse();

        if (array_key_exists("operation", $realdata)) {
            $returnObject->setOperation(Operation::fromJsonDeserializedData($realdata["operation"]));
        }

        if (array_key_exists("threeDSEnrollmentStatus", $realdata)) {
            $returnObject->setThreeDSEnrollmentStatus($realdata["threeDSEnrollmentStatus"]);
        }

        if (array_key_exists("threeDSAuthRequest", $realdata)) {
            $returnObject->setThreeDSAuthRequest($realdata["threeDSAuthRequest"]);
        }

        if (array_key_exists("threeDSAuthUrl", $realdata)) {
            $returnObject->setThreeDSAuthUrl($realdata["threeDSAuthUrl"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->operation !== null) {
            $data["operation"] = $this->operation;
        }
        if ($this->threeDSEnrollmentStatus !== null) {
            $data["threeDSEnrollmentStatus"] = $this->threeDSEnrollmentStatus;
        }
        if ($this->threeDSAuthRequest !== null) {
            $data["threeDSAuthRequest"] = $this->threeDSAuthRequest;
        }
        if ($this->threeDSAuthUrl !== null) {
            $data["threeDSAuthUrl"] = $this->threeDSAuthUrl;
        }

        return $data;
    }

}

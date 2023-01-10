<?php

namespace NexiSdk\model;

class CreateHostedOrderResponse implements \JsonSerializable
{

    private ?string $hostedPage = null;

    public function getHostedPage()
    {
        return $this->hostedPage;
    }

    public function setHostedPage(string $hostedPage)
    {
        $this->hostedPage = $hostedPage;
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

        $returnObject = new CreateHostedOrderResponse();

        if (array_key_exists("hostedPage", $realdata)) {
            $returnObject->setHostedPage($realdata["hostedPage"]);
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
        if ($this->hostedPage !== null) {
            $data["hostedPage"] = $this->hostedPage;
        }
        if ($this->securityToken !== null) {
            $data["securityToken"] = $this->securityToken;
        }

        return $data;
    }

}

<?php

namespace NexiSdk\model;

class ContractsByCustomerResponse implements \JsonSerializable
{

    private ?string $customerId = null;

    public function getCustomerId()
    {
        return $this->customerId;
    }

    public function setCustomerId(string $customerId)
    {
        $this->customerId = $customerId;
    }

    private ?array $contracts = null;

    public function getContracts()
    {
        return $this->contracts;
    }

    public function setContracts(array $contracts)
    {
        $this->contracts = $contracts;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new ContractsByCustomerResponse();

        if (array_key_exists("customerId", $realdata)) {
            $returnObject->setCustomerId($realdata["customerId"]);
        }

        if (array_key_exists("contracts", $realdata)) {
            $returnObject->setContracts($realdata["contracts"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->customerId !== null) {
            $data["customerId"] = $this->customerId;
        }
        if ($this->contracts !== null) {
            $data["contracts"] = $this->contracts;
        }

        return $data;
    }

}

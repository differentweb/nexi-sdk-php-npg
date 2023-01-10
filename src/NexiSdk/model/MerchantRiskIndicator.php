<?php

namespace NexiSdk\model;

class MerchantRiskIndicator implements \JsonSerializable
{

    private ?string $deliveryEmail = null;

    public function getDeliveryEmail()
    {
        return $this->deliveryEmail;
    }

    public function setDeliveryEmail(string $deliveryEmail)
    {
        $this->deliveryEmail = $deliveryEmail;
    }

    private ?string $deliveryTimeframe = null;

    public function getDeliveryTimeframe()
    {
        return $this->deliveryTimeframe;
    }

    public function setDeliveryTimeframe(string $deliveryTimeframe)
    {
        $this->deliveryTimeframe = $deliveryTimeframe;
    }

    private ?MerchantRiskIndicatorGiftCardAmount $giftCardAmount = null;

    public function getGiftCardAmount()
    {
        return $this->giftCardAmount;
    }

    public function setGiftCardAmount(MerchantRiskIndicatorGiftCardAmount $giftCardAmount)
    {
        $this->giftCardAmount = $giftCardAmount;
    }

    private ?int $giftCardCount = null;

    public function getGiftCardCount()
    {
        return $this->giftCardCount;
    }

    public function setGiftCardCount(int $giftCardCount)
    {
        $this->giftCardCount = $giftCardCount;
    }

    private ?string $preOrderDate = null;

    public function getPreOrderDate()
    {
        return $this->preOrderDate;
    }

    public function setPreOrderDate(string $preOrderDate)
    {
        $this->preOrderDate = $preOrderDate;
    }

    private ?string $preOrderPurchaseIndicator = null;

    public function getPreOrderPurchaseIndicator()
    {
        return $this->preOrderPurchaseIndicator;
    }

    public function setPreOrderPurchaseIndicator(string $preOrderPurchaseIndicator)
    {
        $this->preOrderPurchaseIndicator = $preOrderPurchaseIndicator;
    }

    private ?string $reorderItemsIndicator = null;

    public function getReorderItemsIndicator()
    {
        return $this->reorderItemsIndicator;
    }

    public function setReorderItemsIndicator(string $reorderItemsIndicator)
    {
        $this->reorderItemsIndicator = $reorderItemsIndicator;
    }

    private ?string $shipIndicator = null;

    public function getShipIndicator()
    {
        return $this->shipIndicator;
    }

    public function setShipIndicator(string $shipIndicator)
    {
        $this->shipIndicator = $shipIndicator;
    }

    public static function fromJsonDeserializedData($data)
    {
        if ($data instanceof \stdClass) {
            $realdata = get_object_vars($data);
        } else {
            $realdata = $data;
        }

        $returnObject = new MerchantRiskIndicator();

        if (array_key_exists("deliveryEmail", $realdata)) {
            $returnObject->setDeliveryEmail($realdata["deliveryEmail"]);
        }

        if (array_key_exists("deliveryTimeframe", $realdata)) {
            $returnObject->setDeliveryTimeframe($realdata["deliveryTimeframe"]);
        }

        if (array_key_exists("giftCardAmount", $realdata)) {
            $returnObject->setGiftCardAmount(MerchantRiskIndicatorGiftCardAmount::fromJsonDeserializedData($realdata["giftCardAmount"]));
        }

        if (array_key_exists("giftCardCount", $realdata)) {
            $returnObject->setGiftCardCount($realdata["giftCardCount"]);
        }

        if (array_key_exists("preOrderDate", $realdata)) {
            $returnObject->setPreOrderDate($realdata["preOrderDate"]);
        }

        if (array_key_exists("preOrderPurchaseIndicator", $realdata)) {
            $returnObject->setPreOrderPurchaseIndicator($realdata["preOrderPurchaseIndicator"]);
        }

        if (array_key_exists("reorderItemsIndicator", $realdata)) {
            $returnObject->setReorderItemsIndicator($realdata["reorderItemsIndicator"]);
        }

        if (array_key_exists("shipIndicator", $realdata)) {
            $returnObject->setShipIndicator($realdata["shipIndicator"]);
        }

        return $returnObject;
    }

    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = array();
        if ($this->deliveryEmail !== null) {
            $data["deliveryEmail"] = $this->deliveryEmail;
        }
        if ($this->deliveryTimeframe !== null) {
            $data["deliveryTimeframe"] = $this->deliveryTimeframe;
        }
        if ($this->giftCardAmount !== null) {
            $data["giftCardAmount"] = $this->giftCardAmount;
        }
        if ($this->giftCardCount !== null) {
            $data["giftCardCount"] = $this->giftCardCount;
        }
        if ($this->preOrderDate !== null) {
            $data["preOrderDate"] = $this->preOrderDate;
        }
        if ($this->preOrderPurchaseIndicator !== null) {
            $data["preOrderPurchaseIndicator"] = $this->preOrderPurchaseIndicator;
        }
        if ($this->reorderItemsIndicator !== null) {
            $data["reorderItemsIndicator"] = $this->reorderItemsIndicator;
        }
        if ($this->shipIndicator !== null) {
            $data["shipIndicator"] = $this->shipIndicator;
        }

        return $data;
    }

}

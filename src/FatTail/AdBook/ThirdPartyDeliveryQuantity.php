<?php

namespace FatTail\AdBook;

class ThirdPartyDeliveryQuantity extends AdBookConnectEntity
{

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var int $DropID
     */
    protected $DropID = null;

    /**
     * @var string $ExternalDropID
     */
    protected $ExternalDropID = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $ThirdPartyMetricID
     */
    protected $ThirdPartyMetricID = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var int $PriceTypeID
     */
    protected $PriceTypeID = null;

    /**
     * @param \DateTime $DeliveryDate
     * @param int $Quantity
     * @param int $ThirdPartyMetricID
     */
    public function __construct(\DateTime $DeliveryDate, $Quantity, $ThirdPartyMetricID)
    {
      $this->DeliveryDate = $DeliveryDate->format('Y-m-d\TH:i:s');
      $this->Quantity = $Quantity;
      $this->ThirdPartyMetricID = $ThirdPartyMetricID;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
      if ($this->DeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryDate
     * @return \FatTail\AdBook\ThirdPartyDeliveryQuantity
     */
    public function setDeliveryDate(\DateTime $DeliveryDate)
    {
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getDropID()
    {
      return $this->DropID;
    }

    /**
     * @param int $DropID
     * @return \FatTail\AdBook\ThirdPartyDeliveryQuantity
     */
    public function setDropID($DropID)
    {
      $this->DropID = $DropID;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalDropID()
    {
      return $this->ExternalDropID;
    }

    /**
     * @param string $ExternalDropID
     * @return \FatTail\AdBook\ThirdPartyDeliveryQuantity
     */
    public function setExternalDropID($ExternalDropID)
    {
      $this->ExternalDropID = $ExternalDropID;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return \FatTail\AdBook\ThirdPartyDeliveryQuantity
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getThirdPartyMetricID()
    {
      return $this->ThirdPartyMetricID;
    }

    /**
     * @param int $ThirdPartyMetricID
     * @return \FatTail\AdBook\ThirdPartyDeliveryQuantity
     */
    public function setThirdPartyMetricID($ThirdPartyMetricID)
    {
      $this->ThirdPartyMetricID = $ThirdPartyMetricID;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \FatTail\AdBook\ThirdPartyDeliveryQuantity
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriceTypeID()
    {
      return $this->PriceTypeID;
    }

    /**
     * @param int $PriceTypeID
     * @return \FatTail\AdBook\ThirdPartyDeliveryQuantity
     */
    public function setPriceTypeID($PriceTypeID)
    {
      $this->PriceTypeID = $PriceTypeID;
      return $this;
    }

}

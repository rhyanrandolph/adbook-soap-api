<?php

namespace FatTail\AdBook;

class ContentTargetingDelivery extends AdBookConnectEntity
{

    /**
     * @var string $AdSize
     */
    protected $AdSize = null;

    /**
     * @var int $Clicks
     */
    protected $Clicks = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var int $DropID
     */
    protected $DropID = null;

    /**
     * @var int $Impressions
     */
    protected $Impressions = null;

    /**
     * @var string $LeafAdUnitID
     */
    protected $LeafAdUnitID = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var int $PriceTypeID
     */
    protected $PriceTypeID = null;

    /**
     * @var string $SiteID
     */
    protected $SiteID = null;

    /**
     * @var string $DeviceCategoryID
     */
    protected $DeviceCategoryID = null;

    /**
     * @var string $VideoBundleID
     */
    protected $VideoBundleID = null;

    /**
     * @param int $Clicks
     * @param \DateTime $DeliveryDate
     * @param int $DropID
     * @param int $Impressions
     */
    public function __construct($Clicks, \DateTime $DeliveryDate, $DropID, $Impressions)
    {
      $this->Clicks = $Clicks;
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      $this->DropID = $DropID;
      $this->Impressions = $Impressions;
    }

    /**
     * @return string
     */
    public function getAdSize()
    {
      return $this->AdSize;
    }

    /**
     * @param string $AdSize
     * @return \FatTail\AdBook\ContentTargetingDelivery
     */
    public function setAdSize($AdSize)
    {
      $this->AdSize = $AdSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getClicks()
    {
      return $this->Clicks;
    }

    /**
     * @param int $Clicks
     * @return \FatTail\AdBook\ContentTargetingDelivery
     */
    public function setClicks($Clicks)
    {
      $this->Clicks = $Clicks;
      return $this;
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
     * @return \FatTail\AdBook\ContentTargetingDelivery
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
     * @return \FatTail\AdBook\ContentTargetingDelivery
     */
    public function setDropID($DropID)
    {
      $this->DropID = $DropID;
      return $this;
    }

    /**
     * @return int
     */
    public function getImpressions()
    {
      return $this->Impressions;
    }

    /**
     * @param int $Impressions
     * @return \FatTail\AdBook\ContentTargetingDelivery
     */
    public function setImpressions($Impressions)
    {
      $this->Impressions = $Impressions;
      return $this;
    }

    /**
     * @return string
     */
    public function getLeafAdUnitID()
    {
      return $this->LeafAdUnitID;
    }

    /**
     * @param string $LeafAdUnitID
     * @return \FatTail\AdBook\ContentTargetingDelivery
     */
    public function setLeafAdUnitID($LeafAdUnitID)
    {
      $this->LeafAdUnitID = $LeafAdUnitID;
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
     * @return \FatTail\AdBook\ContentTargetingDelivery
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
     * @return \FatTail\AdBook\ContentTargetingDelivery
     */
    public function setPriceTypeID($PriceTypeID)
    {
      $this->PriceTypeID = $PriceTypeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSiteID()
    {
      return $this->SiteID;
    }

    /**
     * @param string $SiteID
     * @return \FatTail\AdBook\ContentTargetingDelivery
     */
    public function setSiteID($SiteID)
    {
      $this->SiteID = $SiteID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeviceCategoryID()
    {
      return $this->DeviceCategoryID;
    }

    /**
     * @param string $DeviceCategoryID
     * @return \FatTail\AdBook\ContentTargetingDelivery
     */
    public function setDeviceCategoryID($DeviceCategoryID)
    {
      $this->DeviceCategoryID = $DeviceCategoryID;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoBundleID()
    {
      return $this->VideoBundleID;
    }

    /**
     * @param string $VideoBundleID
     * @return \FatTail\AdBook\ContentTargetingDelivery
     */
    public function setVideoBundleID($VideoBundleID)
    {
      $this->VideoBundleID = $VideoBundleID;
      return $this;
    }

}

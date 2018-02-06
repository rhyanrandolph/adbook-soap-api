<?php

namespace FatTail\AdBook;

class ContentTargetingDeliveryUploadResult extends AdBookConnectEntity
{

    /**
     * @var string $AdSize
     */
    protected $AdSize = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var int $DropID
     */
    protected $DropID = null;

    /**
     * @var string $LeafAdUnitID
     */
    protected $LeafAdUnitID = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

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

    
    public function __construct()
    {
    
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
     * @return \FatTail\AdBook\ContentTargetingDeliveryUploadResult
     */
    public function setAdSize($AdSize)
    {
      $this->AdSize = $AdSize;
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
     * @return \FatTail\AdBook\ContentTargetingDeliveryUploadResult
     */
    public function setDeliveryDate(\DateTime $DeliveryDate = null)
    {
      if ($DeliveryDate == null) {
       $this->DeliveryDate = null;
      } else {
        $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      }
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
     * @return \FatTail\AdBook\ContentTargetingDeliveryUploadResult
     */
    public function setDropID($DropID)
    {
      $this->DropID = $DropID;
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
     * @return \FatTail\AdBook\ContentTargetingDeliveryUploadResult
     */
    public function setLeafAdUnitID($LeafAdUnitID)
    {
      $this->LeafAdUnitID = $LeafAdUnitID;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \FatTail\AdBook\ContentTargetingDeliveryUploadResult
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
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
     * @return \FatTail\AdBook\ContentTargetingDeliveryUploadResult
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
     * @return \FatTail\AdBook\ContentTargetingDeliveryUploadResult
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
     * @return \FatTail\AdBook\ContentTargetingDeliveryUploadResult
     */
    public function setVideoBundleID($VideoBundleID)
    {
      $this->VideoBundleID = $VideoBundleID;
      return $this;
    }

}

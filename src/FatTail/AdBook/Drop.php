<?php

namespace FatTail\AdBook;

class Drop extends AdBookConnectEntity
{

    /**
     * @var int $AdUnitID
     */
    protected $AdUnitID = null;

    /**
     * @var BillingCategory $BillingCategory
     */
    protected $BillingCategory = null;

    /**
     * @var BillingModel $BillingModel
     */
    protected $BillingModel = null;

    /**
     * @var \DateTime $DropDate
     */
    protected $DropDate = null;

    /**
     * @var int $DropID
     */
    protected $DropID = null;

    /**
     * @var string $DropNotes
     */
    protected $DropNotes = null;

    /**
     * @var Targeting $DropTargeting
     */
    protected $DropTargeting = null;

    /**
     * @var \DateTime $EndDropDate
     */
    protected $EndDropDate = null;

    /**
     * @var string $ExternalID
     */
    protected $ExternalID = null;

    /**
     * @var int $GroupID
     */
    protected $GroupID = null;

    /**
     * @var int $Impressions
     */
    protected $Impressions = null;

    /**
     * @var int $MediaElementID
     */
    protected $MediaElementID = null;

    /**
     * @var boolean $OTFSponsorship
     */
    protected $OTFSponsorship = null;

    /**
     * @var int $OrderID
     */
    protected $OrderID = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var int $PriceTypeID
     */
    protected $PriceTypeID = null;

    /**
     * @var int $Quantity
     */
    protected $Quantity = null;

    /**
     * @var int $ServedByID
     */
    protected $ServedByID = null;

    /**
     * @var int $ThirdPartyAdServerID
     */
    protected $ThirdPartyAdServerID = null;

    /**
     * @var int $TrafficAdTypeID
     */
    protected $TrafficAdTypeID = null;

    /**
     * @var int $TrafficDeliveryMakeGoodID
     */
    protected $TrafficDeliveryMakeGoodID = null;

    /**
     * @var int $TrafficDeliverySchedulingID
     */
    protected $TrafficDeliverySchedulingID = null;

    /**
     * @var int $TrafficPriorityID
     */
    protected $TrafficPriorityID = null;

    /**
     * @var InventoryUpdateStatus $UpdateStatus
     */
    protected $UpdateStatus = null;

    /**
     * @var string $UpdateStatusText
     */
    protected $UpdateStatusText = null;

    /**
     * @var ArrayOfDynamicPropertyValue $DropDynamicProperties
     */
    protected $DropDynamicProperties = null;

    /**
     * @var int $FrequencyCap
     */
    protected $FrequencyCap = null;

    /**
     * @var ActiveStatus $ActiveStatus
     */
    protected $ActiveStatus = null;

    /**
     * @param BillingCategory $BillingCategory
     * @param \DateTime $DropDate
     * @param \DateTime $EndDropDate
     * @param int $MediaElementID
     * @param int $OrderID
     * @param int $PriceTypeID
     */
    public function __construct($BillingCategory, \DateTime $DropDate, \DateTime $EndDropDate, $MediaElementID, $OrderID, $PriceTypeID)
    {
      $this->BillingCategory = $BillingCategory;
      $this->DropDate = $DropDate->format(\DateTime::ATOM);
      $this->EndDropDate = $EndDropDate->format(\DateTime::ATOM);
      $this->MediaElementID = $MediaElementID;
      $this->OrderID = $OrderID;
      $this->PriceTypeID = $PriceTypeID;
    }

    /**
     * @return int
     */
    public function getAdUnitID()
    {
      return $this->AdUnitID;
    }

    /**
     * @param int $AdUnitID
     * @return \FatTail\AdBook\Drop
     */
    public function setAdUnitID($AdUnitID)
    {
      $this->AdUnitID = $AdUnitID;
      return $this;
    }

    /**
     * @return BillingCategory
     */
    public function getBillingCategory()
    {
      return $this->BillingCategory;
    }

    /**
     * @param BillingCategory $BillingCategory
     * @return \FatTail\AdBook\Drop
     */
    public function setBillingCategory($BillingCategory)
    {
      $this->BillingCategory = $BillingCategory;
      return $this;
    }

    /**
     * @return BillingModel
     */
    public function getBillingModel()
    {
      return $this->BillingModel;
    }

    /**
     * @param BillingModel $BillingModel
     * @return \FatTail\AdBook\Drop
     */
    public function setBillingModel($BillingModel)
    {
      $this->BillingModel = $BillingModel;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDropDate()
    {
      if ($this->DropDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DropDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DropDate
     * @return \FatTail\AdBook\Drop
     */
    public function setDropDate(\DateTime $DropDate)
    {
      $this->DropDate = $DropDate->format(\DateTime::ATOM);
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
     * @return \FatTail\AdBook\Drop
     */
    public function setDropID($DropID)
    {
      $this->DropID = $DropID;
      return $this;
    }

    /**
     * @return string
     */
    public function getDropNotes()
    {
      return $this->DropNotes;
    }

    /**
     * @param string $DropNotes
     * @return \FatTail\AdBook\Drop
     */
    public function setDropNotes($DropNotes)
    {
      $this->DropNotes = $DropNotes;
      return $this;
    }

    /**
     * @return Targeting
     */
    public function getDropTargeting()
    {
      return $this->DropTargeting;
    }

    /**
     * @param Targeting $DropTargeting
     * @return \FatTail\AdBook\Drop
     */
    public function setDropTargeting($DropTargeting)
    {
      $this->DropTargeting = $DropTargeting;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDropDate()
    {
      if ($this->EndDropDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDropDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDropDate
     * @return \FatTail\AdBook\Drop
     */
    public function setEndDropDate(\DateTime $EndDropDate)
    {
      $this->EndDropDate = $EndDropDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalID()
    {
      return $this->ExternalID;
    }

    /**
     * @param string $ExternalID
     * @return \FatTail\AdBook\Drop
     */
    public function setExternalID($ExternalID)
    {
      $this->ExternalID = $ExternalID;
      return $this;
    }

    /**
     * @return int
     */
    public function getGroupID()
    {
      return $this->GroupID;
    }

    /**
     * @param int $GroupID
     * @return \FatTail\AdBook\Drop
     */
    public function setGroupID($GroupID)
    {
      $this->GroupID = $GroupID;
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
     * @return \FatTail\AdBook\Drop
     */
    public function setImpressions($Impressions)
    {
      $this->Impressions = $Impressions;
      return $this;
    }

    /**
     * @return int
     */
    public function getMediaElementID()
    {
      return $this->MediaElementID;
    }

    /**
     * @param int $MediaElementID
     * @return \FatTail\AdBook\Drop
     */
    public function setMediaElementID($MediaElementID)
    {
      $this->MediaElementID = $MediaElementID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOTFSponsorship()
    {
      return $this->OTFSponsorship;
    }

    /**
     * @param boolean $OTFSponsorship
     * @return \FatTail\AdBook\Drop
     */
    public function setOTFSponsorship($OTFSponsorship)
    {
      $this->OTFSponsorship = $OTFSponsorship;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param int $OrderID
     * @return \FatTail\AdBook\Drop
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
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
     * @return \FatTail\AdBook\Drop
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
     * @return \FatTail\AdBook\Drop
     */
    public function setPriceTypeID($PriceTypeID)
    {
      $this->PriceTypeID = $PriceTypeID;
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
     * @return \FatTail\AdBook\Drop
     */
    public function setQuantity($Quantity)
    {
      $this->Quantity = $Quantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getServedByID()
    {
      return $this->ServedByID;
    }

    /**
     * @param int $ServedByID
     * @return \FatTail\AdBook\Drop
     */
    public function setServedByID($ServedByID)
    {
      $this->ServedByID = $ServedByID;
      return $this;
    }

    /**
     * @return int
     */
    public function getThirdPartyAdServerID()
    {
      return $this->ThirdPartyAdServerID;
    }

    /**
     * @param int $ThirdPartyAdServerID
     * @return \FatTail\AdBook\Drop
     */
    public function setThirdPartyAdServerID($ThirdPartyAdServerID)
    {
      $this->ThirdPartyAdServerID = $ThirdPartyAdServerID;
      return $this;
    }

    /**
     * @return int
     */
    public function getTrafficAdTypeID()
    {
      return $this->TrafficAdTypeID;
    }

    /**
     * @param int $TrafficAdTypeID
     * @return \FatTail\AdBook\Drop
     */
    public function setTrafficAdTypeID($TrafficAdTypeID)
    {
      $this->TrafficAdTypeID = $TrafficAdTypeID;
      return $this;
    }

    /**
     * @return int
     */
    public function getTrafficDeliveryMakeGoodID()
    {
      return $this->TrafficDeliveryMakeGoodID;
    }

    /**
     * @param int $TrafficDeliveryMakeGoodID
     * @return \FatTail\AdBook\Drop
     */
    public function setTrafficDeliveryMakeGoodID($TrafficDeliveryMakeGoodID)
    {
      $this->TrafficDeliveryMakeGoodID = $TrafficDeliveryMakeGoodID;
      return $this;
    }

    /**
     * @return int
     */
    public function getTrafficDeliverySchedulingID()
    {
      return $this->TrafficDeliverySchedulingID;
    }

    /**
     * @param int $TrafficDeliverySchedulingID
     * @return \FatTail\AdBook\Drop
     */
    public function setTrafficDeliverySchedulingID($TrafficDeliverySchedulingID)
    {
      $this->TrafficDeliverySchedulingID = $TrafficDeliverySchedulingID;
      return $this;
    }

    /**
     * @return int
     */
    public function getTrafficPriorityID()
    {
      return $this->TrafficPriorityID;
    }

    /**
     * @param int $TrafficPriorityID
     * @return \FatTail\AdBook\Drop
     */
    public function setTrafficPriorityID($TrafficPriorityID)
    {
      $this->TrafficPriorityID = $TrafficPriorityID;
      return $this;
    }

    /**
     * @return InventoryUpdateStatus
     */
    public function getUpdateStatus()
    {
      return $this->UpdateStatus;
    }

    /**
     * @param InventoryUpdateStatus $UpdateStatus
     * @return \FatTail\AdBook\Drop
     */
    public function setUpdateStatus($UpdateStatus)
    {
      $this->UpdateStatus = $UpdateStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getUpdateStatusText()
    {
      return $this->UpdateStatusText;
    }

    /**
     * @param string $UpdateStatusText
     * @return \FatTail\AdBook\Drop
     */
    public function setUpdateStatusText($UpdateStatusText)
    {
      $this->UpdateStatusText = $UpdateStatusText;
      return $this;
    }

    /**
     * @return ArrayOfDynamicPropertyValue
     */
    public function getDropDynamicProperties()
    {
      return $this->DropDynamicProperties;
    }

    /**
     * @param ArrayOfDynamicPropertyValue $DropDynamicProperties
     * @return \FatTail\AdBook\Drop
     */
    public function setDropDynamicProperties($DropDynamicProperties)
    {
      $this->DropDynamicProperties = $DropDynamicProperties;
      return $this;
    }

    /**
     * @return int
     */
    public function getFrequencyCap()
    {
      return $this->FrequencyCap;
    }

    /**
     * @param int $FrequencyCap
     * @return \FatTail\AdBook\Drop
     */
    public function setFrequencyCap($FrequencyCap)
    {
      $this->FrequencyCap = $FrequencyCap;
      return $this;
    }

    /**
     * @return ActiveStatus
     */
    public function getActiveStatus()
    {
      return $this->ActiveStatus;
    }

    /**
     * @param ActiveStatus $ActiveStatus
     * @return \FatTail\AdBook\Drop
     */
    public function setActiveStatus($ActiveStatus)
    {
      $this->ActiveStatus = $ActiveStatus;
      return $this;
    }

}

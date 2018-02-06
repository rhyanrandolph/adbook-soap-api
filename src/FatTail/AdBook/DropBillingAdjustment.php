<?php

namespace FatTail\AdBook;

class DropBillingAdjustment extends AdBookConnectEntity
{

    /**
     * @var int $DropID
     */
    protected $DropID = null;

    /**
     * @var int $Month
     */
    protected $Month = null;

    /**
     * @var int $Year
     */
    protected $Year = null;

    /**
     * @var ArrayOfDynamicPropertyValue $DropBillingAdjustmentDynamicProperties
     */
    protected $DropBillingAdjustmentDynamicProperties = null;

    
    public function __construct()
    {
    
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
     * @return \FatTail\AdBook\DropBillingAdjustment
     */
    public function setDropID($DropID)
    {
      $this->DropID = $DropID;
      return $this;
    }

    /**
     * @return int
     */
    public function getMonth()
    {
      return $this->Month;
    }

    /**
     * @param int $Month
     * @return \FatTail\AdBook\DropBillingAdjustment
     */
    public function setMonth($Month)
    {
      $this->Month = $Month;
      return $this;
    }

    /**
     * @return int
     */
    public function getYear()
    {
      return $this->Year;
    }

    /**
     * @param int $Year
     * @return \FatTail\AdBook\DropBillingAdjustment
     */
    public function setYear($Year)
    {
      $this->Year = $Year;
      return $this;
    }

    /**
     * @return ArrayOfDynamicPropertyValue
     */
    public function getDropBillingAdjustmentDynamicProperties()
    {
      return $this->DropBillingAdjustmentDynamicProperties;
    }

    /**
     * @param ArrayOfDynamicPropertyValue $DropBillingAdjustmentDynamicProperties
     * @return \FatTail\AdBook\DropBillingAdjustment
     */
    public function setDropBillingAdjustmentDynamicProperties($DropBillingAdjustmentDynamicProperties)
    {
      $this->DropBillingAdjustmentDynamicProperties = $DropBillingAdjustmentDynamicProperties;
      return $this;
    }

}

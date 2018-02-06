<?php

namespace FatTail\AdBook;

class DropBillingStatusInfo extends AdBookConnectEntity
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
     * @var DropBillingStatus $Status
     */
    protected $Status = null;

    /**
     * @var float $BilledAmount
     */
    protected $BilledAmount = null;

    /**
     * @var int $BilledQuantity
     */
    protected $BilledQuantity = null;

    
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
     * @return \FatTail\AdBook\DropBillingStatusInfo
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
     * @return \FatTail\AdBook\DropBillingStatusInfo
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
     * @return \FatTail\AdBook\DropBillingStatusInfo
     */
    public function setYear($Year)
    {
      $this->Year = $Year;
      return $this;
    }

    /**
     * @return DropBillingStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param DropBillingStatus $Status
     * @return \FatTail\AdBook\DropBillingStatusInfo
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return float
     */
    public function getBilledAmount()
    {
      return $this->BilledAmount;
    }

    /**
     * @param float $BilledAmount
     * @return \FatTail\AdBook\DropBillingStatusInfo
     */
    public function setBilledAmount($BilledAmount)
    {
      $this->BilledAmount = $BilledAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getBilledQuantity()
    {
      return $this->BilledQuantity;
    }

    /**
     * @param int $BilledQuantity
     * @return \FatTail\AdBook\DropBillingStatusInfo
     */
    public function setBilledQuantity($BilledQuantity)
    {
      $this->BilledQuantity = $BilledQuantity;
      return $this;
    }

}

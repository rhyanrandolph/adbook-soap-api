<?php

namespace FatTail\AdBook;

class DropBillingAdjustmentCreateResult
{

    /**
     * @var DropBillingAdjustment $DropBillingAdjustment
     */
    protected $DropBillingAdjustment = null;

    /**
     * @var DataAccessFault $Fault
     */
    protected $Fault = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DropBillingAdjustment
     */
    public function getDropBillingAdjustment()
    {
      return $this->DropBillingAdjustment;
    }

    /**
     * @param DropBillingAdjustment $DropBillingAdjustment
     * @return \FatTail\AdBook\DropBillingAdjustmentCreateResult
     */
    public function setDropBillingAdjustment($DropBillingAdjustment)
    {
      $this->DropBillingAdjustment = $DropBillingAdjustment;
      return $this;
    }

    /**
     * @return DataAccessFault
     */
    public function getFault()
    {
      return $this->Fault;
    }

    /**
     * @param DataAccessFault $Fault
     * @return \FatTail\AdBook\DropBillingAdjustmentCreateResult
     */
    public function setFault($Fault)
    {
      $this->Fault = $Fault;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param boolean $Success
     * @return \FatTail\AdBook\DropBillingAdjustmentCreateResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}

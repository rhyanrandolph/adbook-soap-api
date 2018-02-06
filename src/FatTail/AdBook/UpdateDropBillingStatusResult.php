<?php

namespace FatTail\AdBook;

class UpdateDropBillingStatusResult
{

    /**
     * @var DropBillingStatusInfo $DropBillingStatus
     */
    protected $DropBillingStatus = null;

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
     * @return DropBillingStatusInfo
     */
    public function getDropBillingStatus()
    {
      return $this->DropBillingStatus;
    }

    /**
     * @param DropBillingStatusInfo $DropBillingStatus
     * @return \FatTail\AdBook\UpdateDropBillingStatusResult
     */
    public function setDropBillingStatus($DropBillingStatus)
    {
      $this->DropBillingStatus = $DropBillingStatus;
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
     * @return \FatTail\AdBook\UpdateDropBillingStatusResult
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
     * @return \FatTail\AdBook\UpdateDropBillingStatusResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}

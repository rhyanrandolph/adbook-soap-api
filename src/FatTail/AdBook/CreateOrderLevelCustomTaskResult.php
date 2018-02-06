<?php

namespace FatTail\AdBook;

class CreateOrderLevelCustomTaskResult extends AdBookConnectEntity
{

    /**
     * @var OrderCustomTask $CustomTask
     */
    protected $CustomTask = null;

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
     * @return OrderCustomTask
     */
    public function getCustomTask()
    {
      return $this->CustomTask;
    }

    /**
     * @param OrderCustomTask $CustomTask
     * @return \FatTail\AdBook\CreateOrderLevelCustomTaskResult
     */
    public function setCustomTask($CustomTask)
    {
      $this->CustomTask = $CustomTask;
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
     * @return \FatTail\AdBook\CreateOrderLevelCustomTaskResult
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
     * @return \FatTail\AdBook\CreateOrderLevelCustomTaskResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}

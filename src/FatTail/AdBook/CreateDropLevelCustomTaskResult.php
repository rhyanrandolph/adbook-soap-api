<?php

namespace FatTail\AdBook;

class CreateDropLevelCustomTaskResult extends AdBookConnectEntity
{

    /**
     * @var DropCustomTask $CustomTask
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
     * @return DropCustomTask
     */
    public function getCustomTask()
    {
      return $this->CustomTask;
    }

    /**
     * @param DropCustomTask $CustomTask
     * @return \FatTail\AdBook\CreateDropLevelCustomTaskResult
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
     * @return \FatTail\AdBook\CreateDropLevelCustomTaskResult
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
     * @return \FatTail\AdBook\CreateDropLevelCustomTaskResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}

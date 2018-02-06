<?php

namespace FatTail\AdBook;

class DropCreateResult extends AdBookConnectEntity
{

    /**
     * @var Drop $Drop
     */
    protected $Drop = null;

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
     * @return Drop
     */
    public function getDrop()
    {
      return $this->Drop;
    }

    /**
     * @param Drop $Drop
     * @return \FatTail\AdBook\DropCreateResult
     */
    public function setDrop($Drop)
    {
      $this->Drop = $Drop;
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
     * @return \FatTail\AdBook\DropCreateResult
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
     * @return \FatTail\AdBook\DropCreateResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}

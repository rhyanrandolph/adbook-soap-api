<?php

namespace FatTail\AdBook;

class DataAccessFault extends AdBookConnectEntity
{

    /**
     * @var ArrayOfstring $FaultMessges
     */
    protected $FaultMessges = null;

    /**
     * @var DataAccessFaultObjectType $FaultObjectType
     */
    protected $FaultObjectType = null;

    /**
     * @var DataAccessFaultOperationType $FaultOperationType
     */
    protected $FaultOperationType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfstring
     */
    public function getFaultMessges()
    {
      return $this->FaultMessges;
    }

    /**
     * @param ArrayOfstring $FaultMessges
     * @return \FatTail\AdBook\DataAccessFault
     */
    public function setFaultMessges($FaultMessges)
    {
      $this->FaultMessges = $FaultMessges;
      return $this;
    }

    /**
     * @return DataAccessFaultObjectType
     */
    public function getFaultObjectType()
    {
      return $this->FaultObjectType;
    }

    /**
     * @param DataAccessFaultObjectType $FaultObjectType
     * @return \FatTail\AdBook\DataAccessFault
     */
    public function setFaultObjectType($FaultObjectType)
    {
      $this->FaultObjectType = $FaultObjectType;
      return $this;
    }

    /**
     * @return DataAccessFaultOperationType
     */
    public function getFaultOperationType()
    {
      return $this->FaultOperationType;
    }

    /**
     * @param DataAccessFaultOperationType $FaultOperationType
     * @return \FatTail\AdBook\DataAccessFault
     */
    public function setFaultOperationType($FaultOperationType)
    {
      $this->FaultOperationType = $FaultOperationType;
      return $this;
    }

}

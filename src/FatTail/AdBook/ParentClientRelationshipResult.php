<?php

namespace FatTail\AdBook;

class ParentClientRelationshipResult
{

    /**
     * @var DataAccessFault $Fault
     */
    protected $Fault = null;

    /**
     * @var ParentClientRelationship $ParentClientRelationship
     */
    protected $ParentClientRelationship = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    
    public function __construct()
    {
    
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
     * @return \FatTail\AdBook\ParentClientRelationshipResult
     */
    public function setFault($Fault)
    {
      $this->Fault = $Fault;
      return $this;
    }

    /**
     * @return ParentClientRelationship
     */
    public function getParentClientRelationship()
    {
      return $this->ParentClientRelationship;
    }

    /**
     * @param ParentClientRelationship $ParentClientRelationship
     * @return \FatTail\AdBook\ParentClientRelationshipResult
     */
    public function setParentClientRelationship($ParentClientRelationship)
    {
      $this->ParentClientRelationship = $ParentClientRelationship;
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
     * @return \FatTail\AdBook\ParentClientRelationshipResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}

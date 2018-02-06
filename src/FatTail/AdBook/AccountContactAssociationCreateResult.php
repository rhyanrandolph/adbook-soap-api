<?php

namespace FatTail\AdBook;

class AccountContactAssociationCreateResult extends AdBookConnectEntity
{

    /**
     * @var AccountContactAssociation $AccountContactAssociation
     */
    protected $AccountContactAssociation = null;

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
     * @return AccountContactAssociation
     */
    public function getAccountContactAssociation()
    {
      return $this->AccountContactAssociation;
    }

    /**
     * @param AccountContactAssociation $AccountContactAssociation
     * @return \FatTail\AdBook\AccountContactAssociationCreateResult
     */
    public function setAccountContactAssociation($AccountContactAssociation)
    {
      $this->AccountContactAssociation = $AccountContactAssociation;
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
     * @return \FatTail\AdBook\AccountContactAssociationCreateResult
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
     * @return \FatTail\AdBook\AccountContactAssociationCreateResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}

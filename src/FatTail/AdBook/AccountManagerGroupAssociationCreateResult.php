<?php

namespace FatTail\AdBook;

class AccountManagerGroupAssociationCreateResult extends AdBookConnectEntity
{

    /**
     * @var AccountManagerGroupAssociation $AccountManagerGroupAssociation
     */
    protected $AccountManagerGroupAssociation = null;

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
     * @return AccountManagerGroupAssociation
     */
    public function getAccountManagerGroupAssociation()
    {
      return $this->AccountManagerGroupAssociation;
    }

    /**
     * @param AccountManagerGroupAssociation $AccountManagerGroupAssociation
     * @return \FatTail\AdBook\AccountManagerGroupAssociationCreateResult
     */
    public function setAccountManagerGroupAssociation($AccountManagerGroupAssociation)
    {
      $this->AccountManagerGroupAssociation = $AccountManagerGroupAssociation;
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
     * @return \FatTail\AdBook\AccountManagerGroupAssociationCreateResult
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
     * @return \FatTail\AdBook\AccountManagerGroupAssociationCreateResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}

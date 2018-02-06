<?php

namespace FatTail\AdBook;

class AccountManagerAssociationDeleteResult extends AdBookConnectEntity
{

    /**
     * @var AccountManagerAssociation $AccountManagerAssociation
     */
    protected $AccountManagerAssociation = null;

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
     * @return AccountManagerAssociation
     */
    public function getAccountManagerAssociation()
    {
      return $this->AccountManagerAssociation;
    }

    /**
     * @param AccountManagerAssociation $AccountManagerAssociation
     * @return \FatTail\AdBook\AccountManagerAssociationDeleteResult
     */
    public function setAccountManagerAssociation($AccountManagerAssociation)
    {
      $this->AccountManagerAssociation = $AccountManagerAssociation;
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
     * @return \FatTail\AdBook\AccountManagerAssociationDeleteResult
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
     * @return \FatTail\AdBook\AccountManagerAssociationDeleteResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}

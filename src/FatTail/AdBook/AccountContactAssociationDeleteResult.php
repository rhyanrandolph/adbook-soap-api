<?php

namespace FatTail\AdBook;

class AccountContactAssociationDeleteResult extends AdBookConnectEntity
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
     * @return \FatTail\AdBook\AccountContactAssociationDeleteResult
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
     * @return \FatTail\AdBook\AccountContactAssociationDeleteResult
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
     * @return \FatTail\AdBook\AccountContactAssociationDeleteResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}

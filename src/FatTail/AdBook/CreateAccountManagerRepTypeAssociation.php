<?php

namespace FatTail\AdBook;

class CreateAccountManagerRepTypeAssociation
{

    /**
     * @var ArrayOfAccountManagerGroupAssociation $accountManagerGroupAssociationList
     */
    protected $accountManagerGroupAssociationList = null;

    /**
     * @param ArrayOfAccountManagerGroupAssociation $accountManagerGroupAssociationList
     */
    public function __construct($accountManagerGroupAssociationList)
    {
      $this->accountManagerGroupAssociationList = $accountManagerGroupAssociationList;
    }

    /**
     * @return ArrayOfAccountManagerGroupAssociation
     */
    public function getAccountManagerGroupAssociationList()
    {
      return $this->accountManagerGroupAssociationList;
    }

    /**
     * @param ArrayOfAccountManagerGroupAssociation $accountManagerGroupAssociationList
     * @return \FatTail\AdBook\CreateAccountManagerRepTypeAssociation
     */
    public function setAccountManagerGroupAssociationList($accountManagerGroupAssociationList)
    {
      $this->accountManagerGroupAssociationList = $accountManagerGroupAssociationList;
      return $this;
    }

}

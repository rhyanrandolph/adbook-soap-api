<?php

namespace FatTail\AdBook;

class RemoveAccountManagerAssociation
{

    /**
     * @var ArrayOfAccountManagerAssociation $accountManagerAssociationsList
     */
    protected $accountManagerAssociationsList = null;

    /**
     * @param ArrayOfAccountManagerAssociation $accountManagerAssociationsList
     */
    public function __construct($accountManagerAssociationsList)
    {
      $this->accountManagerAssociationsList = $accountManagerAssociationsList;
    }

    /**
     * @return ArrayOfAccountManagerAssociation
     */
    public function getAccountManagerAssociationsList()
    {
      return $this->accountManagerAssociationsList;
    }

    /**
     * @param ArrayOfAccountManagerAssociation $accountManagerAssociationsList
     * @return \FatTail\AdBook\RemoveAccountManagerAssociation
     */
    public function setAccountManagerAssociationsList($accountManagerAssociationsList)
    {
      $this->accountManagerAssociationsList = $accountManagerAssociationsList;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class CreateAccountContactAssociation
{

    /**
     * @var ArrayOfAccountContactAssociation $accountContactList
     */
    protected $accountContactList = null;

    /**
     * @param ArrayOfAccountContactAssociation $accountContactList
     */
    public function __construct($accountContactList)
    {
      $this->accountContactList = $accountContactList;
    }

    /**
     * @return ArrayOfAccountContactAssociation
     */
    public function getAccountContactList()
    {
      return $this->accountContactList;
    }

    /**
     * @param ArrayOfAccountContactAssociation $accountContactList
     * @return \FatTail\AdBook\CreateAccountContactAssociation
     */
    public function setAccountContactList($accountContactList)
    {
      $this->accountContactList = $accountContactList;
      return $this;
    }

}

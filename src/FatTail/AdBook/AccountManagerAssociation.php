<?php

namespace FatTail\AdBook;

class AccountManagerAssociation extends AdBookConnectEntity
{

    /**
     * @var int $ClientID
     */
    protected $ClientID = null;

    /**
     * @var int $ContactID
     */
    protected $ContactID = null;

    /**
     * @param int $ClientID
     * @param int $ContactID
     */
    public function __construct($ClientID, $ContactID)
    {
      $this->ClientID = $ClientID;
      $this->ContactID = $ContactID;
    }

    /**
     * @return int
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param int $ClientID
     * @return \FatTail\AdBook\AccountManagerAssociation
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return int
     */
    public function getContactID()
    {
      return $this->ContactID;
    }

    /**
     * @param int $ContactID
     * @return \FatTail\AdBook\AccountManagerAssociation
     */
    public function setContactID($ContactID)
    {
      $this->ContactID = $ContactID;
      return $this;
    }

}

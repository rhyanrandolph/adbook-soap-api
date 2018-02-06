<?php

namespace FatTail\AdBook;

class AccountManagerGroupAssociation extends AdBookConnectEntity
{

    /**
     * @var int $ClientID
     */
    protected $ClientID = null;

    /**
     * @var int $RepTypeID
     */
    protected $RepTypeID = null;

    /**
     * @param int $ClientID
     * @param int $RepTypeID
     */
    public function __construct($ClientID, $RepTypeID)
    {
      $this->ClientID = $ClientID;
      $this->RepTypeID = $RepTypeID;
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
     * @return \FatTail\AdBook\AccountManagerGroupAssociation
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return int
     */
    public function getRepTypeID()
    {
      return $this->RepTypeID;
    }

    /**
     * @param int $RepTypeID
     * @return \FatTail\AdBook\AccountManagerGroupAssociation
     */
    public function setRepTypeID($RepTypeID)
    {
      $this->RepTypeID = $RepTypeID;
      return $this;
    }

}

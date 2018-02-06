<?php

namespace FatTail\AdBook;

class AccountContactAssociation extends AdBookConnectEntity
{

    /**
     * @var int $AccountID
     */
    protected $AccountID = null;

    /**
     * @var int $ContactID
     */
    protected $ContactID = null;

    /**
     * @param int $AccountID
     * @param int $ContactID
     */
    public function __construct($AccountID, $ContactID)
    {
      $this->AccountID = $AccountID;
      $this->ContactID = $ContactID;
    }

    /**
     * @return int
     */
    public function getAccountID()
    {
      return $this->AccountID;
    }

    /**
     * @param int $AccountID
     * @return \FatTail\AdBook\AccountContactAssociation
     */
    public function setAccountID($AccountID)
    {
      $this->AccountID = $AccountID;
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
     * @return \FatTail\AdBook\AccountContactAssociation
     */
    public function setContactID($ContactID)
    {
      $this->ContactID = $ContactID;
      return $this;
    }

}

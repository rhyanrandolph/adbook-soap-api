<?php

namespace FatTail\AdBook;

class ClientContact extends Contact
{

    /**
     * @var int $ClientID
     */
    protected $ClientID = null;

    /**
     * @var ArrayOfContactType $ContactType
     */
    protected $ContactType = null;

    /**
     * @var string $ContactCode
     */
    protected $ContactCode = null;

    /**
     * @param int $ClientID
     */
    public function __construct($ClientID)
    {
      parent::__construct();
      $this->ClientID = $ClientID;
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
     * @return \FatTail\AdBook\ClientContact
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return ArrayOfContactType
     */
    public function getContactType()
    {
      return $this->ContactType;
    }

    /**
     * @param ArrayOfContactType $ContactType
     * @return \FatTail\AdBook\ClientContact
     */
    public function setContactType($ContactType)
    {
      $this->ContactType = $ContactType;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactCode()
    {
      return $this->ContactCode;
    }

    /**
     * @param string $ContactCode
     * @return \FatTail\AdBook\ClientContact
     */
    public function setContactCode($ContactCode)
    {
      $this->ContactCode = $ContactCode;
      return $this;
    }

}

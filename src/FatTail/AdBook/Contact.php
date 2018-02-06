<?php

namespace FatTail\AdBook;

class Contact extends AdBookConnectEntity
{

    /**
     * @var string $Address
     */
    protected $Address = null;

    /**
     * @var string $City
     */
    protected $City = null;

    /**
     * @var int $ContactID
     */
    protected $ContactID = null;

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $ExternalID
     */
    protected $ExternalID = null;

    /**
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $PostalCode
     */
    protected $PostalCode = null;

    /**
     * @var string $State
     */
    protected $State = null;

    /**
     * @var string $CRMID
     */
    protected $CRMID = null;

    /**
     * @var string $LocationCode
     */
    protected $LocationCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAddress()
    {
      return $this->Address;
    }

    /**
     * @param string $Address
     * @return \FatTail\AdBook\Contact
     */
    public function setAddress($Address)
    {
      $this->Address = $Address;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->City;
    }

    /**
     * @param string $City
     * @return \FatTail\AdBook\Contact
     */
    public function setCity($City)
    {
      $this->City = $City;
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
     * @return \FatTail\AdBook\Contact
     */
    public function setContactID($ContactID)
    {
      $this->ContactID = $ContactID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \FatTail\AdBook\Contact
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \FatTail\AdBook\Contact
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalID()
    {
      return $this->ExternalID;
    }

    /**
     * @param string $ExternalID
     * @return \FatTail\AdBook\Contact
     */
    public function setExternalID($ExternalID)
    {
      $this->ExternalID = $ExternalID;
      return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
      return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return \FatTail\AdBook\Contact
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \FatTail\AdBook\Contact
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \FatTail\AdBook\Contact
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \FatTail\AdBook\Contact
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->PostalCode;
    }

    /**
     * @param string $PostalCode
     * @return \FatTail\AdBook\Contact
     */
    public function setPostalCode($PostalCode)
    {
      $this->PostalCode = $PostalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param string $State
     * @return \FatTail\AdBook\Contact
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getCRMID()
    {
      return $this->CRMID;
    }

    /**
     * @param string $CRMID
     * @return \FatTail\AdBook\Contact
     */
    public function setCRMID($CRMID)
    {
      $this->CRMID = $CRMID;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocationCode()
    {
      return $this->LocationCode;
    }

    /**
     * @param string $LocationCode
     * @return \FatTail\AdBook\Contact
     */
    public function setLocationCode($LocationCode)
    {
      $this->LocationCode = $LocationCode;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class Account extends AdBookConnectEntity
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
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var string $ExternalID
     */
    protected $ExternalID = null;

    /**
     * @var string $Fax
     */
    protected $Fax = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Notes
     */
    protected $Notes = null;

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
     * @var string $URL
     */
    protected $URL = null;

    /**
     * @var string $CRMID
     */
    protected $CRMID = null;

    /**
     * @var boolean $IsCreditRisk
     */
    protected $IsCreditRisk = null;

    
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
     * @return \FatTail\AdBook\Account
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
     * @return \FatTail\AdBook\Account
     */
    public function setCity($City)
    {
      $this->City = $City;
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
     * @return \FatTail\AdBook\Account
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
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
     * @return \FatTail\AdBook\Account
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
     * @return \FatTail\AdBook\Account
     */
    public function setFax($Fax)
    {
      $this->Fax = $Fax;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FatTail\AdBook\Account
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->Notes;
    }

    /**
     * @param string $Notes
     * @return \FatTail\AdBook\Account
     */
    public function setNotes($Notes)
    {
      $this->Notes = $Notes;
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
     * @return \FatTail\AdBook\Account
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
     * @return \FatTail\AdBook\Account
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
     * @return \FatTail\AdBook\Account
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return string
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param string $URL
     * @return \FatTail\AdBook\Account
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
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
     * @return \FatTail\AdBook\Account
     */
    public function setCRMID($CRMID)
    {
      $this->CRMID = $CRMID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCreditRisk()
    {
      return $this->IsCreditRisk;
    }

    /**
     * @param boolean $IsCreditRisk
     * @return \FatTail\AdBook\Account
     */
    public function setIsCreditRisk($IsCreditRisk)
    {
      $this->IsCreditRisk = $IsCreditRisk;
      return $this;
    }

}

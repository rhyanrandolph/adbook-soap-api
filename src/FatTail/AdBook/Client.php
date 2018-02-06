<?php

namespace FatTail\AdBook;

class Client extends Account
{

    /**
     * @var int $ClientID
     */
    protected $ClientID = null;

    /**
     * @var string $CustomerCode
     */
    protected $CustomerCode = null;

    /**
     * @var int $ParentClientID
     */
    protected $ParentClientID = null;

    /**
     * @var ArrayOfDynamicPropertyValue $ClientDynamicProperties
     */
    protected $ClientDynamicProperties = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \FatTail\AdBook\Client
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerCode()
    {
      return $this->CustomerCode;
    }

    /**
     * @param string $CustomerCode
     * @return \FatTail\AdBook\Client
     */
    public function setCustomerCode($CustomerCode)
    {
      $this->CustomerCode = $CustomerCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentClientID()
    {
      return $this->ParentClientID;
    }

    /**
     * @param int $ParentClientID
     * @return \FatTail\AdBook\Client
     */
    public function setParentClientID($ParentClientID)
    {
      $this->ParentClientID = $ParentClientID;
      return $this;
    }

    /**
     * @return ArrayOfDynamicPropertyValue
     */
    public function getClientDynamicProperties()
    {
      return $this->ClientDynamicProperties;
    }

    /**
     * @param ArrayOfDynamicPropertyValue $ClientDynamicProperties
     * @return \FatTail\AdBook\Client
     */
    public function setClientDynamicProperties($ClientDynamicProperties)
    {
      $this->ClientDynamicProperties = $ClientDynamicProperties;
      return $this;
    }

}

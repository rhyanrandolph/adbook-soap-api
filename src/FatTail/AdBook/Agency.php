<?php

namespace FatTail\AdBook;

class Agency extends Account
{

    /**
     * @var int $AgencyID
     */
    protected $AgencyID = null;

    /**
     * @var string $CustomerCode
     */
    protected $CustomerCode = null;

    /**
     * @var int $ParentAgencyID
     */
    protected $ParentAgencyID = null;

    /**
     * @var ArrayOfDynamicPropertyValue $AgencyDynamicProperties
     */
    protected $AgencyDynamicProperties = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getAgencyID()
    {
      return $this->AgencyID;
    }

    /**
     * @param int $AgencyID
     * @return \FatTail\AdBook\Agency
     */
    public function setAgencyID($AgencyID)
    {
      $this->AgencyID = $AgencyID;
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
     * @return \FatTail\AdBook\Agency
     */
    public function setCustomerCode($CustomerCode)
    {
      $this->CustomerCode = $CustomerCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentAgencyID()
    {
      return $this->ParentAgencyID;
    }

    /**
     * @param int $ParentAgencyID
     * @return \FatTail\AdBook\Agency
     */
    public function setParentAgencyID($ParentAgencyID)
    {
      $this->ParentAgencyID = $ParentAgencyID;
      return $this;
    }

    /**
     * @return ArrayOfDynamicPropertyValue
     */
    public function getAgencyDynamicProperties()
    {
      return $this->AgencyDynamicProperties;
    }

    /**
     * @param ArrayOfDynamicPropertyValue $AgencyDynamicProperties
     * @return \FatTail\AdBook\Agency
     */
    public function setAgencyDynamicProperties($AgencyDynamicProperties)
    {
      $this->AgencyDynamicProperties = $AgencyDynamicProperties;
      return $this;
    }

}

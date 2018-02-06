<?php

namespace FatTail\AdBook;

class Creative
{

    /**
     * @var int $CreativeID
     */
    protected $CreativeID = null;

    /**
     * @var ArrayOfDynamicPropertyValue $CreativeDynamicProperties
     */
    protected $CreativeDynamicProperties = null;

    /**
     * @var base64Binary $CreativeData
     */
    protected $CreativeData = null;

    /**
     * @var int $ClientID
     */
    protected $ClientID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCreativeID()
    {
      return $this->CreativeID;
    }

    /**
     * @param int $CreativeID
     * @return \FatTail\AdBook\Creative
     */
    public function setCreativeID($CreativeID)
    {
      $this->CreativeID = $CreativeID;
      return $this;
    }

    /**
     * @return ArrayOfDynamicPropertyValue
     */
    public function getCreativeDynamicProperties()
    {
      return $this->CreativeDynamicProperties;
    }

    /**
     * @param ArrayOfDynamicPropertyValue $CreativeDynamicProperties
     * @return \FatTail\AdBook\Creative
     */
    public function setCreativeDynamicProperties($CreativeDynamicProperties)
    {
      $this->CreativeDynamicProperties = $CreativeDynamicProperties;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getCreativeData()
    {
      return $this->CreativeData;
    }

    /**
     * @param base64Binary $CreativeData
     * @return \FatTail\AdBook\Creative
     */
    public function setCreativeData($CreativeData)
    {
      $this->CreativeData = $CreativeData;
      return $this;
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
     * @return \FatTail\AdBook\Creative
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

}

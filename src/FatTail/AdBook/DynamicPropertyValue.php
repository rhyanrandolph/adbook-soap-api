<?php

namespace FatTail\AdBook;

class DynamicPropertyValue extends AdBookConnectEntity
{

    /**
     * @var int $DynamicPropertyID
     */
    protected $DynamicPropertyID = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getDynamicPropertyID()
    {
      return $this->DynamicPropertyID;
    }

    /**
     * @param int $DynamicPropertyID
     * @return \FatTail\AdBook\DynamicPropertyValue
     */
    public function setDynamicPropertyID($DynamicPropertyID)
    {
      $this->DynamicPropertyID = $DynamicPropertyID;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \FatTail\AdBook\DynamicPropertyValue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

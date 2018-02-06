<?php

namespace FatTail\AdBook;

class DynamicProperty extends AdBookConnectEntity
{

    /**
     * @var int $DynamicPropertyID
     */
    protected $DynamicPropertyID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var DynamicPropertyType $Type
     */
    protected $Type = null;

    
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
     * @return \FatTail\AdBook\DynamicProperty
     */
    public function setDynamicPropertyID($DynamicPropertyID)
    {
      $this->DynamicPropertyID = $DynamicPropertyID;
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
     * @return \FatTail\AdBook\DynamicProperty
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return DynamicPropertyType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param DynamicPropertyType $Type
     * @return \FatTail\AdBook\DynamicProperty
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}

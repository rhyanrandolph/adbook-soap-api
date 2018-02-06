<?php

namespace FatTail\AdBook;

class TargetKey extends AdBookConnectEntity
{

    /**
     * @var string $DisplayName
     */
    protected $DisplayName = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->DisplayName;
    }

    /**
     * @param string $DisplayName
     * @return \FatTail\AdBook\TargetKey
     */
    public function setDisplayName($DisplayName)
    {
      $this->DisplayName = $DisplayName;
      return $this;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \FatTail\AdBook\TargetKey
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \FatTail\AdBook\TargetKey
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}

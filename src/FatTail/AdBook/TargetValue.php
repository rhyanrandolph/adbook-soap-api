<?php

namespace FatTail\AdBook;

class TargetValue extends AdBookConnectEntity
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
     * @var int $KeyId
     */
    protected $KeyId = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var MatchTypes $TargetValueMatchType
     */
    protected $TargetValueMatchType = null;

    
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
     * @return \FatTail\AdBook\TargetValue
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
     * @return \FatTail\AdBook\TargetValue
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return int
     */
    public function getKeyId()
    {
      return $this->KeyId;
    }

    /**
     * @param int $KeyId
     * @return \FatTail\AdBook\TargetValue
     */
    public function setKeyId($KeyId)
    {
      $this->KeyId = $KeyId;
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
     * @return \FatTail\AdBook\TargetValue
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return MatchTypes
     */
    public function getTargetValueMatchType()
    {
      return $this->TargetValueMatchType;
    }

    /**
     * @param MatchTypes $TargetValueMatchType
     * @return \FatTail\AdBook\TargetValue
     */
    public function setTargetValueMatchType($TargetValueMatchType)
    {
      $this->TargetValueMatchType = $TargetValueMatchType;
      return $this;
    }

}

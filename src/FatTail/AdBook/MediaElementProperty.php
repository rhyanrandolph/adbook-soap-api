<?php

namespace FatTail\AdBook;

class MediaElementProperty extends AdBookConnectEntity
{

    /**
     * @var int $MediaElementPropertyID
     */
    protected $MediaElementPropertyID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var MediaElementPropertyType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getMediaElementPropertyID()
    {
      return $this->MediaElementPropertyID;
    }

    /**
     * @param int $MediaElementPropertyID
     * @return \FatTail\AdBook\MediaElementProperty
     */
    public function setMediaElementPropertyID($MediaElementPropertyID)
    {
      $this->MediaElementPropertyID = $MediaElementPropertyID;
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
     * @return \FatTail\AdBook\MediaElementProperty
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return MediaElementPropertyType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param MediaElementPropertyType $Type
     * @return \FatTail\AdBook\MediaElementProperty
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}

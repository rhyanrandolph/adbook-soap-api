<?php

namespace FatTail\AdBook;

class MediaElementPropertyValue extends AdBookConnectEntity
{

    /**
     * @var int $MediaElementPropertyID
     */
    protected $MediaElementPropertyID = null;

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
    public function getMediaElementPropertyID()
    {
      return $this->MediaElementPropertyID;
    }

    /**
     * @param int $MediaElementPropertyID
     * @return \FatTail\AdBook\MediaElementPropertyValue
     */
    public function setMediaElementPropertyID($MediaElementPropertyID)
    {
      $this->MediaElementPropertyID = $MediaElementPropertyID;
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
     * @return \FatTail\AdBook\MediaElementPropertyValue
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

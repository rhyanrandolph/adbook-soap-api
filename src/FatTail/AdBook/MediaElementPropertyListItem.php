<?php

namespace FatTail\AdBook;

class MediaElementPropertyListItem extends AdBookConnectEntity
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \FatTail\AdBook\MediaElementPropertyListItem
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return int
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param int $Value
     * @return \FatTail\AdBook\MediaElementPropertyListItem
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class DynamicPropertyListElement extends AdBookConnectEntity
{

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var int $Value
     */
    protected $Value = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    
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
     * @return \FatTail\AdBook\DynamicPropertyListElement
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
     * @return \FatTail\AdBook\DynamicPropertyListElement
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \FatTail\AdBook\DynamicPropertyListElement
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class PriceType extends AdBookConnectEntity
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $PriceTypeID
     */
    protected $PriceTypeID = null;

    
    public function __construct()
    {
    
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
     * @return \FatTail\AdBook\PriceType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriceTypeID()
    {
      return $this->PriceTypeID;
    }

    /**
     * @param int $PriceTypeID
     * @return \FatTail\AdBook\PriceType
     */
    public function setPriceTypeID($PriceTypeID)
    {
      $this->PriceTypeID = $PriceTypeID;
      return $this;
    }

}

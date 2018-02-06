<?php

namespace FatTail\AdBook;

class PositionPricing extends AdBookConnectEntity
{

    /**
     * @var int $MediaElementID
     */
    protected $MediaElementID = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var int $PriceTypeID
     */
    protected $PriceTypeID = null;

    /**
     * @var int $RateCardNameID
     */
    protected $RateCardNameID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getMediaElementID()
    {
      return $this->MediaElementID;
    }

    /**
     * @param int $MediaElementID
     * @return \FatTail\AdBook\PositionPricing
     */
    public function setMediaElementID($MediaElementID)
    {
      $this->MediaElementID = $MediaElementID;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \FatTail\AdBook\PositionPricing
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
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
     * @return \FatTail\AdBook\PositionPricing
     */
    public function setPriceTypeID($PriceTypeID)
    {
      $this->PriceTypeID = $PriceTypeID;
      return $this;
    }

    /**
     * @return int
     */
    public function getRateCardNameID()
    {
      return $this->RateCardNameID;
    }

    /**
     * @param int $RateCardNameID
     * @return \FatTail\AdBook\PositionPricing
     */
    public function setRateCardNameID($RateCardNameID)
    {
      $this->RateCardNameID = $RateCardNameID;
      return $this;
    }

}

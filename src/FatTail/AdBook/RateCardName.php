<?php

namespace FatTail\AdBook;

class RateCardName extends AdBookConnectEntity
{

    /**
     * @var boolean $DefaultRateCard
     */
    protected $DefaultRateCard = null;

    /**
     * @var string $RateCardDescription
     */
    protected $RateCardDescription = null;

    /**
     * @var int $RateCardNameID
     */
    protected $RateCardNameID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getDefaultRateCard()
    {
      return $this->DefaultRateCard;
    }

    /**
     * @param boolean $DefaultRateCard
     * @return \FatTail\AdBook\RateCardName
     */
    public function setDefaultRateCard($DefaultRateCard)
    {
      $this->DefaultRateCard = $DefaultRateCard;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateCardDescription()
    {
      return $this->RateCardDescription;
    }

    /**
     * @param string $RateCardDescription
     * @return \FatTail\AdBook\RateCardName
     */
    public function setRateCardDescription($RateCardDescription)
    {
      $this->RateCardDescription = $RateCardDescription;
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
     * @return \FatTail\AdBook\RateCardName
     */
    public function setRateCardNameID($RateCardNameID)
    {
      $this->RateCardNameID = $RateCardNameID;
      return $this;
    }

}

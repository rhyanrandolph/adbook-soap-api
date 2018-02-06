<?php

namespace FatTail\AdBook;

class GetPositionPricingForRateCard
{

    /**
     * @var int $rateCardNameID
     */
    protected $rateCardNameID = null;

    /**
     * @param int $rateCardNameID
     */
    public function __construct($rateCardNameID)
    {
      $this->rateCardNameID = $rateCardNameID;
    }

    /**
     * @return int
     */
    public function getRateCardNameID()
    {
      return $this->rateCardNameID;
    }

    /**
     * @param int $rateCardNameID
     * @return \FatTail\AdBook\GetPositionPricingForRateCard
     */
    public function setRateCardNameID($rateCardNameID)
    {
      $this->rateCardNameID = $rateCardNameID;
      return $this;
    }

}

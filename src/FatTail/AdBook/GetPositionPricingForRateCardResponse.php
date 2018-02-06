<?php

namespace FatTail\AdBook;

class GetPositionPricingForRateCardResponse
{

    /**
     * @var ArrayOfPositionPricing $GetPositionPricingForRateCardResult
     */
    protected $GetPositionPricingForRateCardResult = null;

    /**
     * @param ArrayOfPositionPricing $GetPositionPricingForRateCardResult
     */
    public function __construct($GetPositionPricingForRateCardResult)
    {
      $this->GetPositionPricingForRateCardResult = $GetPositionPricingForRateCardResult;
    }

    /**
     * @return ArrayOfPositionPricing
     */
    public function getGetPositionPricingForRateCardResult()
    {
      return $this->GetPositionPricingForRateCardResult;
    }

    /**
     * @param ArrayOfPositionPricing $GetPositionPricingForRateCardResult
     * @return \FatTail\AdBook\GetPositionPricingForRateCardResponse
     */
    public function setGetPositionPricingForRateCardResult($GetPositionPricingForRateCardResult)
    {
      $this->GetPositionPricingForRateCardResult = $GetPositionPricingForRateCardResult;
      return $this;
    }

}

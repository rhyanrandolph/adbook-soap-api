<?php

namespace FatTail\AdBook;

class GetPositionPricingForRateCardByPositionResponse
{

    /**
     * @var ArrayOfPositionPricing $GetPositionPricingForRateCardByPositionResult
     */
    protected $GetPositionPricingForRateCardByPositionResult = null;

    /**
     * @param ArrayOfPositionPricing $GetPositionPricingForRateCardByPositionResult
     */
    public function __construct($GetPositionPricingForRateCardByPositionResult)
    {
      $this->GetPositionPricingForRateCardByPositionResult = $GetPositionPricingForRateCardByPositionResult;
    }

    /**
     * @return ArrayOfPositionPricing
     */
    public function getGetPositionPricingForRateCardByPositionResult()
    {
      return $this->GetPositionPricingForRateCardByPositionResult;
    }

    /**
     * @param ArrayOfPositionPricing $GetPositionPricingForRateCardByPositionResult
     * @return \FatTail\AdBook\GetPositionPricingForRateCardByPositionResponse
     */
    public function setGetPositionPricingForRateCardByPositionResult($GetPositionPricingForRateCardByPositionResult)
    {
      $this->GetPositionPricingForRateCardByPositionResult = $GetPositionPricingForRateCardByPositionResult;
      return $this;
    }

}

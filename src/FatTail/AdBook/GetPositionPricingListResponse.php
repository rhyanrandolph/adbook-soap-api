<?php

namespace FatTail\AdBook;

class GetPositionPricingListResponse
{

    /**
     * @var ArrayOfPositionPricing $GetPositionPricingListResult
     */
    protected $GetPositionPricingListResult = null;

    /**
     * @param ArrayOfPositionPricing $GetPositionPricingListResult
     */
    public function __construct($GetPositionPricingListResult)
    {
      $this->GetPositionPricingListResult = $GetPositionPricingListResult;
    }

    /**
     * @return ArrayOfPositionPricing
     */
    public function getGetPositionPricingListResult()
    {
      return $this->GetPositionPricingListResult;
    }

    /**
     * @param ArrayOfPositionPricing $GetPositionPricingListResult
     * @return \FatTail\AdBook\GetPositionPricingListResponse
     */
    public function setGetPositionPricingListResult($GetPositionPricingListResult)
    {
      $this->GetPositionPricingListResult = $GetPositionPricingListResult;
      return $this;
    }

}

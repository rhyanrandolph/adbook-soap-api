<?php

namespace FatTail\AdBook;

class GetDropBillingAdjustmentListResponse
{

    /**
     * @var ArrayOfDropBillingAdjustment $GetDropBillingAdjustmentListResult
     */
    protected $GetDropBillingAdjustmentListResult = null;

    /**
     * @param ArrayOfDropBillingAdjustment $GetDropBillingAdjustmentListResult
     */
    public function __construct($GetDropBillingAdjustmentListResult)
    {
      $this->GetDropBillingAdjustmentListResult = $GetDropBillingAdjustmentListResult;
    }

    /**
     * @return ArrayOfDropBillingAdjustment
     */
    public function getGetDropBillingAdjustmentListResult()
    {
      return $this->GetDropBillingAdjustmentListResult;
    }

    /**
     * @param ArrayOfDropBillingAdjustment $GetDropBillingAdjustmentListResult
     * @return \FatTail\AdBook\GetDropBillingAdjustmentListResponse
     */
    public function setGetDropBillingAdjustmentListResult($GetDropBillingAdjustmentListResult)
    {
      $this->GetDropBillingAdjustmentListResult = $GetDropBillingAdjustmentListResult;
      return $this;
    }

}

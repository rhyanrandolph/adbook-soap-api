<?php

namespace FatTail\AdBook;

class CreateDropBillingAdjustmentsResponse
{

    /**
     * @var ArrayOfDropBillingAdjustmentCreateResult $CreateDropBillingAdjustmentsResult
     */
    protected $CreateDropBillingAdjustmentsResult = null;

    /**
     * @param ArrayOfDropBillingAdjustmentCreateResult $CreateDropBillingAdjustmentsResult
     */
    public function __construct($CreateDropBillingAdjustmentsResult)
    {
      $this->CreateDropBillingAdjustmentsResult = $CreateDropBillingAdjustmentsResult;
    }

    /**
     * @return ArrayOfDropBillingAdjustmentCreateResult
     */
    public function getCreateDropBillingAdjustmentsResult()
    {
      return $this->CreateDropBillingAdjustmentsResult;
    }

    /**
     * @param ArrayOfDropBillingAdjustmentCreateResult $CreateDropBillingAdjustmentsResult
     * @return \FatTail\AdBook\CreateDropBillingAdjustmentsResponse
     */
    public function setCreateDropBillingAdjustmentsResult($CreateDropBillingAdjustmentsResult)
    {
      $this->CreateDropBillingAdjustmentsResult = $CreateDropBillingAdjustmentsResult;
      return $this;
    }

}

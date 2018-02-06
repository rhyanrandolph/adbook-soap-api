<?php

namespace FatTail\AdBook;

class UpdateDropBillingAdjustmentsResponse
{

    /**
     * @var ArrayOfDropBillingAdjustmentUpdateResult $UpdateDropBillingAdjustmentsResult
     */
    protected $UpdateDropBillingAdjustmentsResult = null;

    /**
     * @param ArrayOfDropBillingAdjustmentUpdateResult $UpdateDropBillingAdjustmentsResult
     */
    public function __construct($UpdateDropBillingAdjustmentsResult)
    {
      $this->UpdateDropBillingAdjustmentsResult = $UpdateDropBillingAdjustmentsResult;
    }

    /**
     * @return ArrayOfDropBillingAdjustmentUpdateResult
     */
    public function getUpdateDropBillingAdjustmentsResult()
    {
      return $this->UpdateDropBillingAdjustmentsResult;
    }

    /**
     * @param ArrayOfDropBillingAdjustmentUpdateResult $UpdateDropBillingAdjustmentsResult
     * @return \FatTail\AdBook\UpdateDropBillingAdjustmentsResponse
     */
    public function setUpdateDropBillingAdjustmentsResult($UpdateDropBillingAdjustmentsResult)
    {
      $this->UpdateDropBillingAdjustmentsResult = $UpdateDropBillingAdjustmentsResult;
      return $this;
    }

}

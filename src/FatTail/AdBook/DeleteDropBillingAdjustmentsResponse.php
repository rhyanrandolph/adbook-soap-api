<?php

namespace FatTail\AdBook;

class DeleteDropBillingAdjustmentsResponse
{

    /**
     * @var ArrayOfDropBillingAdjustmentDeleteResult $DeleteDropBillingAdjustmentsResult
     */
    protected $DeleteDropBillingAdjustmentsResult = null;

    /**
     * @param ArrayOfDropBillingAdjustmentDeleteResult $DeleteDropBillingAdjustmentsResult
     */
    public function __construct($DeleteDropBillingAdjustmentsResult)
    {
      $this->DeleteDropBillingAdjustmentsResult = $DeleteDropBillingAdjustmentsResult;
    }

    /**
     * @return ArrayOfDropBillingAdjustmentDeleteResult
     */
    public function getDeleteDropBillingAdjustmentsResult()
    {
      return $this->DeleteDropBillingAdjustmentsResult;
    }

    /**
     * @param ArrayOfDropBillingAdjustmentDeleteResult $DeleteDropBillingAdjustmentsResult
     * @return \FatTail\AdBook\DeleteDropBillingAdjustmentsResponse
     */
    public function setDeleteDropBillingAdjustmentsResult($DeleteDropBillingAdjustmentsResult)
    {
      $this->DeleteDropBillingAdjustmentsResult = $DeleteDropBillingAdjustmentsResult;
      return $this;
    }

}

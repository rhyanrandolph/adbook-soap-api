<?php

namespace FatTail\AdBook;

class GetDynamicPropertiesListForDropBillingAdjustmentResponse
{

    /**
     * @var ArrayOfDynamicProperty $GetDynamicPropertiesListForDropBillingAdjustmentResult
     */
    protected $GetDynamicPropertiesListForDropBillingAdjustmentResult = null;

    /**
     * @param ArrayOfDynamicProperty $GetDynamicPropertiesListForDropBillingAdjustmentResult
     */
    public function __construct($GetDynamicPropertiesListForDropBillingAdjustmentResult)
    {
      $this->GetDynamicPropertiesListForDropBillingAdjustmentResult = $GetDynamicPropertiesListForDropBillingAdjustmentResult;
    }

    /**
     * @return ArrayOfDynamicProperty
     */
    public function getGetDynamicPropertiesListForDropBillingAdjustmentResult()
    {
      return $this->GetDynamicPropertiesListForDropBillingAdjustmentResult;
    }

    /**
     * @param ArrayOfDynamicProperty $GetDynamicPropertiesListForDropBillingAdjustmentResult
     * @return \FatTail\AdBook\GetDynamicPropertiesListForDropBillingAdjustmentResponse
     */
    public function setGetDynamicPropertiesListForDropBillingAdjustmentResult($GetDynamicPropertiesListForDropBillingAdjustmentResult)
    {
      $this->GetDynamicPropertiesListForDropBillingAdjustmentResult = $GetDynamicPropertiesListForDropBillingAdjustmentResult;
      return $this;
    }

}

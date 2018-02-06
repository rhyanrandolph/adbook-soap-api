<?php

namespace FatTail\AdBook;

class ImportContentTargetingDeliveryResponse
{

    /**
     * @var ContentTargetingDeliveryUploadSummary $ImportContentTargetingDeliveryResult
     */
    protected $ImportContentTargetingDeliveryResult = null;

    /**
     * @param ContentTargetingDeliveryUploadSummary $ImportContentTargetingDeliveryResult
     */
    public function __construct($ImportContentTargetingDeliveryResult)
    {
      $this->ImportContentTargetingDeliveryResult = $ImportContentTargetingDeliveryResult;
    }

    /**
     * @return ContentTargetingDeliveryUploadSummary
     */
    public function getImportContentTargetingDeliveryResult()
    {
      return $this->ImportContentTargetingDeliveryResult;
    }

    /**
     * @param ContentTargetingDeliveryUploadSummary $ImportContentTargetingDeliveryResult
     * @return \FatTail\AdBook\ImportContentTargetingDeliveryResponse
     */
    public function setImportContentTargetingDeliveryResult($ImportContentTargetingDeliveryResult)
    {
      $this->ImportContentTargetingDeliveryResult = $ImportContentTargetingDeliveryResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class ContentTargetingDeliveryUploadSummary extends AdBookConnectEntity
{

    /**
     * @var OperationOutcome $Status
     */
    protected $Status = null;

    /**
     * @var ArrayOfContentTargetingDeliveryUploadResult $UploadResults
     */
    protected $UploadResults = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OperationOutcome
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param OperationOutcome $Status
     * @return \FatTail\AdBook\ContentTargetingDeliveryUploadSummary
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ArrayOfContentTargetingDeliveryUploadResult
     */
    public function getUploadResults()
    {
      return $this->UploadResults;
    }

    /**
     * @param ArrayOfContentTargetingDeliveryUploadResult $UploadResults
     * @return \FatTail\AdBook\ContentTargetingDeliveryUploadSummary
     */
    public function setUploadResults($UploadResults)
    {
      $this->UploadResults = $UploadResults;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class FirstPartyDeliveryUploadSummary extends AdBookConnectEntity
{

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var OperationOutcome $Status
     */
    protected $Status = null;

    /**
     * @var ArrayOfFirstPartyDeliveryUploadResult $UploadResults
     */
    protected $UploadResults = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \FatTail\AdBook\FirstPartyDeliveryUploadSummary
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
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
     * @return \FatTail\AdBook\FirstPartyDeliveryUploadSummary
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return ArrayOfFirstPartyDeliveryUploadResult
     */
    public function getUploadResults()
    {
      return $this->UploadResults;
    }

    /**
     * @param ArrayOfFirstPartyDeliveryUploadResult $UploadResults
     * @return \FatTail\AdBook\FirstPartyDeliveryUploadSummary
     */
    public function setUploadResults($UploadResults)
    {
      $this->UploadResults = $UploadResults;
      return $this;
    }

}

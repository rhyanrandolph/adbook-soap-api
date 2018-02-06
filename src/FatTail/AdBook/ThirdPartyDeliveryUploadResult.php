<?php

namespace FatTail\AdBook;

class ThirdPartyDeliveryUploadResult extends AdBookConnectEntity
{

    /**
     * @var int $DropID
     */
    protected $DropID = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var string $MetricName
     */
    protected $MetricName = null;

    /**
     * @var OperationOutcome $Outcome
     */
    protected $Outcome = null;

    /**
     * @var string $ExternalDropID
     */
    protected $ExternalDropID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getDropID()
    {
      return $this->DropID;
    }

    /**
     * @param int $DropID
     * @return \FatTail\AdBook\ThirdPartyDeliveryUploadResult
     */
    public function setDropID($DropID)
    {
      $this->DropID = $DropID;
      return $this;
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
     * @return \FatTail\AdBook\ThirdPartyDeliveryUploadResult
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

    /**
     * @return string
     */
    public function getMetricName()
    {
      return $this->MetricName;
    }

    /**
     * @param string $MetricName
     * @return \FatTail\AdBook\ThirdPartyDeliveryUploadResult
     */
    public function setMetricName($MetricName)
    {
      $this->MetricName = $MetricName;
      return $this;
    }

    /**
     * @return OperationOutcome
     */
    public function getOutcome()
    {
      return $this->Outcome;
    }

    /**
     * @param OperationOutcome $Outcome
     * @return \FatTail\AdBook\ThirdPartyDeliveryUploadResult
     */
    public function setOutcome($Outcome)
    {
      $this->Outcome = $Outcome;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalDropID()
    {
      return $this->ExternalDropID;
    }

    /**
     * @param string $ExternalDropID
     * @return \FatTail\AdBook\ThirdPartyDeliveryUploadResult
     */
    public function setExternalDropID($ExternalDropID)
    {
      $this->ExternalDropID = $ExternalDropID;
      return $this;
    }

}

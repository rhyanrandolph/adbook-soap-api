<?php

namespace FatTail\AdBook;

class ImportFirstPartyDeliveryResponse
{

    /**
     * @var FirstPartyDeliveryUploadSummary $ImportFirstPartyDeliveryResult
     */
    protected $ImportFirstPartyDeliveryResult = null;

    /**
     * @param FirstPartyDeliveryUploadSummary $ImportFirstPartyDeliveryResult
     */
    public function __construct($ImportFirstPartyDeliveryResult)
    {
      $this->ImportFirstPartyDeliveryResult = $ImportFirstPartyDeliveryResult;
    }

    /**
     * @return FirstPartyDeliveryUploadSummary
     */
    public function getImportFirstPartyDeliveryResult()
    {
      return $this->ImportFirstPartyDeliveryResult;
    }

    /**
     * @param FirstPartyDeliveryUploadSummary $ImportFirstPartyDeliveryResult
     * @return \FatTail\AdBook\ImportFirstPartyDeliveryResponse
     */
    public function setImportFirstPartyDeliveryResult($ImportFirstPartyDeliveryResult)
    {
      $this->ImportFirstPartyDeliveryResult = $ImportFirstPartyDeliveryResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class ImportThirdPartyDeliveryResponse
{

    /**
     * @var ArrayOfThirdPartyDeliveryUploadResult $ImportThirdPartyDeliveryResult
     */
    protected $ImportThirdPartyDeliveryResult = null;

    /**
     * @param ArrayOfThirdPartyDeliveryUploadResult $ImportThirdPartyDeliveryResult
     */
    public function __construct($ImportThirdPartyDeliveryResult)
    {
      $this->ImportThirdPartyDeliveryResult = $ImportThirdPartyDeliveryResult;
    }

    /**
     * @return ArrayOfThirdPartyDeliveryUploadResult
     */
    public function getImportThirdPartyDeliveryResult()
    {
      return $this->ImportThirdPartyDeliveryResult;
    }

    /**
     * @param ArrayOfThirdPartyDeliveryUploadResult $ImportThirdPartyDeliveryResult
     * @return \FatTail\AdBook\ImportThirdPartyDeliveryResponse
     */
    public function setImportThirdPartyDeliveryResult($ImportThirdPartyDeliveryResult)
    {
      $this->ImportThirdPartyDeliveryResult = $ImportThirdPartyDeliveryResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetDynamicPropertiesListForOrderAttachmentsResponse
{

    /**
     * @var ArrayOfDynamicProperty $GetDynamicPropertiesListForOrderAttachmentsResult
     */
    protected $GetDynamicPropertiesListForOrderAttachmentsResult = null;

    /**
     * @param ArrayOfDynamicProperty $GetDynamicPropertiesListForOrderAttachmentsResult
     */
    public function __construct($GetDynamicPropertiesListForOrderAttachmentsResult)
    {
      $this->GetDynamicPropertiesListForOrderAttachmentsResult = $GetDynamicPropertiesListForOrderAttachmentsResult;
    }

    /**
     * @return ArrayOfDynamicProperty
     */
    public function getGetDynamicPropertiesListForOrderAttachmentsResult()
    {
      return $this->GetDynamicPropertiesListForOrderAttachmentsResult;
    }

    /**
     * @param ArrayOfDynamicProperty $GetDynamicPropertiesListForOrderAttachmentsResult
     * @return \FatTail\AdBook\GetDynamicPropertiesListForOrderAttachmentsResponse
     */
    public function setGetDynamicPropertiesListForOrderAttachmentsResult($GetDynamicPropertiesListForOrderAttachmentsResult)
    {
      $this->GetDynamicPropertiesListForOrderAttachmentsResult = $GetDynamicPropertiesListForOrderAttachmentsResult;
      return $this;
    }

}

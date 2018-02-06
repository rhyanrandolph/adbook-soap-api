<?php

namespace FatTail\AdBook;

class GetMediaElementListByDynamicPropertyValueResponse
{

    /**
     * @var ArrayOfMediaElement $GetMediaElementListByDynamicPropertyValueResult
     */
    protected $GetMediaElementListByDynamicPropertyValueResult = null;

    /**
     * @param ArrayOfMediaElement $GetMediaElementListByDynamicPropertyValueResult
     */
    public function __construct($GetMediaElementListByDynamicPropertyValueResult)
    {
      $this->GetMediaElementListByDynamicPropertyValueResult = $GetMediaElementListByDynamicPropertyValueResult;
    }

    /**
     * @return ArrayOfMediaElement
     */
    public function getGetMediaElementListByDynamicPropertyValueResult()
    {
      return $this->GetMediaElementListByDynamicPropertyValueResult;
    }

    /**
     * @param ArrayOfMediaElement $GetMediaElementListByDynamicPropertyValueResult
     * @return \FatTail\AdBook\GetMediaElementListByDynamicPropertyValueResponse
     */
    public function setGetMediaElementListByDynamicPropertyValueResult($GetMediaElementListByDynamicPropertyValueResult)
    {
      $this->GetMediaElementListByDynamicPropertyValueResult = $GetMediaElementListByDynamicPropertyValueResult;
      return $this;
    }

}

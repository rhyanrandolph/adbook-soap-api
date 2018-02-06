<?php

namespace FatTail\AdBook;

class GetMediaElementPropertyValueResponse
{

    /**
     * @var MediaElementPropertyValue $GetMediaElementPropertyValueResult
     */
    protected $GetMediaElementPropertyValueResult = null;

    /**
     * @param MediaElementPropertyValue $GetMediaElementPropertyValueResult
     */
    public function __construct($GetMediaElementPropertyValueResult)
    {
      $this->GetMediaElementPropertyValueResult = $GetMediaElementPropertyValueResult;
    }

    /**
     * @return MediaElementPropertyValue
     */
    public function getGetMediaElementPropertyValueResult()
    {
      return $this->GetMediaElementPropertyValueResult;
    }

    /**
     * @param MediaElementPropertyValue $GetMediaElementPropertyValueResult
     * @return \FatTail\AdBook\GetMediaElementPropertyValueResponse
     */
    public function setGetMediaElementPropertyValueResult($GetMediaElementPropertyValueResult)
    {
      $this->GetMediaElementPropertyValueResult = $GetMediaElementPropertyValueResult;
      return $this;
    }

}

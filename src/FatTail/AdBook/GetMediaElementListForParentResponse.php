<?php

namespace FatTail\AdBook;

class GetMediaElementListForParentResponse
{

    /**
     * @var ArrayOfMediaElement $GetMediaElementListForParentResult
     */
    protected $GetMediaElementListForParentResult = null;

    /**
     * @param ArrayOfMediaElement $GetMediaElementListForParentResult
     */
    public function __construct($GetMediaElementListForParentResult)
    {
      $this->GetMediaElementListForParentResult = $GetMediaElementListForParentResult;
    }

    /**
     * @return ArrayOfMediaElement
     */
    public function getGetMediaElementListForParentResult()
    {
      return $this->GetMediaElementListForParentResult;
    }

    /**
     * @param ArrayOfMediaElement $GetMediaElementListForParentResult
     * @return \FatTail\AdBook\GetMediaElementListForParentResponse
     */
    public function setGetMediaElementListForParentResult($GetMediaElementListForParentResult)
    {
      $this->GetMediaElementListForParentResult = $GetMediaElementListForParentResult;
      return $this;
    }

}

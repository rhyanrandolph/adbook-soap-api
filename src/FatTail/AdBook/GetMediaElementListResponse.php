<?php

namespace FatTail\AdBook;

class GetMediaElementListResponse
{

    /**
     * @var ArrayOfMediaElement $GetMediaElementListResult
     */
    protected $GetMediaElementListResult = null;

    /**
     * @param ArrayOfMediaElement $GetMediaElementListResult
     */
    public function __construct($GetMediaElementListResult)
    {
      $this->GetMediaElementListResult = $GetMediaElementListResult;
    }

    /**
     * @return ArrayOfMediaElement
     */
    public function getGetMediaElementListResult()
    {
      return $this->GetMediaElementListResult;
    }

    /**
     * @param ArrayOfMediaElement $GetMediaElementListResult
     * @return \FatTail\AdBook\GetMediaElementListResponse
     */
    public function setGetMediaElementListResult($GetMediaElementListResult)
    {
      $this->GetMediaElementListResult = $GetMediaElementListResult;
      return $this;
    }

}

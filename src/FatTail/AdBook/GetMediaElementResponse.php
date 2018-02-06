<?php

namespace FatTail\AdBook;

class GetMediaElementResponse
{

    /**
     * @var MediaElement $GetMediaElementResult
     */
    protected $GetMediaElementResult = null;

    /**
     * @param MediaElement $GetMediaElementResult
     */
    public function __construct($GetMediaElementResult)
    {
      $this->GetMediaElementResult = $GetMediaElementResult;
    }

    /**
     * @return MediaElement
     */
    public function getGetMediaElementResult()
    {
      return $this->GetMediaElementResult;
    }

    /**
     * @param MediaElement $GetMediaElementResult
     * @return \FatTail\AdBook\GetMediaElementResponse
     */
    public function setGetMediaElementResult($GetMediaElementResult)
    {
      $this->GetMediaElementResult = $GetMediaElementResult;
      return $this;
    }

}

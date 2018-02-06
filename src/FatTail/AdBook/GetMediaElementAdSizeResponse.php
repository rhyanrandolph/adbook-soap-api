<?php

namespace FatTail\AdBook;

class GetMediaElementAdSizeResponse
{

    /**
     * @var PositionSize $GetMediaElementAdSizeResult
     */
    protected $GetMediaElementAdSizeResult = null;

    /**
     * @param PositionSize $GetMediaElementAdSizeResult
     */
    public function __construct($GetMediaElementAdSizeResult)
    {
      $this->GetMediaElementAdSizeResult = $GetMediaElementAdSizeResult;
    }

    /**
     * @return PositionSize
     */
    public function getGetMediaElementAdSizeResult()
    {
      return $this->GetMediaElementAdSizeResult;
    }

    /**
     * @param PositionSize $GetMediaElementAdSizeResult
     * @return \FatTail\AdBook\GetMediaElementAdSizeResponse
     */
    public function setGetMediaElementAdSizeResult($GetMediaElementAdSizeResult)
    {
      $this->GetMediaElementAdSizeResult = $GetMediaElementAdSizeResult;
      return $this;
    }

}

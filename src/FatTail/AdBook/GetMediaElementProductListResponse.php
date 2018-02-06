<?php

namespace FatTail\AdBook;

class GetMediaElementProductListResponse
{

    /**
     * @var ArrayOfMediaElement $GetMediaElementProductListResult
     */
    protected $GetMediaElementProductListResult = null;

    /**
     * @param ArrayOfMediaElement $GetMediaElementProductListResult
     */
    public function __construct($GetMediaElementProductListResult)
    {
      $this->GetMediaElementProductListResult = $GetMediaElementProductListResult;
    }

    /**
     * @return ArrayOfMediaElement
     */
    public function getGetMediaElementProductListResult()
    {
      return $this->GetMediaElementProductListResult;
    }

    /**
     * @param ArrayOfMediaElement $GetMediaElementProductListResult
     * @return \FatTail\AdBook\GetMediaElementProductListResponse
     */
    public function setGetMediaElementProductListResult($GetMediaElementProductListResult)
    {
      $this->GetMediaElementProductListResult = $GetMediaElementProductListResult;
      return $this;
    }

}

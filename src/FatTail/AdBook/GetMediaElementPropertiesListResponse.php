<?php

namespace FatTail\AdBook;

class GetMediaElementPropertiesListResponse
{

    /**
     * @var ArrayOfMediaElementProperty $GetMediaElementPropertiesListResult
     */
    protected $GetMediaElementPropertiesListResult = null;

    /**
     * @param ArrayOfMediaElementProperty $GetMediaElementPropertiesListResult
     */
    public function __construct($GetMediaElementPropertiesListResult)
    {
      $this->GetMediaElementPropertiesListResult = $GetMediaElementPropertiesListResult;
    }

    /**
     * @return ArrayOfMediaElementProperty
     */
    public function getGetMediaElementPropertiesListResult()
    {
      return $this->GetMediaElementPropertiesListResult;
    }

    /**
     * @param ArrayOfMediaElementProperty $GetMediaElementPropertiesListResult
     * @return \FatTail\AdBook\GetMediaElementPropertiesListResponse
     */
    public function setGetMediaElementPropertiesListResult($GetMediaElementPropertiesListResult)
    {
      $this->GetMediaElementPropertiesListResult = $GetMediaElementPropertiesListResult;
      return $this;
    }

}

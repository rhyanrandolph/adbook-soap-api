<?php

namespace FatTail\AdBook;

class GetMediaElementPropertiesListValuesByPropertyIDResponse
{

    /**
     * @var ArrayOfMediaElementPropertyListItem $GetMediaElementPropertiesListValuesByPropertyIDResult
     */
    protected $GetMediaElementPropertiesListValuesByPropertyIDResult = null;

    /**
     * @param ArrayOfMediaElementPropertyListItem $GetMediaElementPropertiesListValuesByPropertyIDResult
     */
    public function __construct($GetMediaElementPropertiesListValuesByPropertyIDResult)
    {
      $this->GetMediaElementPropertiesListValuesByPropertyIDResult = $GetMediaElementPropertiesListValuesByPropertyIDResult;
    }

    /**
     * @return ArrayOfMediaElementPropertyListItem
     */
    public function getGetMediaElementPropertiesListValuesByPropertyIDResult()
    {
      return $this->GetMediaElementPropertiesListValuesByPropertyIDResult;
    }

    /**
     * @param ArrayOfMediaElementPropertyListItem $GetMediaElementPropertiesListValuesByPropertyIDResult
     * @return \FatTail\AdBook\GetMediaElementPropertiesListValuesByPropertyIDResponse
     */
    public function setGetMediaElementPropertiesListValuesByPropertyIDResult($GetMediaElementPropertiesListValuesByPropertyIDResult)
    {
      $this->GetMediaElementPropertiesListValuesByPropertyIDResult = $GetMediaElementPropertiesListValuesByPropertyIDResult;
      return $this;
    }

}

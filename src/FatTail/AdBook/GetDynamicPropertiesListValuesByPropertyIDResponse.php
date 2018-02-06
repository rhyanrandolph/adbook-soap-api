<?php

namespace FatTail\AdBook;

class GetDynamicPropertiesListValuesByPropertyIDResponse
{

    /**
     * @var ArrayOfDynamicPropertyListElement $GetDynamicPropertiesListValuesByPropertyIDResult
     */
    protected $GetDynamicPropertiesListValuesByPropertyIDResult = null;

    /**
     * @param ArrayOfDynamicPropertyListElement $GetDynamicPropertiesListValuesByPropertyIDResult
     */
    public function __construct($GetDynamicPropertiesListValuesByPropertyIDResult)
    {
      $this->GetDynamicPropertiesListValuesByPropertyIDResult = $GetDynamicPropertiesListValuesByPropertyIDResult;
    }

    /**
     * @return ArrayOfDynamicPropertyListElement
     */
    public function getGetDynamicPropertiesListValuesByPropertyIDResult()
    {
      return $this->GetDynamicPropertiesListValuesByPropertyIDResult;
    }

    /**
     * @param ArrayOfDynamicPropertyListElement $GetDynamicPropertiesListValuesByPropertyIDResult
     * @return \FatTail\AdBook\GetDynamicPropertiesListValuesByPropertyIDResponse
     */
    public function setGetDynamicPropertiesListValuesByPropertyIDResult($GetDynamicPropertiesListValuesByPropertyIDResult)
    {
      $this->GetDynamicPropertiesListValuesByPropertyIDResult = $GetDynamicPropertiesListValuesByPropertyIDResult;
      return $this;
    }

}

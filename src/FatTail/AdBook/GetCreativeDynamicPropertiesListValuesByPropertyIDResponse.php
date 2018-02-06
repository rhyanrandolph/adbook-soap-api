<?php

namespace FatTail\AdBook;

class GetCreativeDynamicPropertiesListValuesByPropertyIDResponse
{

    /**
     * @var ArrayOfDynamicPropertyListElement $GetCreativeDynamicPropertiesListValuesByPropertyIDResult
     */
    protected $GetCreativeDynamicPropertiesListValuesByPropertyIDResult = null;

    /**
     * @param ArrayOfDynamicPropertyListElement $GetCreativeDynamicPropertiesListValuesByPropertyIDResult
     */
    public function __construct($GetCreativeDynamicPropertiesListValuesByPropertyIDResult)
    {
      $this->GetCreativeDynamicPropertiesListValuesByPropertyIDResult = $GetCreativeDynamicPropertiesListValuesByPropertyIDResult;
    }

    /**
     * @return ArrayOfDynamicPropertyListElement
     */
    public function getGetCreativeDynamicPropertiesListValuesByPropertyIDResult()
    {
      return $this->GetCreativeDynamicPropertiesListValuesByPropertyIDResult;
    }

    /**
     * @param ArrayOfDynamicPropertyListElement $GetCreativeDynamicPropertiesListValuesByPropertyIDResult
     * @return \FatTail\AdBook\GetCreativeDynamicPropertiesListValuesByPropertyIDResponse
     */
    public function setGetCreativeDynamicPropertiesListValuesByPropertyIDResult($GetCreativeDynamicPropertiesListValuesByPropertyIDResult)
    {
      $this->GetCreativeDynamicPropertiesListValuesByPropertyIDResult = $GetCreativeDynamicPropertiesListValuesByPropertyIDResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetDynamicPropertiesListForCreativeResponse
{

    /**
     * @var ArrayOfDynamicProperty $GetDynamicPropertiesListForCreativeResult
     */
    protected $GetDynamicPropertiesListForCreativeResult = null;

    /**
     * @param ArrayOfDynamicProperty $GetDynamicPropertiesListForCreativeResult
     */
    public function __construct($GetDynamicPropertiesListForCreativeResult)
    {
      $this->GetDynamicPropertiesListForCreativeResult = $GetDynamicPropertiesListForCreativeResult;
    }

    /**
     * @return ArrayOfDynamicProperty
     */
    public function getGetDynamicPropertiesListForCreativeResult()
    {
      return $this->GetDynamicPropertiesListForCreativeResult;
    }

    /**
     * @param ArrayOfDynamicProperty $GetDynamicPropertiesListForCreativeResult
     * @return \FatTail\AdBook\GetDynamicPropertiesListForCreativeResponse
     */
    public function setGetDynamicPropertiesListForCreativeResult($GetDynamicPropertiesListForCreativeResult)
    {
      $this->GetDynamicPropertiesListForCreativeResult = $GetDynamicPropertiesListForCreativeResult;
      return $this;
    }

}

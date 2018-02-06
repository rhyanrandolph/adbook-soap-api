<?php

namespace FatTail\AdBook;

class GetDynamicPropertiesListForOrderResponse
{

    /**
     * @var ArrayOfDynamicProperty $GetDynamicPropertiesListForOrderResult
     */
    protected $GetDynamicPropertiesListForOrderResult = null;

    /**
     * @param ArrayOfDynamicProperty $GetDynamicPropertiesListForOrderResult
     */
    public function __construct($GetDynamicPropertiesListForOrderResult)
    {
      $this->GetDynamicPropertiesListForOrderResult = $GetDynamicPropertiesListForOrderResult;
    }

    /**
     * @return ArrayOfDynamicProperty
     */
    public function getGetDynamicPropertiesListForOrderResult()
    {
      return $this->GetDynamicPropertiesListForOrderResult;
    }

    /**
     * @param ArrayOfDynamicProperty $GetDynamicPropertiesListForOrderResult
     * @return \FatTail\AdBook\GetDynamicPropertiesListForOrderResponse
     */
    public function setGetDynamicPropertiesListForOrderResult($GetDynamicPropertiesListForOrderResult)
    {
      $this->GetDynamicPropertiesListForOrderResult = $GetDynamicPropertiesListForOrderResult;
      return $this;
    }

}

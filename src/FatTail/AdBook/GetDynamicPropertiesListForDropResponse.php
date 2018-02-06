<?php

namespace FatTail\AdBook;

class GetDynamicPropertiesListForDropResponse
{

    /**
     * @var ArrayOfDynamicProperty $GetDynamicPropertiesListForDropResult
     */
    protected $GetDynamicPropertiesListForDropResult = null;

    /**
     * @param ArrayOfDynamicProperty $GetDynamicPropertiesListForDropResult
     */
    public function __construct($GetDynamicPropertiesListForDropResult)
    {
      $this->GetDynamicPropertiesListForDropResult = $GetDynamicPropertiesListForDropResult;
    }

    /**
     * @return ArrayOfDynamicProperty
     */
    public function getGetDynamicPropertiesListForDropResult()
    {
      return $this->GetDynamicPropertiesListForDropResult;
    }

    /**
     * @param ArrayOfDynamicProperty $GetDynamicPropertiesListForDropResult
     * @return \FatTail\AdBook\GetDynamicPropertiesListForDropResponse
     */
    public function setGetDynamicPropertiesListForDropResult($GetDynamicPropertiesListForDropResult)
    {
      $this->GetDynamicPropertiesListForDropResult = $GetDynamicPropertiesListForDropResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetDynamicPropertiesListForAccountResponse
{

    /**
     * @var ArrayOfDynamicProperty $GetDynamicPropertiesListForAccountResult
     */
    protected $GetDynamicPropertiesListForAccountResult = null;

    /**
     * @param ArrayOfDynamicProperty $GetDynamicPropertiesListForAccountResult
     */
    public function __construct($GetDynamicPropertiesListForAccountResult)
    {
      $this->GetDynamicPropertiesListForAccountResult = $GetDynamicPropertiesListForAccountResult;
    }

    /**
     * @return ArrayOfDynamicProperty
     */
    public function getGetDynamicPropertiesListForAccountResult()
    {
      return $this->GetDynamicPropertiesListForAccountResult;
    }

    /**
     * @param ArrayOfDynamicProperty $GetDynamicPropertiesListForAccountResult
     * @return \FatTail\AdBook\GetDynamicPropertiesListForAccountResponse
     */
    public function setGetDynamicPropertiesListForAccountResult($GetDynamicPropertiesListForAccountResult)
    {
      $this->GetDynamicPropertiesListForAccountResult = $GetDynamicPropertiesListForAccountResult;
      return $this;
    }

}

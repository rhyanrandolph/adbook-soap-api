<?php

namespace FatTail\AdBook;

class GetDynamicPropertiesListValuesForAccountResponse
{

    /**
     * @var ArrayOfDynamicPropertyListElement $GetDynamicPropertiesListValuesForAccountResult
     */
    protected $GetDynamicPropertiesListValuesForAccountResult = null;

    /**
     * @param ArrayOfDynamicPropertyListElement $GetDynamicPropertiesListValuesForAccountResult
     */
    public function __construct($GetDynamicPropertiesListValuesForAccountResult)
    {
      $this->GetDynamicPropertiesListValuesForAccountResult = $GetDynamicPropertiesListValuesForAccountResult;
    }

    /**
     * @return ArrayOfDynamicPropertyListElement
     */
    public function getGetDynamicPropertiesListValuesForAccountResult()
    {
      return $this->GetDynamicPropertiesListValuesForAccountResult;
    }

    /**
     * @param ArrayOfDynamicPropertyListElement $GetDynamicPropertiesListValuesForAccountResult
     * @return \FatTail\AdBook\GetDynamicPropertiesListValuesForAccountResponse
     */
    public function setGetDynamicPropertiesListValuesForAccountResult($GetDynamicPropertiesListValuesForAccountResult)
    {
      $this->GetDynamicPropertiesListValuesForAccountResult = $GetDynamicPropertiesListValuesForAccountResult;
      return $this;
    }

}

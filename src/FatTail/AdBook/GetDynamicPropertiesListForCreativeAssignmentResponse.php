<?php

namespace FatTail\AdBook;

class GetDynamicPropertiesListForCreativeAssignmentResponse
{

    /**
     * @var ArrayOfDynamicProperty $GetDynamicPropertiesListForCreativeAssignmentResult
     */
    protected $GetDynamicPropertiesListForCreativeAssignmentResult = null;

    /**
     * @param ArrayOfDynamicProperty $GetDynamicPropertiesListForCreativeAssignmentResult
     */
    public function __construct($GetDynamicPropertiesListForCreativeAssignmentResult)
    {
      $this->GetDynamicPropertiesListForCreativeAssignmentResult = $GetDynamicPropertiesListForCreativeAssignmentResult;
    }

    /**
     * @return ArrayOfDynamicProperty
     */
    public function getGetDynamicPropertiesListForCreativeAssignmentResult()
    {
      return $this->GetDynamicPropertiesListForCreativeAssignmentResult;
    }

    /**
     * @param ArrayOfDynamicProperty $GetDynamicPropertiesListForCreativeAssignmentResult
     * @return \FatTail\AdBook\GetDynamicPropertiesListForCreativeAssignmentResponse
     */
    public function setGetDynamicPropertiesListForCreativeAssignmentResult($GetDynamicPropertiesListForCreativeAssignmentResult)
    {
      $this->GetDynamicPropertiesListForCreativeAssignmentResult = $GetDynamicPropertiesListForCreativeAssignmentResult;
      return $this;
    }

}

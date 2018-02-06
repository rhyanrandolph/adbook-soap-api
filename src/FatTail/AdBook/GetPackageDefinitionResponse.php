<?php

namespace FatTail\AdBook;

class GetPackageDefinitionResponse
{

    /**
     * @var ArrayOfPackageDefinition $GetPackageDefinitionResult
     */
    protected $GetPackageDefinitionResult = null;

    /**
     * @param ArrayOfPackageDefinition $GetPackageDefinitionResult
     */
    public function __construct($GetPackageDefinitionResult)
    {
      $this->GetPackageDefinitionResult = $GetPackageDefinitionResult;
    }

    /**
     * @return ArrayOfPackageDefinition
     */
    public function getGetPackageDefinitionResult()
    {
      return $this->GetPackageDefinitionResult;
    }

    /**
     * @param ArrayOfPackageDefinition $GetPackageDefinitionResult
     * @return \FatTail\AdBook\GetPackageDefinitionResponse
     */
    public function setGetPackageDefinitionResult($GetPackageDefinitionResult)
    {
      $this->GetPackageDefinitionResult = $GetPackageDefinitionResult;
      return $this;
    }

}

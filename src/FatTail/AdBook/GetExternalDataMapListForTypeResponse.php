<?php

namespace FatTail\AdBook;

class GetExternalDataMapListForTypeResponse
{

    /**
     * @var ArrayOfExternalDataMap $GetExternalDataMapListForTypeResult
     */
    protected $GetExternalDataMapListForTypeResult = null;

    /**
     * @param ArrayOfExternalDataMap $GetExternalDataMapListForTypeResult
     */
    public function __construct($GetExternalDataMapListForTypeResult)
    {
      $this->GetExternalDataMapListForTypeResult = $GetExternalDataMapListForTypeResult;
    }

    /**
     * @return ArrayOfExternalDataMap
     */
    public function getGetExternalDataMapListForTypeResult()
    {
      return $this->GetExternalDataMapListForTypeResult;
    }

    /**
     * @param ArrayOfExternalDataMap $GetExternalDataMapListForTypeResult
     * @return \FatTail\AdBook\GetExternalDataMapListForTypeResponse
     */
    public function setGetExternalDataMapListForTypeResult($GetExternalDataMapListForTypeResult)
    {
      $this->GetExternalDataMapListForTypeResult = $GetExternalDataMapListForTypeResult;
      return $this;
    }

}

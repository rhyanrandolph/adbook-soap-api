<?php

namespace FatTail\AdBook;

class GetExternalDataMapListResponse
{

    /**
     * @var ArrayOfExternalDataMap $GetExternalDataMapListResult
     */
    protected $GetExternalDataMapListResult = null;

    /**
     * @param ArrayOfExternalDataMap $GetExternalDataMapListResult
     */
    public function __construct($GetExternalDataMapListResult)
    {
      $this->GetExternalDataMapListResult = $GetExternalDataMapListResult;
    }

    /**
     * @return ArrayOfExternalDataMap
     */
    public function getGetExternalDataMapListResult()
    {
      return $this->GetExternalDataMapListResult;
    }

    /**
     * @param ArrayOfExternalDataMap $GetExternalDataMapListResult
     * @return \FatTail\AdBook\GetExternalDataMapListResponse
     */
    public function setGetExternalDataMapListResult($GetExternalDataMapListResult)
    {
      $this->GetExternalDataMapListResult = $GetExternalDataMapListResult;
      return $this;
    }

}

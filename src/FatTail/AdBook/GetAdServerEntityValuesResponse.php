<?php

namespace FatTail\AdBook;

class GetAdServerEntityValuesResponse
{

    /**
     * @var ArrayOfAdServerEntityName $GetAdServerEntityValuesResult
     */
    protected $GetAdServerEntityValuesResult = null;

    /**
     * @param ArrayOfAdServerEntityName $GetAdServerEntityValuesResult
     */
    public function __construct($GetAdServerEntityValuesResult)
    {
      $this->GetAdServerEntityValuesResult = $GetAdServerEntityValuesResult;
    }

    /**
     * @return ArrayOfAdServerEntityName
     */
    public function getGetAdServerEntityValuesResult()
    {
      return $this->GetAdServerEntityValuesResult;
    }

    /**
     * @param ArrayOfAdServerEntityName $GetAdServerEntityValuesResult
     * @return \FatTail\AdBook\GetAdServerEntityValuesResponse
     */
    public function setGetAdServerEntityValuesResult($GetAdServerEntityValuesResult)
    {
      $this->GetAdServerEntityValuesResult = $GetAdServerEntityValuesResult;
      return $this;
    }

}

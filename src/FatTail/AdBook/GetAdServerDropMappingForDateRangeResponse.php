<?php

namespace FatTail\AdBook;

class GetAdServerDropMappingForDateRangeResponse
{

    /**
     * @var ArrayOfAdServerEntityMapping $GetAdServerDropMappingForDateRangeResult
     */
    protected $GetAdServerDropMappingForDateRangeResult = null;

    /**
     * @param ArrayOfAdServerEntityMapping $GetAdServerDropMappingForDateRangeResult
     */
    public function __construct($GetAdServerDropMappingForDateRangeResult)
    {
      $this->GetAdServerDropMappingForDateRangeResult = $GetAdServerDropMappingForDateRangeResult;
    }

    /**
     * @return ArrayOfAdServerEntityMapping
     */
    public function getGetAdServerDropMappingForDateRangeResult()
    {
      return $this->GetAdServerDropMappingForDateRangeResult;
    }

    /**
     * @param ArrayOfAdServerEntityMapping $GetAdServerDropMappingForDateRangeResult
     * @return \FatTail\AdBook\GetAdServerDropMappingForDateRangeResponse
     */
    public function setGetAdServerDropMappingForDateRangeResult($GetAdServerDropMappingForDateRangeResult)
    {
      $this->GetAdServerDropMappingForDateRangeResult = $GetAdServerDropMappingForDateRangeResult;
      return $this;
    }

}

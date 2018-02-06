<?php

namespace FatTail\AdBook;

class GetAvailabilityListResponse
{

    /**
     * @var ArrayOfAvailability $GetAvailabilityListResult
     */
    protected $GetAvailabilityListResult = null;

    /**
     * @param ArrayOfAvailability $GetAvailabilityListResult
     */
    public function __construct($GetAvailabilityListResult)
    {
      $this->GetAvailabilityListResult = $GetAvailabilityListResult;
    }

    /**
     * @return ArrayOfAvailability
     */
    public function getGetAvailabilityListResult()
    {
      return $this->GetAvailabilityListResult;
    }

    /**
     * @param ArrayOfAvailability $GetAvailabilityListResult
     * @return \FatTail\AdBook\GetAvailabilityListResponse
     */
    public function setGetAvailabilityListResult($GetAvailabilityListResult)
    {
      $this->GetAvailabilityListResult = $GetAvailabilityListResult;
      return $this;
    }

}

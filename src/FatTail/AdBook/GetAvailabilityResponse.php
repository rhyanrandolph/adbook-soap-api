<?php

namespace FatTail\AdBook;

class GetAvailabilityResponse
{

    /**
     * @var Availability $GetAvailabilityResult
     */
    protected $GetAvailabilityResult = null;

    /**
     * @param Availability $GetAvailabilityResult
     */
    public function __construct($GetAvailabilityResult)
    {
      $this->GetAvailabilityResult = $GetAvailabilityResult;
    }

    /**
     * @return Availability
     */
    public function getGetAvailabilityResult()
    {
      return $this->GetAvailabilityResult;
    }

    /**
     * @param Availability $GetAvailabilityResult
     * @return \FatTail\AdBook\GetAvailabilityResponse
     */
    public function setGetAvailabilityResult($GetAvailabilityResult)
    {
      $this->GetAvailabilityResult = $GetAvailabilityResult;
      return $this;
    }

}

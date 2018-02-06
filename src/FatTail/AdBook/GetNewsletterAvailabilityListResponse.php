<?php

namespace FatTail\AdBook;

class GetNewsletterAvailabilityListResponse
{

    /**
     * @var ArrayOfNewsletterAvailability $GetNewsletterAvailabilityListResult
     */
    protected $GetNewsletterAvailabilityListResult = null;

    /**
     * @param ArrayOfNewsletterAvailability $GetNewsletterAvailabilityListResult
     */
    public function __construct($GetNewsletterAvailabilityListResult)
    {
      $this->GetNewsletterAvailabilityListResult = $GetNewsletterAvailabilityListResult;
    }

    /**
     * @return ArrayOfNewsletterAvailability
     */
    public function getGetNewsletterAvailabilityListResult()
    {
      return $this->GetNewsletterAvailabilityListResult;
    }

    /**
     * @param ArrayOfNewsletterAvailability $GetNewsletterAvailabilityListResult
     * @return \FatTail\AdBook\GetNewsletterAvailabilityListResponse
     */
    public function setGetNewsletterAvailabilityListResult($GetNewsletterAvailabilityListResult)
    {
      $this->GetNewsletterAvailabilityListResult = $GetNewsletterAvailabilityListResult;
      return $this;
    }

}

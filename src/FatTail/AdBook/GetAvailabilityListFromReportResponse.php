<?php

namespace FatTail\AdBook;

class GetAvailabilityListFromReportResponse
{

    /**
     * @var ArrayOfAvailability $GetAvailabilityListFromReportResult
     */
    protected $GetAvailabilityListFromReportResult = null;

    /**
     * @param ArrayOfAvailability $GetAvailabilityListFromReportResult
     */
    public function __construct($GetAvailabilityListFromReportResult)
    {
      $this->GetAvailabilityListFromReportResult = $GetAvailabilityListFromReportResult;
    }

    /**
     * @return ArrayOfAvailability
     */
    public function getGetAvailabilityListFromReportResult()
    {
      return $this->GetAvailabilityListFromReportResult;
    }

    /**
     * @param ArrayOfAvailability $GetAvailabilityListFromReportResult
     * @return \FatTail\AdBook\GetAvailabilityListFromReportResponse
     */
    public function setGetAvailabilityListFromReportResult($GetAvailabilityListFromReportResult)
    {
      $this->GetAvailabilityListFromReportResult = $GetAvailabilityListFromReportResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetSavedReportListResponse
{

    /**
     * @var ArrayOfSavedReport $GetSavedReportListResult
     */
    protected $GetSavedReportListResult = null;

    /**
     * @param ArrayOfSavedReport $GetSavedReportListResult
     */
    public function __construct($GetSavedReportListResult)
    {
      $this->GetSavedReportListResult = $GetSavedReportListResult;
    }

    /**
     * @return ArrayOfSavedReport
     */
    public function getGetSavedReportListResult()
    {
      return $this->GetSavedReportListResult;
    }

    /**
     * @param ArrayOfSavedReport $GetSavedReportListResult
     * @return \FatTail\AdBook\GetSavedReportListResponse
     */
    public function setGetSavedReportListResult($GetSavedReportListResult)
    {
      $this->GetSavedReportListResult = $GetSavedReportListResult;
      return $this;
    }

}

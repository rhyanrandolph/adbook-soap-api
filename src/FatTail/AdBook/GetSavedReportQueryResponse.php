<?php

namespace FatTail\AdBook;

class GetSavedReportQueryResponse
{

    /**
     * @var SavedReportQuery $GetSavedReportQueryResult
     */
    protected $GetSavedReportQueryResult = null;

    /**
     * @param SavedReportQuery $GetSavedReportQueryResult
     */
    public function __construct($GetSavedReportQueryResult)
    {
      $this->GetSavedReportQueryResult = $GetSavedReportQueryResult;
    }

    /**
     * @return SavedReportQuery
     */
    public function getGetSavedReportQueryResult()
    {
      return $this->GetSavedReportQueryResult;
    }

    /**
     * @param SavedReportQuery $GetSavedReportQueryResult
     * @return \FatTail\AdBook\GetSavedReportQueryResponse
     */
    public function setGetSavedReportQueryResult($GetSavedReportQueryResult)
    {
      $this->GetSavedReportQueryResult = $GetSavedReportQueryResult;
      return $this;
    }

}

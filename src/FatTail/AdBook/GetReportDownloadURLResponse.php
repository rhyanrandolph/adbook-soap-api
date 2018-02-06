<?php

namespace FatTail\AdBook;

class GetReportDownloadURLResponse
{

    /**
     * @var string $GetReportDownloadURLResult
     */
    protected $GetReportDownloadURLResult = null;

    /**
     * @param string $GetReportDownloadURLResult
     */
    public function __construct($GetReportDownloadURLResult)
    {
      $this->GetReportDownloadURLResult = $GetReportDownloadURLResult;
    }

    /**
     * @return string
     */
    public function getGetReportDownloadURLResult()
    {
      return $this->GetReportDownloadURLResult;
    }

    /**
     * @param string $GetReportDownloadURLResult
     * @return \FatTail\AdBook\GetReportDownloadURLResponse
     */
    public function setGetReportDownloadURLResult($GetReportDownloadURLResult)
    {
      $this->GetReportDownloadURLResult = $GetReportDownloadURLResult;
      return $this;
    }

}

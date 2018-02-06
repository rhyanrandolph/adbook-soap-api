<?php

namespace FatTail\AdBook;

class GetReportDownloadURL
{

    /**
     * @var int $reportJobId
     */
    protected $reportJobId = null;

    /**
     * @var ReportOutputType $reportOutputType
     */
    protected $reportOutputType = null;

    /**
     * @param int $reportJobId
     * @param ReportOutputType $reportOutputType
     */
    public function __construct($reportJobId, $reportOutputType)
    {
      $this->reportJobId = $reportJobId;
      $this->reportOutputType = $reportOutputType;
    }

    /**
     * @return int
     */
    public function getReportJobId()
    {
      return $this->reportJobId;
    }

    /**
     * @param int $reportJobId
     * @return \FatTail\AdBook\GetReportDownloadURL
     */
    public function setReportJobId($reportJobId)
    {
      $this->reportJobId = $reportJobId;
      return $this;
    }

    /**
     * @return ReportOutputType
     */
    public function getReportOutputType()
    {
      return $this->reportOutputType;
    }

    /**
     * @param ReportOutputType $reportOutputType
     * @return \FatTail\AdBook\GetReportDownloadURL
     */
    public function setReportOutputType($reportOutputType)
    {
      $this->reportOutputType = $reportOutputType;
      return $this;
    }

}

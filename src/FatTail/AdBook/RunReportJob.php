<?php

namespace FatTail\AdBook;

class RunReportJob
{

    /**
     * @var ReportJob $reportJob
     */
    protected $reportJob = null;

    /**
     * @param ReportJob $reportJob
     */
    public function __construct($reportJob)
    {
      $this->reportJob = $reportJob;
    }

    /**
     * @return ReportJob
     */
    public function getReportJob()
    {
      return $this->reportJob;
    }

    /**
     * @param ReportJob $reportJob
     * @return \FatTail\AdBook\RunReportJob
     */
    public function setReportJob($reportJob)
    {
      $this->reportJob = $reportJob;
      return $this;
    }

}

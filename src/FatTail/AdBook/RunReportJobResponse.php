<?php

namespace FatTail\AdBook;

class RunReportJobResponse
{

    /**
     * @var ReportJob $RunReportJobResult
     */
    protected $RunReportJobResult = null;

    /**
     * @param ReportJob $RunReportJobResult
     */
    public function __construct($RunReportJobResult)
    {
      $this->RunReportJobResult = $RunReportJobResult;
    }

    /**
     * @return ReportJob
     */
    public function getRunReportJobResult()
    {
      return $this->RunReportJobResult;
    }

    /**
     * @param ReportJob $RunReportJobResult
     * @return \FatTail\AdBook\RunReportJobResponse
     */
    public function setRunReportJobResult($RunReportJobResult)
    {
      $this->RunReportJobResult = $RunReportJobResult;
      return $this;
    }

}

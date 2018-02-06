<?php

namespace FatTail\AdBook;

class GetReportJobResponse
{

    /**
     * @var ReportJob $GetReportJobResult
     */
    protected $GetReportJobResult = null;

    /**
     * @param ReportJob $GetReportJobResult
     */
    public function __construct($GetReportJobResult)
    {
      $this->GetReportJobResult = $GetReportJobResult;
    }

    /**
     * @return ReportJob
     */
    public function getGetReportJobResult()
    {
      return $this->GetReportJobResult;
    }

    /**
     * @param ReportJob $GetReportJobResult
     * @return \FatTail\AdBook\GetReportJobResponse
     */
    public function setGetReportJobResult($GetReportJobResult)
    {
      $this->GetReportJobResult = $GetReportJobResult;
      return $this;
    }

}

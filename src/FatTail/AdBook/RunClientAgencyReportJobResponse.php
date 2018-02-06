<?php

namespace FatTail\AdBook;

class RunClientAgencyReportJobResponse
{

    /**
     * @var ClientAgencyReportJob $RunClientAgencyReportJobResult
     */
    protected $RunClientAgencyReportJobResult = null;

    /**
     * @param ClientAgencyReportJob $RunClientAgencyReportJobResult
     */
    public function __construct($RunClientAgencyReportJobResult)
    {
      $this->RunClientAgencyReportJobResult = $RunClientAgencyReportJobResult;
    }

    /**
     * @return ClientAgencyReportJob
     */
    public function getRunClientAgencyReportJobResult()
    {
      return $this->RunClientAgencyReportJobResult;
    }

    /**
     * @param ClientAgencyReportJob $RunClientAgencyReportJobResult
     * @return \FatTail\AdBook\RunClientAgencyReportJobResponse
     */
    public function setRunClientAgencyReportJobResult($RunClientAgencyReportJobResult)
    {
      $this->RunClientAgencyReportJobResult = $RunClientAgencyReportJobResult;
      return $this;
    }

}

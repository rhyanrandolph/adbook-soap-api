<?php

namespace FatTail\AdBook;

class GetClientAgencyReportJobResponse
{

    /**
     * @var ClientAgencyReportJob $GetClientAgencyReportJobResult
     */
    protected $GetClientAgencyReportJobResult = null;

    /**
     * @param ClientAgencyReportJob $GetClientAgencyReportJobResult
     */
    public function __construct($GetClientAgencyReportJobResult)
    {
      $this->GetClientAgencyReportJobResult = $GetClientAgencyReportJobResult;
    }

    /**
     * @return ClientAgencyReportJob
     */
    public function getGetClientAgencyReportJobResult()
    {
      return $this->GetClientAgencyReportJobResult;
    }

    /**
     * @param ClientAgencyReportJob $GetClientAgencyReportJobResult
     * @return \FatTail\AdBook\GetClientAgencyReportJobResponse
     */
    public function setGetClientAgencyReportJobResult($GetClientAgencyReportJobResult)
    {
      $this->GetClientAgencyReportJobResult = $GetClientAgencyReportJobResult;
      return $this;
    }

}

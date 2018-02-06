<?php

namespace FatTail\AdBook;

class RunClientAgencyReportJob
{

    /**
     * @var ClientAgencyReportJob $clientAgencyReportJob
     */
    protected $clientAgencyReportJob = null;

    /**
     * @param ClientAgencyReportJob $clientAgencyReportJob
     */
    public function __construct($clientAgencyReportJob)
    {
      $this->clientAgencyReportJob = $clientAgencyReportJob;
    }

    /**
     * @return ClientAgencyReportJob
     */
    public function getClientAgencyReportJob()
    {
      return $this->clientAgencyReportJob;
    }

    /**
     * @param ClientAgencyReportJob $clientAgencyReportJob
     * @return \FatTail\AdBook\RunClientAgencyReportJob
     */
    public function setClientAgencyReportJob($clientAgencyReportJob)
    {
      $this->clientAgencyReportJob = $clientAgencyReportJob;
      return $this;
    }

}

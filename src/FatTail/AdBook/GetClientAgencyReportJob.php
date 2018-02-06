<?php

namespace FatTail\AdBook;

class GetClientAgencyReportJob
{

    /**
     * @var int $clientAgencyReportJobId
     */
    protected $clientAgencyReportJobId = null;

    /**
     * @param int $clientAgencyReportJobId
     */
    public function __construct($clientAgencyReportJobId)
    {
      $this->clientAgencyReportJobId = $clientAgencyReportJobId;
    }

    /**
     * @return int
     */
    public function getClientAgencyReportJobId()
    {
      return $this->clientAgencyReportJobId;
    }

    /**
     * @param int $clientAgencyReportJobId
     * @return \FatTail\AdBook\GetClientAgencyReportJob
     */
    public function setClientAgencyReportJobId($clientAgencyReportJobId)
    {
      $this->clientAgencyReportJobId = $clientAgencyReportJobId;
      return $this;
    }

}

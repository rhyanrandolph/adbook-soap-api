<?php

namespace FatTail\AdBook;

class ClientAgencyReportJob extends AdBookConnectEntity
{

    /**
     * @var int $ClientAgencyReportJobID
     */
    protected $ClientAgencyReportJobID = null;

    /**
     * @var ClientAgencyReportQuery $ClientAgencyReportQuery
     */
    protected $ClientAgencyReportQuery = null;

    /**
     * @var ReportStatus $Status
     */
    protected $Status = null;

    /**
     * @var string $StatusMessage
     */
    protected $StatusMessage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getClientAgencyReportJobID()
    {
      return $this->ClientAgencyReportJobID;
    }

    /**
     * @param int $ClientAgencyReportJobID
     * @return \FatTail\AdBook\ClientAgencyReportJob
     */
    public function setClientAgencyReportJobID($ClientAgencyReportJobID)
    {
      $this->ClientAgencyReportJobID = $ClientAgencyReportJobID;
      return $this;
    }

    /**
     * @return ClientAgencyReportQuery
     */
    public function getClientAgencyReportQuery()
    {
      return $this->ClientAgencyReportQuery;
    }

    /**
     * @param ClientAgencyReportQuery $ClientAgencyReportQuery
     * @return \FatTail\AdBook\ClientAgencyReportJob
     */
    public function setClientAgencyReportQuery($ClientAgencyReportQuery)
    {
      $this->ClientAgencyReportQuery = $ClientAgencyReportQuery;
      return $this;
    }

    /**
     * @return ReportStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ReportStatus $Status
     * @return \FatTail\AdBook\ClientAgencyReportJob
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
      return $this->StatusMessage;
    }

    /**
     * @param string $StatusMessage
     * @return \FatTail\AdBook\ClientAgencyReportJob
     */
    public function setStatusMessage($StatusMessage)
    {
      $this->StatusMessage = $StatusMessage;
      return $this;
    }

}

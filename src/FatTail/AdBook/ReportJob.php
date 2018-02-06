<?php

namespace FatTail\AdBook;

class ReportJob extends AdBookConnectEntity
{

    /**
     * @var int $ReportJobID
     */
    protected $ReportJobID = null;

    /**
     * @var ReportQuery $ReportQuery
     */
    protected $ReportQuery = null;

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
    public function getReportJobID()
    {
      return $this->ReportJobID;
    }

    /**
     * @param int $ReportJobID
     * @return \FatTail\AdBook\ReportJob
     */
    public function setReportJobID($ReportJobID)
    {
      $this->ReportJobID = $ReportJobID;
      return $this;
    }

    /**
     * @return ReportQuery
     */
    public function getReportQuery()
    {
      return $this->ReportQuery;
    }

    /**
     * @param ReportQuery $ReportQuery
     * @return \FatTail\AdBook\ReportJob
     */
    public function setReportQuery($ReportQuery)
    {
      $this->ReportQuery = $ReportQuery;
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
     * @return \FatTail\AdBook\ReportJob
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
     * @return \FatTail\AdBook\ReportJob
     */
    public function setStatusMessage($StatusMessage)
    {
      $this->StatusMessage = $StatusMessage;
      return $this;
    }

}

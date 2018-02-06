<?php

namespace FatTail\AdBook;

class GetReportJob
{

    /**
     * @var int $reportJobId
     */
    protected $reportJobId = null;

    /**
     * @param int $reportJobId
     */
    public function __construct($reportJobId)
    {
      $this->reportJobId = $reportJobId;
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
     * @return \FatTail\AdBook\GetReportJob
     */
    public function setReportJobId($reportJobId)
    {
      $this->reportJobId = $reportJobId;
      return $this;
    }

}

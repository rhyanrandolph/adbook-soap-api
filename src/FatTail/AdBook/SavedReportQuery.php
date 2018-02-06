<?php

namespace FatTail\AdBook;

class SavedReportQuery extends SavedReport
{

    /**
     * @var ReportQuery $ReportQuery
     */
    protected $ReportQuery = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \FatTail\AdBook\SavedReportQuery
     */
    public function setReportQuery($ReportQuery)
    {
      $this->ReportQuery = $ReportQuery;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetSavedReportQuery
{

    /**
     * @var int $savedReportId
     */
    protected $savedReportId = null;

    /**
     * @param int $savedReportId
     */
    public function __construct($savedReportId)
    {
      $this->savedReportId = $savedReportId;
    }

    /**
     * @return int
     */
    public function getSavedReportId()
    {
      return $this->savedReportId;
    }

    /**
     * @param int $savedReportId
     * @return \FatTail\AdBook\GetSavedReportQuery
     */
    public function setSavedReportId($savedReportId)
    {
      $this->savedReportId = $savedReportId;
      return $this;
    }

}

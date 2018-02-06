<?php

namespace FatTail\AdBook;

class SavedReport extends AdBookConnectEntity
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $SavedReportID
     */
    protected $SavedReportID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FatTail\AdBook\SavedReport
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getSavedReportID()
    {
      return $this->SavedReportID;
    }

    /**
     * @param int $SavedReportID
     * @return \FatTail\AdBook\SavedReport
     */
    public function setSavedReportID($SavedReportID)
    {
      $this->SavedReportID = $SavedReportID;
      return $this;
    }

}

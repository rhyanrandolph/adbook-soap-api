<?php

namespace FatTail\AdBook;

class AdUnit extends AdBookConnectEntity
{

    /**
     * @var int $AdUnitID
     */
    protected $AdUnitID = null;

    /**
     * @var string $AdUnitName
     */
    protected $AdUnitName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAdUnitID()
    {
      return $this->AdUnitID;
    }

    /**
     * @param int $AdUnitID
     * @return \FatTail\AdBook\AdUnit
     */
    public function setAdUnitID($AdUnitID)
    {
      $this->AdUnitID = $AdUnitID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdUnitName()
    {
      return $this->AdUnitName;
    }

    /**
     * @param string $AdUnitName
     * @return \FatTail\AdBook\AdUnit
     */
    public function setAdUnitName($AdUnitName)
    {
      $this->AdUnitName = $AdUnitName;
      return $this;
    }

}

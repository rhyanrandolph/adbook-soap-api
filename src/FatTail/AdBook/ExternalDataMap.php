<?php

namespace FatTail\AdBook;

class ExternalDataMap extends AdBookConnectEntity
{

    /**
     * @var int $AdBookID
     */
    protected $AdBookID = null;

    /**
     * @var string $ExternalData
     */
    protected $ExternalData = null;

    /**
     * @var string $ExternalDataDisplayName
     */
    protected $ExternalDataDisplayName = null;

    /**
     * @var ExternalDataMapTypes $ExternalDataMapType
     */
    protected $ExternalDataMapType = null;

    /**
     * @param int $AdBookID
     * @param ExternalDataMapTypes $ExternalDataMapType
     */
    public function __construct($AdBookID, $ExternalDataMapType)
    {
      $this->AdBookID = $AdBookID;
      $this->ExternalDataMapType = $ExternalDataMapType;
    }

    /**
     * @return int
     */
    public function getAdBookID()
    {
      return $this->AdBookID;
    }

    /**
     * @param int $AdBookID
     * @return \FatTail\AdBook\ExternalDataMap
     */
    public function setAdBookID($AdBookID)
    {
      $this->AdBookID = $AdBookID;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalData()
    {
      return $this->ExternalData;
    }

    /**
     * @param string $ExternalData
     * @return \FatTail\AdBook\ExternalDataMap
     */
    public function setExternalData($ExternalData)
    {
      $this->ExternalData = $ExternalData;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalDataDisplayName()
    {
      return $this->ExternalDataDisplayName;
    }

    /**
     * @param string $ExternalDataDisplayName
     * @return \FatTail\AdBook\ExternalDataMap
     */
    public function setExternalDataDisplayName($ExternalDataDisplayName)
    {
      $this->ExternalDataDisplayName = $ExternalDataDisplayName;
      return $this;
    }

    /**
     * @return ExternalDataMapTypes
     */
    public function getExternalDataMapType()
    {
      return $this->ExternalDataMapType;
    }

    /**
     * @param ExternalDataMapTypes $ExternalDataMapType
     * @return \FatTail\AdBook\ExternalDataMap
     */
    public function setExternalDataMapType($ExternalDataMapType)
    {
      $this->ExternalDataMapType = $ExternalDataMapType;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetExternalDataMapList
{

    /**
     * @var ExternalDataMapTypes $externalDataMapType
     */
    protected $externalDataMapType = null;

    /**
     * @var string $externalData
     */
    protected $externalData = null;

    /**
     * @param ExternalDataMapTypes $externalDataMapType
     * @param string $externalData
     */
    public function __construct($externalDataMapType, $externalData)
    {
      $this->externalDataMapType = $externalDataMapType;
      $this->externalData = $externalData;
    }

    /**
     * @return ExternalDataMapTypes
     */
    public function getExternalDataMapType()
    {
      return $this->externalDataMapType;
    }

    /**
     * @param ExternalDataMapTypes $externalDataMapType
     * @return \FatTail\AdBook\GetExternalDataMapList
     */
    public function setExternalDataMapType($externalDataMapType)
    {
      $this->externalDataMapType = $externalDataMapType;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalData()
    {
      return $this->externalData;
    }

    /**
     * @param string $externalData
     * @return \FatTail\AdBook\GetExternalDataMapList
     */
    public function setExternalData($externalData)
    {
      $this->externalData = $externalData;
      return $this;
    }

}

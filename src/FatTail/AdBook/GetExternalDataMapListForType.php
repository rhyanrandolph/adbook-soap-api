<?php

namespace FatTail\AdBook;

class GetExternalDataMapListForType
{

    /**
     * @var ExternalDataMapTypes $externalDataMapType
     */
    protected $externalDataMapType = null;

    /**
     * @param ExternalDataMapTypes $externalDataMapType
     */
    public function __construct($externalDataMapType)
    {
      $this->externalDataMapType = $externalDataMapType;
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
     * @return \FatTail\AdBook\GetExternalDataMapListForType
     */
    public function setExternalDataMapType($externalDataMapType)
    {
      $this->externalDataMapType = $externalDataMapType;
      return $this;
    }

}

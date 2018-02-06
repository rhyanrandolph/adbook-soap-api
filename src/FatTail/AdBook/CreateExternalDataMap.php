<?php

namespace FatTail\AdBook;

class CreateExternalDataMap
{

    /**
     * @var ExternalDataMap $externalDataMap
     */
    protected $externalDataMap = null;

    /**
     * @param ExternalDataMap $externalDataMap
     */
    public function __construct($externalDataMap)
    {
      $this->externalDataMap = $externalDataMap;
    }

    /**
     * @return ExternalDataMap
     */
    public function getExternalDataMap()
    {
      return $this->externalDataMap;
    }

    /**
     * @param ExternalDataMap $externalDataMap
     * @return \FatTail\AdBook\CreateExternalDataMap
     */
    public function setExternalDataMap($externalDataMap)
    {
      $this->externalDataMap = $externalDataMap;
      return $this;
    }

}

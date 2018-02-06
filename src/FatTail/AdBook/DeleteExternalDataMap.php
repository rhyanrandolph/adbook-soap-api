<?php

namespace FatTail\AdBook;

class DeleteExternalDataMap
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
     * @return \FatTail\AdBook\DeleteExternalDataMap
     */
    public function setExternalDataMap($externalDataMap)
    {
      $this->externalDataMap = $externalDataMap;
      return $this;
    }

}

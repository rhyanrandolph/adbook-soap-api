<?php

namespace FatTail\AdBook;

class GetPackageDefinition
{

    /**
     * @var int $packageMediaElementId
     */
    protected $packageMediaElementId = null;

    /**
     * @param int $packageMediaElementId
     */
    public function __construct($packageMediaElementId)
    {
      $this->packageMediaElementId = $packageMediaElementId;
    }

    /**
     * @return int
     */
    public function getPackageMediaElementId()
    {
      return $this->packageMediaElementId;
    }

    /**
     * @param int $packageMediaElementId
     * @return \FatTail\AdBook\GetPackageDefinition
     */
    public function setPackageMediaElementId($packageMediaElementId)
    {
      $this->packageMediaElementId = $packageMediaElementId;
      return $this;
    }

}

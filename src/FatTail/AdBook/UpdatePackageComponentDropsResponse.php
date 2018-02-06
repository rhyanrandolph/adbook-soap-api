<?php

namespace FatTail\AdBook;

class UpdatePackageComponentDropsResponse
{

    /**
     * @var ArrayOfPackageComponentDropUpdateResult $UpdatePackageComponentDropsResult
     */
    protected $UpdatePackageComponentDropsResult = null;

    /**
     * @param ArrayOfPackageComponentDropUpdateResult $UpdatePackageComponentDropsResult
     */
    public function __construct($UpdatePackageComponentDropsResult)
    {
      $this->UpdatePackageComponentDropsResult = $UpdatePackageComponentDropsResult;
    }

    /**
     * @return ArrayOfPackageComponentDropUpdateResult
     */
    public function getUpdatePackageComponentDropsResult()
    {
      return $this->UpdatePackageComponentDropsResult;
    }

    /**
     * @param ArrayOfPackageComponentDropUpdateResult $UpdatePackageComponentDropsResult
     * @return \FatTail\AdBook\UpdatePackageComponentDropsResponse
     */
    public function setUpdatePackageComponentDropsResult($UpdatePackageComponentDropsResult)
    {
      $this->UpdatePackageComponentDropsResult = $UpdatePackageComponentDropsResult;
      return $this;
    }

}

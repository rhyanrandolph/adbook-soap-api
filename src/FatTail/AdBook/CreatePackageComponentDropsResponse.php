<?php

namespace FatTail\AdBook;

class CreatePackageComponentDropsResponse
{

    /**
     * @var ArrayOfPackageComponentDropCreateResult $CreatePackageComponentDropsResult
     */
    protected $CreatePackageComponentDropsResult = null;

    /**
     * @param ArrayOfPackageComponentDropCreateResult $CreatePackageComponentDropsResult
     */
    public function __construct($CreatePackageComponentDropsResult)
    {
      $this->CreatePackageComponentDropsResult = $CreatePackageComponentDropsResult;
    }

    /**
     * @return ArrayOfPackageComponentDropCreateResult
     */
    public function getCreatePackageComponentDropsResult()
    {
      return $this->CreatePackageComponentDropsResult;
    }

    /**
     * @param ArrayOfPackageComponentDropCreateResult $CreatePackageComponentDropsResult
     * @return \FatTail\AdBook\CreatePackageComponentDropsResponse
     */
    public function setCreatePackageComponentDropsResult($CreatePackageComponentDropsResult)
    {
      $this->CreatePackageComponentDropsResult = $CreatePackageComponentDropsResult;
      return $this;
    }

}

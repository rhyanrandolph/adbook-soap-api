<?php

namespace FatTail\AdBook;

class GetPackageComponentDropsResponse
{

    /**
     * @var ArrayOfPackageComponentDrop $GetPackageComponentDropsResult
     */
    protected $GetPackageComponentDropsResult = null;

    /**
     * @param ArrayOfPackageComponentDrop $GetPackageComponentDropsResult
     */
    public function __construct($GetPackageComponentDropsResult)
    {
      $this->GetPackageComponentDropsResult = $GetPackageComponentDropsResult;
    }

    /**
     * @return ArrayOfPackageComponentDrop
     */
    public function getGetPackageComponentDropsResult()
    {
      return $this->GetPackageComponentDropsResult;
    }

    /**
     * @param ArrayOfPackageComponentDrop $GetPackageComponentDropsResult
     * @return \FatTail\AdBook\GetPackageComponentDropsResponse
     */
    public function setGetPackageComponentDropsResult($GetPackageComponentDropsResult)
    {
      $this->GetPackageComponentDropsResult = $GetPackageComponentDropsResult;
      return $this;
    }

}

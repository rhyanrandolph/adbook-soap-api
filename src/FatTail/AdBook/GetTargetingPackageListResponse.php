<?php

namespace FatTail\AdBook;

class GetTargetingPackageListResponse
{

    /**
     * @var ArrayOfTargetingPackage $GetTargetingPackageListResult
     */
    protected $GetTargetingPackageListResult = null;

    /**
     * @param ArrayOfTargetingPackage $GetTargetingPackageListResult
     */
    public function __construct($GetTargetingPackageListResult)
    {
      $this->GetTargetingPackageListResult = $GetTargetingPackageListResult;
    }

    /**
     * @return ArrayOfTargetingPackage
     */
    public function getGetTargetingPackageListResult()
    {
      return $this->GetTargetingPackageListResult;
    }

    /**
     * @param ArrayOfTargetingPackage $GetTargetingPackageListResult
     * @return \FatTail\AdBook\GetTargetingPackageListResponse
     */
    public function setGetTargetingPackageListResult($GetTargetingPackageListResult)
    {
      $this->GetTargetingPackageListResult = $GetTargetingPackageListResult;
      return $this;
    }

}

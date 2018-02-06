<?php

namespace FatTail\AdBook;

class TargetingPackage extends AdBookConnectEntity
{

    /**
     * @var string $PackageName
     */
    protected $PackageName = null;

    /**
     * @var int $TargetingPackageID
     */
    protected $TargetingPackageID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPackageName()
    {
      return $this->PackageName;
    }

    /**
     * @param string $PackageName
     * @return \FatTail\AdBook\TargetingPackage
     */
    public function setPackageName($PackageName)
    {
      $this->PackageName = $PackageName;
      return $this;
    }

    /**
     * @return int
     */
    public function getTargetingPackageID()
    {
      return $this->TargetingPackageID;
    }

    /**
     * @param int $TargetingPackageID
     * @return \FatTail\AdBook\TargetingPackage
     */
    public function setTargetingPackageID($TargetingPackageID)
    {
      $this->TargetingPackageID = $TargetingPackageID;
      return $this;
    }

}

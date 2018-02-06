<?php

namespace FatTail\AdBook;

class PackageComponentDropCreateResult
{

    /**
     * @var DataAccessFault $Fault
     */
    protected $Fault = null;

    /**
     * @var PackageComponentDrop $PackageComponentDrop
     */
    protected $PackageComponentDrop = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DataAccessFault
     */
    public function getFault()
    {
      return $this->Fault;
    }

    /**
     * @param DataAccessFault $Fault
     * @return \FatTail\AdBook\PackageComponentDropCreateResult
     */
    public function setFault($Fault)
    {
      $this->Fault = $Fault;
      return $this;
    }

    /**
     * @return PackageComponentDrop
     */
    public function getPackageComponentDrop()
    {
      return $this->PackageComponentDrop;
    }

    /**
     * @param PackageComponentDrop $PackageComponentDrop
     * @return \FatTail\AdBook\PackageComponentDropCreateResult
     */
    public function setPackageComponentDrop($PackageComponentDrop)
    {
      $this->PackageComponentDrop = $PackageComponentDrop;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param boolean $Success
     * @return \FatTail\AdBook\PackageComponentDropCreateResult
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class Targeting extends AdBookConnectEntity
{

    /**
     * @var ArrayOflong $TargetingElementIDList
     */
    protected $TargetingElementIDList = null;

    /**
     * @var ArrayOflong $TargetingPackageIDList
     */
    protected $TargetingPackageIDList = null;

    /**
     * @var int $TargetingAllocationVersionId
     */
    protected $TargetingAllocationVersionId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOflong
     */
    public function getTargetingElementIDList()
    {
      return $this->TargetingElementIDList;
    }

    /**
     * @param ArrayOflong $TargetingElementIDList
     * @return \FatTail\AdBook\Targeting
     */
    public function setTargetingElementIDList($TargetingElementIDList)
    {
      $this->TargetingElementIDList = $TargetingElementIDList;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getTargetingPackageIDList()
    {
      return $this->TargetingPackageIDList;
    }

    /**
     * @param ArrayOflong $TargetingPackageIDList
     * @return \FatTail\AdBook\Targeting
     */
    public function setTargetingPackageIDList($TargetingPackageIDList)
    {
      $this->TargetingPackageIDList = $TargetingPackageIDList;
      return $this;
    }

    /**
     * @return int
     */
    public function getTargetingAllocationVersionId()
    {
      return $this->TargetingAllocationVersionId;
    }

    /**
     * @param int $TargetingAllocationVersionId
     * @return \FatTail\AdBook\Targeting
     */
    public function setTargetingAllocationVersionId($TargetingAllocationVersionId)
    {
      $this->TargetingAllocationVersionId = $TargetingAllocationVersionId;
      return $this;
    }

}

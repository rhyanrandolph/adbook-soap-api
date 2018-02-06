<?php

namespace FatTail\AdBook;

class TargetingGroup extends AdBookConnectEntity
{

    /**
     * @var string $GroupName
     */
    protected $GroupName = null;

    /**
     * @var int $TargetingGroupID
     */
    protected $TargetingGroupID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
      return $this->GroupName;
    }

    /**
     * @param string $GroupName
     * @return \FatTail\AdBook\TargetingGroup
     */
    public function setGroupName($GroupName)
    {
      $this->GroupName = $GroupName;
      return $this;
    }

    /**
     * @return int
     */
    public function getTargetingGroupID()
    {
      return $this->TargetingGroupID;
    }

    /**
     * @param int $TargetingGroupID
     * @return \FatTail\AdBook\TargetingGroup
     */
    public function setTargetingGroupID($TargetingGroupID)
    {
      $this->TargetingGroupID = $TargetingGroupID;
      return $this;
    }

}

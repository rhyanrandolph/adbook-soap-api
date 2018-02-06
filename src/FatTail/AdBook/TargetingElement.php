<?php

namespace FatTail\AdBook;

class TargetingElement extends AdBookConnectEntity
{

    /**
     * @var string $ElementName
     */
    protected $ElementName = null;

    /**
     * @var string $GroupName
     */
    protected $GroupName = null;

    /**
     * @var int $TargetingElementID
     */
    protected $TargetingElementID = null;

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
    public function getElementName()
    {
      return $this->ElementName;
    }

    /**
     * @param string $ElementName
     * @return \FatTail\AdBook\TargetingElement
     */
    public function setElementName($ElementName)
    {
      $this->ElementName = $ElementName;
      return $this;
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
     * @return \FatTail\AdBook\TargetingElement
     */
    public function setGroupName($GroupName)
    {
      $this->GroupName = $GroupName;
      return $this;
    }

    /**
     * @return int
     */
    public function getTargetingElementID()
    {
      return $this->TargetingElementID;
    }

    /**
     * @param int $TargetingElementID
     * @return \FatTail\AdBook\TargetingElement
     */
    public function setTargetingElementID($TargetingElementID)
    {
      $this->TargetingElementID = $TargetingElementID;
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
     * @return \FatTail\AdBook\TargetingElement
     */
    public function setTargetingGroupID($TargetingGroupID)
    {
      $this->TargetingGroupID = $TargetingGroupID;
      return $this;
    }

}

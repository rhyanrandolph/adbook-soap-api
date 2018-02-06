<?php

namespace FatTail\AdBook;

class MediaElement extends AdBookConnectEntity
{

    /**
     * @var string $GroupCode
     */
    protected $GroupCode = null;

    /**
     * @var int $MediaElementID
     */
    protected $MediaElementID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $ParentID
     */
    protected $ParentID = null;

    /**
     * @var string $Path
     */
    protected $Path = null;

    /**
     * @var int $Viewable
     */
    protected $Viewable = null;

    /**
     * @var MediaType $MediaType
     */
    protected $MediaType = null;

    /**
     * @var float $AdServerID
     */
    protected $AdServerID = null;

    /**
     * @var ArrayOfMediaElementPropertyValue $MediaElementDynamicProperties
     */
    protected $MediaElementDynamicProperties = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getGroupCode()
    {
      return $this->GroupCode;
    }

    /**
     * @param string $GroupCode
     * @return \FatTail\AdBook\MediaElement
     */
    public function setGroupCode($GroupCode)
    {
      $this->GroupCode = $GroupCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getMediaElementID()
    {
      return $this->MediaElementID;
    }

    /**
     * @param int $MediaElementID
     * @return \FatTail\AdBook\MediaElement
     */
    public function setMediaElementID($MediaElementID)
    {
      $this->MediaElementID = $MediaElementID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FatTail\AdBook\MediaElement
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentID()
    {
      return $this->ParentID;
    }

    /**
     * @param int $ParentID
     * @return \FatTail\AdBook\MediaElement
     */
    public function setParentID($ParentID)
    {
      $this->ParentID = $ParentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
      return $this->Path;
    }

    /**
     * @param string $Path
     * @return \FatTail\AdBook\MediaElement
     */
    public function setPath($Path)
    {
      $this->Path = $Path;
      return $this;
    }

    /**
     * @return int
     */
    public function getViewable()
    {
      return $this->Viewable;
    }

    /**
     * @param int $Viewable
     * @return \FatTail\AdBook\MediaElement
     */
    public function setViewable($Viewable)
    {
      $this->Viewable = $Viewable;
      return $this;
    }

    /**
     * @return MediaType
     */
    public function getMediaType()
    {
      return $this->MediaType;
    }

    /**
     * @param MediaType $MediaType
     * @return \FatTail\AdBook\MediaElement
     */
    public function setMediaType($MediaType)
    {
      $this->MediaType = $MediaType;
      return $this;
    }

    /**
     * @return float
     */
    public function getAdServerID()
    {
      return $this->AdServerID;
    }

    /**
     * @param float $AdServerID
     * @return \FatTail\AdBook\MediaElement
     */
    public function setAdServerID($AdServerID)
    {
      $this->AdServerID = $AdServerID;
      return $this;
    }

    /**
     * @return ArrayOfMediaElementPropertyValue
     */
    public function getMediaElementDynamicProperties()
    {
      return $this->MediaElementDynamicProperties;
    }

    /**
     * @param ArrayOfMediaElementPropertyValue $MediaElementDynamicProperties
     * @return \FatTail\AdBook\MediaElement
     */
    public function setMediaElementDynamicProperties($MediaElementDynamicProperties)
    {
      $this->MediaElementDynamicProperties = $MediaElementDynamicProperties;
      return $this;
    }

}

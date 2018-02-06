<?php

namespace FatTail\AdBook;

class CreativeAssignment extends AdBookConnectEntity
{

    /**
     * @var int $CreativeAssignmentID
     */
    protected $CreativeAssignmentID = null;

    /**
     * @var string $CreativeAssignmentName
     */
    protected $CreativeAssignmentName = null;

    /**
     * @var int $CreativeID
     */
    protected $CreativeID = null;

    /**
     * @var int $OrderID
     */
    protected $OrderID = null;

    /**
     * @var ArrayOfDynamicPropertyValue $CreativeAssignmentDynamicProperties
     */
    protected $CreativeAssignmentDynamicProperties = null;

    /**
     * @var int $AssosiatedDrop
     */
    protected $AssosiatedDrop = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCreativeAssignmentID()
    {
      return $this->CreativeAssignmentID;
    }

    /**
     * @param int $CreativeAssignmentID
     * @return \FatTail\AdBook\CreativeAssignment
     */
    public function setCreativeAssignmentID($CreativeAssignmentID)
    {
      $this->CreativeAssignmentID = $CreativeAssignmentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreativeAssignmentName()
    {
      return $this->CreativeAssignmentName;
    }

    /**
     * @param string $CreativeAssignmentName
     * @return \FatTail\AdBook\CreativeAssignment
     */
    public function setCreativeAssignmentName($CreativeAssignmentName)
    {
      $this->CreativeAssignmentName = $CreativeAssignmentName;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreativeID()
    {
      return $this->CreativeID;
    }

    /**
     * @param int $CreativeID
     * @return \FatTail\AdBook\CreativeAssignment
     */
    public function setCreativeID($CreativeID)
    {
      $this->CreativeID = $CreativeID;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param int $OrderID
     * @return \FatTail\AdBook\CreativeAssignment
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return ArrayOfDynamicPropertyValue
     */
    public function getCreativeAssignmentDynamicProperties()
    {
      return $this->CreativeAssignmentDynamicProperties;
    }

    /**
     * @param ArrayOfDynamicPropertyValue $CreativeAssignmentDynamicProperties
     * @return \FatTail\AdBook\CreativeAssignment
     */
    public function setCreativeAssignmentDynamicProperties($CreativeAssignmentDynamicProperties)
    {
      $this->CreativeAssignmentDynamicProperties = $CreativeAssignmentDynamicProperties;
      return $this;
    }

    /**
     * @return int
     */
    public function getAssosiatedDrop()
    {
      return $this->AssosiatedDrop;
    }

    /**
     * @param int $AssosiatedDrop
     * @return \FatTail\AdBook\CreativeAssignment
     */
    public function setAssosiatedDrop($AssosiatedDrop)
    {
      $this->AssosiatedDrop = $AssosiatedDrop;
      return $this;
    }

}

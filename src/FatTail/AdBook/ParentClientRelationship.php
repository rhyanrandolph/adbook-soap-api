<?php

namespace FatTail\AdBook;

class ParentClientRelationship extends AdBookConnectEntity
{

    /**
     * @var int $ClientID
     */
    protected $ClientID = null;

    /**
     * @var int $ParentClientID
     */
    protected $ParentClientID = null;

    /**
     * @param int $ClientID
     * @param int $ParentClientID
     */
    public function __construct($ClientID, $ParentClientID)
    {
      $this->ClientID = $ClientID;
      $this->ParentClientID = $ParentClientID;
    }

    /**
     * @return int
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param int $ClientID
     * @return \FatTail\AdBook\ParentClientRelationship
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentClientID()
    {
      return $this->ParentClientID;
    }

    /**
     * @param int $ParentClientID
     * @return \FatTail\AdBook\ParentClientRelationship
     */
    public function setParentClientID($ParentClientID)
    {
      $this->ParentClientID = $ParentClientID;
      return $this;
    }

}

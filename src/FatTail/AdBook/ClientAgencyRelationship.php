<?php

namespace FatTail\AdBook;

class ClientAgencyRelationship extends AdBookConnectEntity
{

    /**
     * @var int $AgencyID
     */
    protected $AgencyID = null;

    /**
     * @var int $ClientID
     */
    protected $ClientID = null;

    /**
     * @param int $AgencyID
     * @param int $ClientID
     */
    public function __construct($AgencyID, $ClientID)
    {
      $this->AgencyID = $AgencyID;
      $this->ClientID = $ClientID;
    }

    /**
     * @return int
     */
    public function getAgencyID()
    {
      return $this->AgencyID;
    }

    /**
     * @param int $AgencyID
     * @return \FatTail\AdBook\ClientAgencyRelationship
     */
    public function setAgencyID($AgencyID)
    {
      $this->AgencyID = $AgencyID;
      return $this;
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
     * @return \FatTail\AdBook\ClientAgencyRelationship
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

}

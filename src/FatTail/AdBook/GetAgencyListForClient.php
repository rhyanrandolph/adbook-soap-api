<?php

namespace FatTail\AdBook;

class GetAgencyListForClient
{

    /**
     * @var int $clientId
     */
    protected $clientId = null;

    /**
     * @param int $clientId
     */
    public function __construct($clientId)
    {
      $this->clientId = $clientId;
    }

    /**
     * @return int
     */
    public function getClientId()
    {
      return $this->clientId;
    }

    /**
     * @param int $clientId
     * @return \FatTail\AdBook\GetAgencyListForClient
     */
    public function setClientId($clientId)
    {
      $this->clientId = $clientId;
      return $this;
    }

}

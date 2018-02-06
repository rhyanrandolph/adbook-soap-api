<?php

namespace FatTail\AdBook;

class GetCreativeList
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
     * @return \FatTail\AdBook\GetCreativeList
     */
    public function setClientId($clientId)
    {
      $this->clientId = $clientId;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetClientContact
{

    /**
     * @var int $clientContactId
     */
    protected $clientContactId = null;

    /**
     * @param int $clientContactId
     */
    public function __construct($clientContactId)
    {
      $this->clientContactId = $clientContactId;
    }

    /**
     * @return int
     */
    public function getClientContactId()
    {
      return $this->clientContactId;
    }

    /**
     * @param int $clientContactId
     * @return \FatTail\AdBook\GetClientContact
     */
    public function setClientContactId($clientContactId)
    {
      $this->clientContactId = $clientContactId;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetCreative
{

    /**
     * @var int $creativeId
     */
    protected $creativeId = null;

    /**
     * @var int $clientId
     */
    protected $clientId = null;

    /**
     * @param int $creativeId
     * @param int $clientId
     */
    public function __construct($creativeId, $clientId)
    {
      $this->creativeId = $creativeId;
      $this->clientId = $clientId;
    }

    /**
     * @return int
     */
    public function getCreativeId()
    {
      return $this->creativeId;
    }

    /**
     * @param int $creativeId
     * @return \FatTail\AdBook\GetCreative
     */
    public function setCreativeId($creativeId)
    {
      $this->creativeId = $creativeId;
      return $this;
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
     * @return \FatTail\AdBook\GetCreative
     */
    public function setClientId($clientId)
    {
      $this->clientId = $clientId;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class CreateClient
{

    /**
     * @var Client $client
     */
    protected $client = null;

    /**
     * @param Client $client
     */
    public function __construct($client)
    {
      $this->client = $client;
    }

    /**
     * @return Client
     */
    public function getClient()
    {
      return $this->client;
    }

    /**
     * @param Client $client
     * @return \FatTail\AdBook\CreateClient
     */
    public function setClient($client)
    {
      $this->client = $client;
      return $this;
    }

}

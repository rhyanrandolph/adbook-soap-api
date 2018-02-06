<?php

namespace FatTail\AdBook;

class CreateClientResponse
{

    /**
     * @var Client $CreateClientResult
     */
    protected $CreateClientResult = null;

    /**
     * @param Client $CreateClientResult
     */
    public function __construct($CreateClientResult)
    {
      $this->CreateClientResult = $CreateClientResult;
    }

    /**
     * @return Client
     */
    public function getCreateClientResult()
    {
      return $this->CreateClientResult;
    }

    /**
     * @param Client $CreateClientResult
     * @return \FatTail\AdBook\CreateClientResponse
     */
    public function setCreateClientResult($CreateClientResult)
    {
      $this->CreateClientResult = $CreateClientResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetClientResponse
{

    /**
     * @var Client $GetClientResult
     */
    protected $GetClientResult = null;

    /**
     * @param Client $GetClientResult
     */
    public function __construct($GetClientResult)
    {
      $this->GetClientResult = $GetClientResult;
    }

    /**
     * @return Client
     */
    public function getGetClientResult()
    {
      return $this->GetClientResult;
    }

    /**
     * @param Client $GetClientResult
     * @return \FatTail\AdBook\GetClientResponse
     */
    public function setGetClientResult($GetClientResult)
    {
      $this->GetClientResult = $GetClientResult;
      return $this;
    }

}

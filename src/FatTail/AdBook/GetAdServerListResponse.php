<?php

namespace FatTail\AdBook;

class GetAdServerListResponse
{

    /**
     * @var ArrayOfAdServer $GetAdServerListResult
     */
    protected $GetAdServerListResult = null;

    /**
     * @param ArrayOfAdServer $GetAdServerListResult
     */
    public function __construct($GetAdServerListResult)
    {
      $this->GetAdServerListResult = $GetAdServerListResult;
    }

    /**
     * @return ArrayOfAdServer
     */
    public function getGetAdServerListResult()
    {
      return $this->GetAdServerListResult;
    }

    /**
     * @param ArrayOfAdServer $GetAdServerListResult
     * @return \FatTail\AdBook\GetAdServerListResponse
     */
    public function setGetAdServerListResult($GetAdServerListResult)
    {
      $this->GetAdServerListResult = $GetAdServerListResult;
      return $this;
    }

}

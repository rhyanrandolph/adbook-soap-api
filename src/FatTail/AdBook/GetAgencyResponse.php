<?php

namespace FatTail\AdBook;

class GetAgencyResponse
{

    /**
     * @var Agency $GetAgencyResult
     */
    protected $GetAgencyResult = null;

    /**
     * @param Agency $GetAgencyResult
     */
    public function __construct($GetAgencyResult)
    {
      $this->GetAgencyResult = $GetAgencyResult;
    }

    /**
     * @return Agency
     */
    public function getGetAgencyResult()
    {
      return $this->GetAgencyResult;
    }

    /**
     * @param Agency $GetAgencyResult
     * @return \FatTail\AdBook\GetAgencyResponse
     */
    public function setGetAgencyResult($GetAgencyResult)
    {
      $this->GetAgencyResult = $GetAgencyResult;
      return $this;
    }

}

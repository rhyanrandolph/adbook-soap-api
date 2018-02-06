<?php

namespace FatTail\AdBook;

class GetAgencyListForClientResponse
{

    /**
     * @var ArrayOfAgency $GetAgencyListForClientResult
     */
    protected $GetAgencyListForClientResult = null;

    /**
     * @param ArrayOfAgency $GetAgencyListForClientResult
     */
    public function __construct($GetAgencyListForClientResult)
    {
      $this->GetAgencyListForClientResult = $GetAgencyListForClientResult;
    }

    /**
     * @return ArrayOfAgency
     */
    public function getGetAgencyListForClientResult()
    {
      return $this->GetAgencyListForClientResult;
    }

    /**
     * @param ArrayOfAgency $GetAgencyListForClientResult
     * @return \FatTail\AdBook\GetAgencyListForClientResponse
     */
    public function setGetAgencyListForClientResult($GetAgencyListForClientResult)
    {
      $this->GetAgencyListForClientResult = $GetAgencyListForClientResult;
      return $this;
    }

}

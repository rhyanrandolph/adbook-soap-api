<?php

namespace FatTail\AdBook;

class GetAgencyListResponse
{

    /**
     * @var ArrayOfAgency $GetAgencyListResult
     */
    protected $GetAgencyListResult = null;

    /**
     * @param ArrayOfAgency $GetAgencyListResult
     */
    public function __construct($GetAgencyListResult)
    {
      $this->GetAgencyListResult = $GetAgencyListResult;
    }

    /**
     * @return ArrayOfAgency
     */
    public function getGetAgencyListResult()
    {
      return $this->GetAgencyListResult;
    }

    /**
     * @param ArrayOfAgency $GetAgencyListResult
     * @return \FatTail\AdBook\GetAgencyListResponse
     */
    public function setGetAgencyListResult($GetAgencyListResult)
    {
      $this->GetAgencyListResult = $GetAgencyListResult;
      return $this;
    }

}

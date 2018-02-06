<?php

namespace FatTail\AdBook;

class CreateAgencyResponse
{

    /**
     * @var Agency $CreateAgencyResult
     */
    protected $CreateAgencyResult = null;

    /**
     * @param Agency $CreateAgencyResult
     */
    public function __construct($CreateAgencyResult)
    {
      $this->CreateAgencyResult = $CreateAgencyResult;
    }

    /**
     * @return Agency
     */
    public function getCreateAgencyResult()
    {
      return $this->CreateAgencyResult;
    }

    /**
     * @param Agency $CreateAgencyResult
     * @return \FatTail\AdBook\CreateAgencyResponse
     */
    public function setCreateAgencyResult($CreateAgencyResult)
    {
      $this->CreateAgencyResult = $CreateAgencyResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class CreateAgencyContactResponse
{

    /**
     * @var AgencyContact $CreateAgencyContactResult
     */
    protected $CreateAgencyContactResult = null;

    /**
     * @param AgencyContact $CreateAgencyContactResult
     */
    public function __construct($CreateAgencyContactResult)
    {
      $this->CreateAgencyContactResult = $CreateAgencyContactResult;
    }

    /**
     * @return AgencyContact
     */
    public function getCreateAgencyContactResult()
    {
      return $this->CreateAgencyContactResult;
    }

    /**
     * @param AgencyContact $CreateAgencyContactResult
     * @return \FatTail\AdBook\CreateAgencyContactResponse
     */
    public function setCreateAgencyContactResult($CreateAgencyContactResult)
    {
      $this->CreateAgencyContactResult = $CreateAgencyContactResult;
      return $this;
    }

}

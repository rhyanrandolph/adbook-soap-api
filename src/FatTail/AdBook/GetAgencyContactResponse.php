<?php

namespace FatTail\AdBook;

class GetAgencyContactResponse
{

    /**
     * @var AgencyContact $GetAgencyContactResult
     */
    protected $GetAgencyContactResult = null;

    /**
     * @param AgencyContact $GetAgencyContactResult
     */
    public function __construct($GetAgencyContactResult)
    {
      $this->GetAgencyContactResult = $GetAgencyContactResult;
    }

    /**
     * @return AgencyContact
     */
    public function getGetAgencyContactResult()
    {
      return $this->GetAgencyContactResult;
    }

    /**
     * @param AgencyContact $GetAgencyContactResult
     * @return \FatTail\AdBook\GetAgencyContactResponse
     */
    public function setGetAgencyContactResult($GetAgencyContactResult)
    {
      $this->GetAgencyContactResult = $GetAgencyContactResult;
      return $this;
    }

}

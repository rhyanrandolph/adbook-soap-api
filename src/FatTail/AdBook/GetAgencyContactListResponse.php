<?php

namespace FatTail\AdBook;

class GetAgencyContactListResponse
{

    /**
     * @var ArrayOfAgencyContact $GetAgencyContactListResult
     */
    protected $GetAgencyContactListResult = null;

    /**
     * @param ArrayOfAgencyContact $GetAgencyContactListResult
     */
    public function __construct($GetAgencyContactListResult)
    {
      $this->GetAgencyContactListResult = $GetAgencyContactListResult;
    }

    /**
     * @return ArrayOfAgencyContact
     */
    public function getGetAgencyContactListResult()
    {
      return $this->GetAgencyContactListResult;
    }

    /**
     * @param ArrayOfAgencyContact $GetAgencyContactListResult
     * @return \FatTail\AdBook\GetAgencyContactListResponse
     */
    public function setGetAgencyContactListResult($GetAgencyContactListResult)
    {
      $this->GetAgencyContactListResult = $GetAgencyContactListResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetAgencyContact
{

    /**
     * @var int $agencyContactId
     */
    protected $agencyContactId = null;

    /**
     * @param int $agencyContactId
     */
    public function __construct($agencyContactId)
    {
      $this->agencyContactId = $agencyContactId;
    }

    /**
     * @return int
     */
    public function getAgencyContactId()
    {
      return $this->agencyContactId;
    }

    /**
     * @param int $agencyContactId
     * @return \FatTail\AdBook\GetAgencyContact
     */
    public function setAgencyContactId($agencyContactId)
    {
      $this->agencyContactId = $agencyContactId;
      return $this;
    }

}

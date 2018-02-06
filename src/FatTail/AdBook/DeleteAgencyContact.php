<?php

namespace FatTail\AdBook;

class DeleteAgencyContact
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
     * @return \FatTail\AdBook\DeleteAgencyContact
     */
    public function setAgencyContactId($agencyContactId)
    {
      $this->agencyContactId = $agencyContactId;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class CreateAgencyContact
{

    /**
     * @var AgencyContact $agencyContact
     */
    protected $agencyContact = null;

    /**
     * @param AgencyContact $agencyContact
     */
    public function __construct($agencyContact)
    {
      $this->agencyContact = $agencyContact;
    }

    /**
     * @return AgencyContact
     */
    public function getAgencyContact()
    {
      return $this->agencyContact;
    }

    /**
     * @param AgencyContact $agencyContact
     * @return \FatTail\AdBook\CreateAgencyContact
     */
    public function setAgencyContact($agencyContact)
    {
      $this->agencyContact = $agencyContact;
      return $this;
    }

}

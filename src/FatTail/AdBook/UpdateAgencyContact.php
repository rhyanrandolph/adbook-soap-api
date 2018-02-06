<?php

namespace FatTail\AdBook;

class UpdateAgencyContact
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
     * @return \FatTail\AdBook\UpdateAgencyContact
     */
    public function setAgencyContact($agencyContact)
    {
      $this->agencyContact = $agencyContact;
      return $this;
    }

}

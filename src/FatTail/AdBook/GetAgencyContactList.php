<?php

namespace FatTail\AdBook;

class GetAgencyContactList
{

    /**
     * @var int $agencyId
     */
    protected $agencyId = null;

    /**
     * @var ContactType $contactType
     */
    protected $contactType = null;

    /**
     * @param int $agencyId
     * @param ContactType $contactType
     */
    public function __construct($agencyId, $contactType)
    {
      $this->agencyId = $agencyId;
      $this->contactType = $contactType;
    }

    /**
     * @return int
     */
    public function getAgencyId()
    {
      return $this->agencyId;
    }

    /**
     * @param int $agencyId
     * @return \FatTail\AdBook\GetAgencyContactList
     */
    public function setAgencyId($agencyId)
    {
      $this->agencyId = $agencyId;
      return $this;
    }

    /**
     * @return ContactType
     */
    public function getContactType()
    {
      return $this->contactType;
    }

    /**
     * @param ContactType $contactType
     * @return \FatTail\AdBook\GetAgencyContactList
     */
    public function setContactType($contactType)
    {
      $this->contactType = $contactType;
      return $this;
    }

}

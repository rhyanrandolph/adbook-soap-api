<?php

namespace FatTail\AdBook;

class AgencyContact extends Contact
{

    /**
     * @var int $AgencyID
     */
    protected $AgencyID = null;

    /**
     * @var ArrayOfContactType $ContactType
     */
    protected $ContactType = null;

    /**
     * @var string $ContactCode
     */
    protected $ContactCode = null;

    /**
     * @param int $AgencyID
     */
    public function __construct($AgencyID)
    {
      parent::__construct();
      $this->AgencyID = $AgencyID;
    }

    /**
     * @return int
     */
    public function getAgencyID()
    {
      return $this->AgencyID;
    }

    /**
     * @param int $AgencyID
     * @return \FatTail\AdBook\AgencyContact
     */
    public function setAgencyID($AgencyID)
    {
      $this->AgencyID = $AgencyID;
      return $this;
    }

    /**
     * @return ArrayOfContactType
     */
    public function getContactType()
    {
      return $this->ContactType;
    }

    /**
     * @param ArrayOfContactType $ContactType
     * @return \FatTail\AdBook\AgencyContact
     */
    public function setContactType($ContactType)
    {
      $this->ContactType = $ContactType;
      return $this;
    }

    /**
     * @return string
     */
    public function getContactCode()
    {
      return $this->ContactCode;
    }

    /**
     * @param string $ContactCode
     * @return \FatTail\AdBook\AgencyContact
     */
    public function setContactCode($ContactCode)
    {
      $this->ContactCode = $ContactCode;
      return $this;
    }

}

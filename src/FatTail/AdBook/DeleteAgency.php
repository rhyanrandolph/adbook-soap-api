<?php

namespace FatTail\AdBook;

class DeleteAgency
{

    /**
     * @var int $agencyId
     */
    protected $agencyId = null;

    /**
     * @param int $agencyId
     */
    public function __construct($agencyId)
    {
      $this->agencyId = $agencyId;
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
     * @return \FatTail\AdBook\DeleteAgency
     */
    public function setAgencyId($agencyId)
    {
      $this->agencyId = $agencyId;
      return $this;
    }

}

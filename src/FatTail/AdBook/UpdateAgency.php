<?php

namespace FatTail\AdBook;

class UpdateAgency
{

    /**
     * @var Agency $agency
     */
    protected $agency = null;

    /**
     * @param Agency $agency
     */
    public function __construct($agency)
    {
      $this->agency = $agency;
    }

    /**
     * @return Agency
     */
    public function getAgency()
    {
      return $this->agency;
    }

    /**
     * @param Agency $agency
     * @return \FatTail\AdBook\UpdateAgency
     */
    public function setAgency($agency)
    {
      $this->agency = $agency;
      return $this;
    }

}

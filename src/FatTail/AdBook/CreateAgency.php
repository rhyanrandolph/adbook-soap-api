<?php

namespace FatTail\AdBook;

class CreateAgency
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
     * @return \FatTail\AdBook\CreateAgency
     */
    public function setAgency($agency)
    {
      $this->agency = $agency;
      return $this;
    }

}

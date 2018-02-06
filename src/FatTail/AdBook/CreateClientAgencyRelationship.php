<?php

namespace FatTail\AdBook;

class CreateClientAgencyRelationship
{

    /**
     * @var ClientAgencyRelationship $relationship
     */
    protected $relationship = null;

    /**
     * @param ClientAgencyRelationship $relationship
     */
    public function __construct($relationship)
    {
      $this->relationship = $relationship;
    }

    /**
     * @return ClientAgencyRelationship
     */
    public function getRelationship()
    {
      return $this->relationship;
    }

    /**
     * @param ClientAgencyRelationship $relationship
     * @return \FatTail\AdBook\CreateClientAgencyRelationship
     */
    public function setRelationship($relationship)
    {
      $this->relationship = $relationship;
      return $this;
    }

}

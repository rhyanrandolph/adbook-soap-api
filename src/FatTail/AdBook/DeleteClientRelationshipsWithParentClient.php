<?php

namespace FatTail\AdBook;

class DeleteClientRelationshipsWithParentClient
{

    /**
     * @var ArrayOfParentClientRelationship $clientRelationships
     */
    protected $clientRelationships = null;

    /**
     * @param ArrayOfParentClientRelationship $clientRelationships
     */
    public function __construct($clientRelationships)
    {
      $this->clientRelationships = $clientRelationships;
    }

    /**
     * @return ArrayOfParentClientRelationship
     */
    public function getClientRelationships()
    {
      return $this->clientRelationships;
    }

    /**
     * @param ArrayOfParentClientRelationship $clientRelationships
     * @return \FatTail\AdBook\DeleteClientRelationshipsWithParentClient
     */
    public function setClientRelationships($clientRelationships)
    {
      $this->clientRelationships = $clientRelationships;
      return $this;
    }

}

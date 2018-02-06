<?php

namespace FatTail\AdBook;

class GetClientAgencyRelationshipsResponse
{

    /**
     * @var ArrayOfClientAgencyRelationship $GetClientAgencyRelationshipsResult
     */
    protected $GetClientAgencyRelationshipsResult = null;

    /**
     * @param ArrayOfClientAgencyRelationship $GetClientAgencyRelationshipsResult
     */
    public function __construct($GetClientAgencyRelationshipsResult)
    {
      $this->GetClientAgencyRelationshipsResult = $GetClientAgencyRelationshipsResult;
    }

    /**
     * @return ArrayOfClientAgencyRelationship
     */
    public function getGetClientAgencyRelationshipsResult()
    {
      return $this->GetClientAgencyRelationshipsResult;
    }

    /**
     * @param ArrayOfClientAgencyRelationship $GetClientAgencyRelationshipsResult
     * @return \FatTail\AdBook\GetClientAgencyRelationshipsResponse
     */
    public function setGetClientAgencyRelationshipsResult($GetClientAgencyRelationshipsResult)
    {
      $this->GetClientAgencyRelationshipsResult = $GetClientAgencyRelationshipsResult;
      return $this;
    }

}

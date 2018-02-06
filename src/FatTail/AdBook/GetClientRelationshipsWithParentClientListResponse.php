<?php

namespace FatTail\AdBook;

class GetClientRelationshipsWithParentClientListResponse
{

    /**
     * @var ArrayOfParentClientRelationship $GetClientRelationshipsWithParentClientListResult
     */
    protected $GetClientRelationshipsWithParentClientListResult = null;

    /**
     * @param ArrayOfParentClientRelationship $GetClientRelationshipsWithParentClientListResult
     */
    public function __construct($GetClientRelationshipsWithParentClientListResult)
    {
      $this->GetClientRelationshipsWithParentClientListResult = $GetClientRelationshipsWithParentClientListResult;
    }

    /**
     * @return ArrayOfParentClientRelationship
     */
    public function getGetClientRelationshipsWithParentClientListResult()
    {
      return $this->GetClientRelationshipsWithParentClientListResult;
    }

    /**
     * @param ArrayOfParentClientRelationship $GetClientRelationshipsWithParentClientListResult
     * @return \FatTail\AdBook\GetClientRelationshipsWithParentClientListResponse
     */
    public function setGetClientRelationshipsWithParentClientListResult($GetClientRelationshipsWithParentClientListResult)
    {
      $this->GetClientRelationshipsWithParentClientListResult = $GetClientRelationshipsWithParentClientListResult;
      return $this;
    }

}

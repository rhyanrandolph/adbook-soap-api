<?php

namespace FatTail\AdBook;

class CreateClientRelationshipsWithParentClientResponse
{

    /**
     * @var ArrayOfParentClientRelationshipResult $CreateClientRelationshipsWithParentClientResult
     */
    protected $CreateClientRelationshipsWithParentClientResult = null;

    /**
     * @param ArrayOfParentClientRelationshipResult $CreateClientRelationshipsWithParentClientResult
     */
    public function __construct($CreateClientRelationshipsWithParentClientResult)
    {
      $this->CreateClientRelationshipsWithParentClientResult = $CreateClientRelationshipsWithParentClientResult;
    }

    /**
     * @return ArrayOfParentClientRelationshipResult
     */
    public function getCreateClientRelationshipsWithParentClientResult()
    {
      return $this->CreateClientRelationshipsWithParentClientResult;
    }

    /**
     * @param ArrayOfParentClientRelationshipResult $CreateClientRelationshipsWithParentClientResult
     * @return \FatTail\AdBook\CreateClientRelationshipsWithParentClientResponse
     */
    public function setCreateClientRelationshipsWithParentClientResult($CreateClientRelationshipsWithParentClientResult)
    {
      $this->CreateClientRelationshipsWithParentClientResult = $CreateClientRelationshipsWithParentClientResult;
      return $this;
    }

}

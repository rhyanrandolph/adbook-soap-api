<?php

namespace FatTail\AdBook;

class DeleteClientRelationshipsWithParentClientResponse
{

    /**
     * @var ArrayOfParentClientRelationshipResult $DeleteClientRelationshipsWithParentClientResult
     */
    protected $DeleteClientRelationshipsWithParentClientResult = null;

    /**
     * @param ArrayOfParentClientRelationshipResult $DeleteClientRelationshipsWithParentClientResult
     */
    public function __construct($DeleteClientRelationshipsWithParentClientResult)
    {
      $this->DeleteClientRelationshipsWithParentClientResult = $DeleteClientRelationshipsWithParentClientResult;
    }

    /**
     * @return ArrayOfParentClientRelationshipResult
     */
    public function getDeleteClientRelationshipsWithParentClientResult()
    {
      return $this->DeleteClientRelationshipsWithParentClientResult;
    }

    /**
     * @param ArrayOfParentClientRelationshipResult $DeleteClientRelationshipsWithParentClientResult
     * @return \FatTail\AdBook\DeleteClientRelationshipsWithParentClientResponse
     */
    public function setDeleteClientRelationshipsWithParentClientResult($DeleteClientRelationshipsWithParentClientResult)
    {
      $this->DeleteClientRelationshipsWithParentClientResult = $DeleteClientRelationshipsWithParentClientResult;
      return $this;
    }

}

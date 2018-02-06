<?php

namespace FatTail\AdBook;

class RemoveAccountContactAssociationResponse
{

    /**
     * @var ArrayOfAccountContactAssociationDeleteResult $RemoveAccountContactAssociationResult
     */
    protected $RemoveAccountContactAssociationResult = null;

    /**
     * @param ArrayOfAccountContactAssociationDeleteResult $RemoveAccountContactAssociationResult
     */
    public function __construct($RemoveAccountContactAssociationResult)
    {
      $this->RemoveAccountContactAssociationResult = $RemoveAccountContactAssociationResult;
    }

    /**
     * @return ArrayOfAccountContactAssociationDeleteResult
     */
    public function getRemoveAccountContactAssociationResult()
    {
      return $this->RemoveAccountContactAssociationResult;
    }

    /**
     * @param ArrayOfAccountContactAssociationDeleteResult $RemoveAccountContactAssociationResult
     * @return \FatTail\AdBook\RemoveAccountContactAssociationResponse
     */
    public function setRemoveAccountContactAssociationResult($RemoveAccountContactAssociationResult)
    {
      $this->RemoveAccountContactAssociationResult = $RemoveAccountContactAssociationResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class RemoveAccountManagerRepTypeAssociationResponse
{

    /**
     * @var ArrayOfAccountManagerGroupAssociationDeleteResult $RemoveAccountManagerRepTypeAssociationResult
     */
    protected $RemoveAccountManagerRepTypeAssociationResult = null;

    /**
     * @param ArrayOfAccountManagerGroupAssociationDeleteResult $RemoveAccountManagerRepTypeAssociationResult
     */
    public function __construct($RemoveAccountManagerRepTypeAssociationResult)
    {
      $this->RemoveAccountManagerRepTypeAssociationResult = $RemoveAccountManagerRepTypeAssociationResult;
    }

    /**
     * @return ArrayOfAccountManagerGroupAssociationDeleteResult
     */
    public function getRemoveAccountManagerRepTypeAssociationResult()
    {
      return $this->RemoveAccountManagerRepTypeAssociationResult;
    }

    /**
     * @param ArrayOfAccountManagerGroupAssociationDeleteResult $RemoveAccountManagerRepTypeAssociationResult
     * @return \FatTail\AdBook\RemoveAccountManagerRepTypeAssociationResponse
     */
    public function setRemoveAccountManagerRepTypeAssociationResult($RemoveAccountManagerRepTypeAssociationResult)
    {
      $this->RemoveAccountManagerRepTypeAssociationResult = $RemoveAccountManagerRepTypeAssociationResult;
      return $this;
    }

}

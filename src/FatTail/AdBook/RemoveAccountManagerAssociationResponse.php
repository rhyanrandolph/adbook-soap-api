<?php

namespace FatTail\AdBook;

class RemoveAccountManagerAssociationResponse
{

    /**
     * @var ArrayOfAccountManagerAssociationDeleteResult $RemoveAccountManagerAssociationResult
     */
    protected $RemoveAccountManagerAssociationResult = null;

    /**
     * @param ArrayOfAccountManagerAssociationDeleteResult $RemoveAccountManagerAssociationResult
     */
    public function __construct($RemoveAccountManagerAssociationResult)
    {
      $this->RemoveAccountManagerAssociationResult = $RemoveAccountManagerAssociationResult;
    }

    /**
     * @return ArrayOfAccountManagerAssociationDeleteResult
     */
    public function getRemoveAccountManagerAssociationResult()
    {
      return $this->RemoveAccountManagerAssociationResult;
    }

    /**
     * @param ArrayOfAccountManagerAssociationDeleteResult $RemoveAccountManagerAssociationResult
     * @return \FatTail\AdBook\RemoveAccountManagerAssociationResponse
     */
    public function setRemoveAccountManagerAssociationResult($RemoveAccountManagerAssociationResult)
    {
      $this->RemoveAccountManagerAssociationResult = $RemoveAccountManagerAssociationResult;
      return $this;
    }

}

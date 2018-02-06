<?php

namespace FatTail\AdBook;

class CreateAccountManagerAssociationResponse
{

    /**
     * @var ArrayOfAccountManagerAssociationCreateResult $CreateAccountManagerAssociationResult
     */
    protected $CreateAccountManagerAssociationResult = null;

    /**
     * @param ArrayOfAccountManagerAssociationCreateResult $CreateAccountManagerAssociationResult
     */
    public function __construct($CreateAccountManagerAssociationResult)
    {
      $this->CreateAccountManagerAssociationResult = $CreateAccountManagerAssociationResult;
    }

    /**
     * @return ArrayOfAccountManagerAssociationCreateResult
     */
    public function getCreateAccountManagerAssociationResult()
    {
      return $this->CreateAccountManagerAssociationResult;
    }

    /**
     * @param ArrayOfAccountManagerAssociationCreateResult $CreateAccountManagerAssociationResult
     * @return \FatTail\AdBook\CreateAccountManagerAssociationResponse
     */
    public function setCreateAccountManagerAssociationResult($CreateAccountManagerAssociationResult)
    {
      $this->CreateAccountManagerAssociationResult = $CreateAccountManagerAssociationResult;
      return $this;
    }

}

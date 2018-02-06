<?php

namespace FatTail\AdBook;

class CreateAccountManagerRepTypeAssociationResponse
{

    /**
     * @var ArrayOfAccountManagerGroupAssociationCreateResult $CreateAccountManagerRepTypeAssociationResult
     */
    protected $CreateAccountManagerRepTypeAssociationResult = null;

    /**
     * @param ArrayOfAccountManagerGroupAssociationCreateResult $CreateAccountManagerRepTypeAssociationResult
     */
    public function __construct($CreateAccountManagerRepTypeAssociationResult)
    {
      $this->CreateAccountManagerRepTypeAssociationResult = $CreateAccountManagerRepTypeAssociationResult;
    }

    /**
     * @return ArrayOfAccountManagerGroupAssociationCreateResult
     */
    public function getCreateAccountManagerRepTypeAssociationResult()
    {
      return $this->CreateAccountManagerRepTypeAssociationResult;
    }

    /**
     * @param ArrayOfAccountManagerGroupAssociationCreateResult $CreateAccountManagerRepTypeAssociationResult
     * @return \FatTail\AdBook\CreateAccountManagerRepTypeAssociationResponse
     */
    public function setCreateAccountManagerRepTypeAssociationResult($CreateAccountManagerRepTypeAssociationResult)
    {
      $this->CreateAccountManagerRepTypeAssociationResult = $CreateAccountManagerRepTypeAssociationResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class CreateAccountContactAssociationResponse
{

    /**
     * @var ArrayOfAccountContactAssociationCreateResult $CreateAccountContactAssociationResult
     */
    protected $CreateAccountContactAssociationResult = null;

    /**
     * @param ArrayOfAccountContactAssociationCreateResult $CreateAccountContactAssociationResult
     */
    public function __construct($CreateAccountContactAssociationResult)
    {
      $this->CreateAccountContactAssociationResult = $CreateAccountContactAssociationResult;
    }

    /**
     * @return ArrayOfAccountContactAssociationCreateResult
     */
    public function getCreateAccountContactAssociationResult()
    {
      return $this->CreateAccountContactAssociationResult;
    }

    /**
     * @param ArrayOfAccountContactAssociationCreateResult $CreateAccountContactAssociationResult
     * @return \FatTail\AdBook\CreateAccountContactAssociationResponse
     */
    public function setCreateAccountContactAssociationResult($CreateAccountContactAssociationResult)
    {
      $this->CreateAccountContactAssociationResult = $CreateAccountContactAssociationResult;
      return $this;
    }

}

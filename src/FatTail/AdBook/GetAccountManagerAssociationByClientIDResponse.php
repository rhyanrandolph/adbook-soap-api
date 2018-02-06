<?php

namespace FatTail\AdBook;

class GetAccountManagerAssociationByClientIDResponse
{

    /**
     * @var ArrayOfAccountManagerAssociation $GetAccountManagerAssociationByClientIDResult
     */
    protected $GetAccountManagerAssociationByClientIDResult = null;

    /**
     * @param ArrayOfAccountManagerAssociation $GetAccountManagerAssociationByClientIDResult
     */
    public function __construct($GetAccountManagerAssociationByClientIDResult)
    {
      $this->GetAccountManagerAssociationByClientIDResult = $GetAccountManagerAssociationByClientIDResult;
    }

    /**
     * @return ArrayOfAccountManagerAssociation
     */
    public function getGetAccountManagerAssociationByClientIDResult()
    {
      return $this->GetAccountManagerAssociationByClientIDResult;
    }

    /**
     * @param ArrayOfAccountManagerAssociation $GetAccountManagerAssociationByClientIDResult
     * @return \FatTail\AdBook\GetAccountManagerAssociationByClientIDResponse
     */
    public function setGetAccountManagerAssociationByClientIDResult($GetAccountManagerAssociationByClientIDResult)
    {
      $this->GetAccountManagerAssociationByClientIDResult = $GetAccountManagerAssociationByClientIDResult;
      return $this;
    }

}

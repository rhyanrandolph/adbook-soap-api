<?php

namespace FatTail\AdBook;

class GetAccountManagerAssociationByContactIDResponse
{

    /**
     * @var ArrayOfAccountManagerAssociation $GetAccountManagerAssociationByContactIDResult
     */
    protected $GetAccountManagerAssociationByContactIDResult = null;

    /**
     * @param ArrayOfAccountManagerAssociation $GetAccountManagerAssociationByContactIDResult
     */
    public function __construct($GetAccountManagerAssociationByContactIDResult)
    {
      $this->GetAccountManagerAssociationByContactIDResult = $GetAccountManagerAssociationByContactIDResult;
    }

    /**
     * @return ArrayOfAccountManagerAssociation
     */
    public function getGetAccountManagerAssociationByContactIDResult()
    {
      return $this->GetAccountManagerAssociationByContactIDResult;
    }

    /**
     * @param ArrayOfAccountManagerAssociation $GetAccountManagerAssociationByContactIDResult
     * @return \FatTail\AdBook\GetAccountManagerAssociationByContactIDResponse
     */
    public function setGetAccountManagerAssociationByContactIDResult($GetAccountManagerAssociationByContactIDResult)
    {
      $this->GetAccountManagerAssociationByContactIDResult = $GetAccountManagerAssociationByContactIDResult;
      return $this;
    }

}

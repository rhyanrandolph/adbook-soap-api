<?php

namespace FatTail\AdBook;

class GetAccountManagerRepTypeAssociationByClientIDResponse
{

    /**
     * @var ArrayOfAccountManagerGroupAssociation $GetAccountManagerRepTypeAssociationByClientIDResult
     */
    protected $GetAccountManagerRepTypeAssociationByClientIDResult = null;

    /**
     * @param ArrayOfAccountManagerGroupAssociation $GetAccountManagerRepTypeAssociationByClientIDResult
     */
    public function __construct($GetAccountManagerRepTypeAssociationByClientIDResult)
    {
      $this->GetAccountManagerRepTypeAssociationByClientIDResult = $GetAccountManagerRepTypeAssociationByClientIDResult;
    }

    /**
     * @return ArrayOfAccountManagerGroupAssociation
     */
    public function getGetAccountManagerRepTypeAssociationByClientIDResult()
    {
      return $this->GetAccountManagerRepTypeAssociationByClientIDResult;
    }

    /**
     * @param ArrayOfAccountManagerGroupAssociation $GetAccountManagerRepTypeAssociationByClientIDResult
     * @return \FatTail\AdBook\GetAccountManagerRepTypeAssociationByClientIDResponse
     */
    public function setGetAccountManagerRepTypeAssociationByClientIDResult($GetAccountManagerRepTypeAssociationByClientIDResult)
    {
      $this->GetAccountManagerRepTypeAssociationByClientIDResult = $GetAccountManagerRepTypeAssociationByClientIDResult;
      return $this;
    }

}

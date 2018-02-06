<?php

namespace FatTail\AdBook;

class GetAccountManagerRepTypeAssociationByRepTypeIDResponse
{

    /**
     * @var ArrayOfAccountManagerGroupAssociation $GetAccountManagerRepTypeAssociationByRepTypeIDResult
     */
    protected $GetAccountManagerRepTypeAssociationByRepTypeIDResult = null;

    /**
     * @param ArrayOfAccountManagerGroupAssociation $GetAccountManagerRepTypeAssociationByRepTypeIDResult
     */
    public function __construct($GetAccountManagerRepTypeAssociationByRepTypeIDResult)
    {
      $this->GetAccountManagerRepTypeAssociationByRepTypeIDResult = $GetAccountManagerRepTypeAssociationByRepTypeIDResult;
    }

    /**
     * @return ArrayOfAccountManagerGroupAssociation
     */
    public function getGetAccountManagerRepTypeAssociationByRepTypeIDResult()
    {
      return $this->GetAccountManagerRepTypeAssociationByRepTypeIDResult;
    }

    /**
     * @param ArrayOfAccountManagerGroupAssociation $GetAccountManagerRepTypeAssociationByRepTypeIDResult
     * @return \FatTail\AdBook\GetAccountManagerRepTypeAssociationByRepTypeIDResponse
     */
    public function setGetAccountManagerRepTypeAssociationByRepTypeIDResult($GetAccountManagerRepTypeAssociationByRepTypeIDResult)
    {
      $this->GetAccountManagerRepTypeAssociationByRepTypeIDResult = $GetAccountManagerRepTypeAssociationByRepTypeIDResult;
      return $this;
    }

}

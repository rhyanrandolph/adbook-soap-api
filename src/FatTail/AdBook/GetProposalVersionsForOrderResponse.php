<?php

namespace FatTail\AdBook;

class GetProposalVersionsForOrderResponse
{

    /**
     * @var ArrayOfProposalVersion $GetProposalVersionsForOrderResult
     */
    protected $GetProposalVersionsForOrderResult = null;

    /**
     * @param ArrayOfProposalVersion $GetProposalVersionsForOrderResult
     */
    public function __construct($GetProposalVersionsForOrderResult)
    {
      $this->GetProposalVersionsForOrderResult = $GetProposalVersionsForOrderResult;
    }

    /**
     * @return ArrayOfProposalVersion
     */
    public function getGetProposalVersionsForOrderResult()
    {
      return $this->GetProposalVersionsForOrderResult;
    }

    /**
     * @param ArrayOfProposalVersion $GetProposalVersionsForOrderResult
     * @return \FatTail\AdBook\GetProposalVersionsForOrderResponse
     */
    public function setGetProposalVersionsForOrderResult($GetProposalVersionsForOrderResult)
    {
      $this->GetProposalVersionsForOrderResult = $GetProposalVersionsForOrderResult;
      return $this;
    }

}

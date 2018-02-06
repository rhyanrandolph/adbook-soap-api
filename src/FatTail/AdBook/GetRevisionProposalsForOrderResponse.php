<?php

namespace FatTail\AdBook;

class GetRevisionProposalsForOrderResponse
{

    /**
     * @var ArrayOfRevisionProposal $GetRevisionProposalsForOrderResult
     */
    protected $GetRevisionProposalsForOrderResult = null;

    /**
     * @param ArrayOfRevisionProposal $GetRevisionProposalsForOrderResult
     */
    public function __construct($GetRevisionProposalsForOrderResult)
    {
      $this->GetRevisionProposalsForOrderResult = $GetRevisionProposalsForOrderResult;
    }

    /**
     * @return ArrayOfRevisionProposal
     */
    public function getGetRevisionProposalsForOrderResult()
    {
      return $this->GetRevisionProposalsForOrderResult;
    }

    /**
     * @param ArrayOfRevisionProposal $GetRevisionProposalsForOrderResult
     * @return \FatTail\AdBook\GetRevisionProposalsForOrderResponse
     */
    public function setGetRevisionProposalsForOrderResult($GetRevisionProposalsForOrderResult)
    {
      $this->GetRevisionProposalsForOrderResult = $GetRevisionProposalsForOrderResult;
      return $this;
    }

}

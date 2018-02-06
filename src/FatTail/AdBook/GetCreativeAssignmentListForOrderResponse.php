<?php

namespace FatTail\AdBook;

class GetCreativeAssignmentListForOrderResponse
{

    /**
     * @var ArrayOfCreativeAssignment $GetCreativeAssignmentListForOrderResult
     */
    protected $GetCreativeAssignmentListForOrderResult = null;

    /**
     * @param ArrayOfCreativeAssignment $GetCreativeAssignmentListForOrderResult
     */
    public function __construct($GetCreativeAssignmentListForOrderResult)
    {
      $this->GetCreativeAssignmentListForOrderResult = $GetCreativeAssignmentListForOrderResult;
    }

    /**
     * @return ArrayOfCreativeAssignment
     */
    public function getGetCreativeAssignmentListForOrderResult()
    {
      return $this->GetCreativeAssignmentListForOrderResult;
    }

    /**
     * @param ArrayOfCreativeAssignment $GetCreativeAssignmentListForOrderResult
     * @return \FatTail\AdBook\GetCreativeAssignmentListForOrderResponse
     */
    public function setGetCreativeAssignmentListForOrderResult($GetCreativeAssignmentListForOrderResult)
    {
      $this->GetCreativeAssignmentListForOrderResult = $GetCreativeAssignmentListForOrderResult;
      return $this;
    }

}

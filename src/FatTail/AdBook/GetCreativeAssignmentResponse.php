<?php

namespace FatTail\AdBook;

class GetCreativeAssignmentResponse
{

    /**
     * @var CreativeAssignment $GetCreativeAssignmentResult
     */
    protected $GetCreativeAssignmentResult = null;

    /**
     * @param CreativeAssignment $GetCreativeAssignmentResult
     */
    public function __construct($GetCreativeAssignmentResult)
    {
      $this->GetCreativeAssignmentResult = $GetCreativeAssignmentResult;
    }

    /**
     * @return CreativeAssignment
     */
    public function getGetCreativeAssignmentResult()
    {
      return $this->GetCreativeAssignmentResult;
    }

    /**
     * @param CreativeAssignment $GetCreativeAssignmentResult
     * @return \FatTail\AdBook\GetCreativeAssignmentResponse
     */
    public function setGetCreativeAssignmentResult($GetCreativeAssignmentResult)
    {
      $this->GetCreativeAssignmentResult = $GetCreativeAssignmentResult;
      return $this;
    }

}

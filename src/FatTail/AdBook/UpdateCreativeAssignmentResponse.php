<?php

namespace FatTail\AdBook;

class UpdateCreativeAssignmentResponse
{

    /**
     * @var CreativeAssignment $UpdateCreativeAssignmentResult
     */
    protected $UpdateCreativeAssignmentResult = null;

    /**
     * @param CreativeAssignment $UpdateCreativeAssignmentResult
     */
    public function __construct($UpdateCreativeAssignmentResult)
    {
      $this->UpdateCreativeAssignmentResult = $UpdateCreativeAssignmentResult;
    }

    /**
     * @return CreativeAssignment
     */
    public function getUpdateCreativeAssignmentResult()
    {
      return $this->UpdateCreativeAssignmentResult;
    }

    /**
     * @param CreativeAssignment $UpdateCreativeAssignmentResult
     * @return \FatTail\AdBook\UpdateCreativeAssignmentResponse
     */
    public function setUpdateCreativeAssignmentResult($UpdateCreativeAssignmentResult)
    {
      $this->UpdateCreativeAssignmentResult = $UpdateCreativeAssignmentResult;
      return $this;
    }

}

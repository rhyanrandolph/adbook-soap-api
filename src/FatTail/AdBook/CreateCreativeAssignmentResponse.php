<?php

namespace FatTail\AdBook;

class CreateCreativeAssignmentResponse
{

    /**
     * @var CreativeAssignment $CreateCreativeAssignmentResult
     */
    protected $CreateCreativeAssignmentResult = null;

    /**
     * @param CreativeAssignment $CreateCreativeAssignmentResult
     */
    public function __construct($CreateCreativeAssignmentResult)
    {
      $this->CreateCreativeAssignmentResult = $CreateCreativeAssignmentResult;
    }

    /**
     * @return CreativeAssignment
     */
    public function getCreateCreativeAssignmentResult()
    {
      return $this->CreateCreativeAssignmentResult;
    }

    /**
     * @param CreativeAssignment $CreateCreativeAssignmentResult
     * @return \FatTail\AdBook\CreateCreativeAssignmentResponse
     */
    public function setCreateCreativeAssignmentResult($CreateCreativeAssignmentResult)
    {
      $this->CreateCreativeAssignmentResult = $CreateCreativeAssignmentResult;
      return $this;
    }

}

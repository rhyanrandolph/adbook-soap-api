<?php

namespace FatTail\AdBook;

class GetCreativeAssignment
{

    /**
     * @var int $creativeAssignmentId
     */
    protected $creativeAssignmentId = null;

    /**
     * @param int $creativeAssignmentId
     */
    public function __construct($creativeAssignmentId)
    {
      $this->creativeAssignmentId = $creativeAssignmentId;
    }

    /**
     * @return int
     */
    public function getCreativeAssignmentId()
    {
      return $this->creativeAssignmentId;
    }

    /**
     * @param int $creativeAssignmentId
     * @return \FatTail\AdBook\GetCreativeAssignment
     */
    public function setCreativeAssignmentId($creativeAssignmentId)
    {
      $this->creativeAssignmentId = $creativeAssignmentId;
      return $this;
    }

}

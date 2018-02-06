<?php

namespace FatTail\AdBook;

class UpdateCreativeAssignment
{

    /**
     * @var CreativeAssignment $creativeAssignment
     */
    protected $creativeAssignment = null;

    /**
     * @param CreativeAssignment $creativeAssignment
     */
    public function __construct($creativeAssignment)
    {
      $this->creativeAssignment = $creativeAssignment;
    }

    /**
     * @return CreativeAssignment
     */
    public function getCreativeAssignment()
    {
      return $this->creativeAssignment;
    }

    /**
     * @param CreativeAssignment $creativeAssignment
     * @return \FatTail\AdBook\UpdateCreativeAssignment
     */
    public function setCreativeAssignment($creativeAssignment)
    {
      $this->creativeAssignment = $creativeAssignment;
      return $this;
    }

}

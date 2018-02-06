<?php

namespace FatTail\AdBook;

class TargetCriteriaSetAND extends AdBookConnectEntity
{

    /**
     * @var ArrayOfTargetCriteria $Children
     */
    protected $Children = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfTargetCriteria
     */
    public function getChildren()
    {
      return $this->Children;
    }

    /**
     * @param ArrayOfTargetCriteria $Children
     * @return \FatTail\AdBook\TargetCriteriaSetAND
     */
    public function setChildren($Children)
    {
      $this->Children = $Children;
      return $this;
    }

}

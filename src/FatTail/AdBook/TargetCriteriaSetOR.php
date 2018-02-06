<?php

namespace FatTail\AdBook;

class TargetCriteriaSetOR extends AdBookConnectEntity
{

    /**
     * @var ArrayOfTargetCriteriaSetAND $Children
     */
    protected $Children = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfTargetCriteriaSetAND
     */
    public function getChildren()
    {
      return $this->Children;
    }

    /**
     * @param ArrayOfTargetCriteriaSetAND $Children
     * @return \FatTail\AdBook\TargetCriteriaSetOR
     */
    public function setChildren($Children)
    {
      $this->Children = $Children;
      return $this;
    }

}

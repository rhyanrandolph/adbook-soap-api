<?php

namespace FatTail\AdBook;

class PackageComponentDropUpdateResult extends DropUpdateResult
{

    /**
     * @var int $ParentDropID
     */
    protected $ParentDropID = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getParentDropID()
    {
      return $this->ParentDropID;
    }

    /**
     * @param int $ParentDropID
     * @return \FatTail\AdBook\PackageComponentDropUpdateResult
     */
    public function setParentDropID($ParentDropID)
    {
      $this->ParentDropID = $ParentDropID;
      return $this;
    }

}

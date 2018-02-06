<?php

namespace FatTail\AdBook;

class GetPackageComponentDrops
{

    /**
     * @var ArrayOflong $parentDropIDs
     */
    protected $parentDropIDs = null;

    /**
     * @param ArrayOflong $parentDropIDs
     */
    public function __construct($parentDropIDs)
    {
      $this->parentDropIDs = $parentDropIDs;
    }

    /**
     * @return ArrayOflong
     */
    public function getParentDropIDs()
    {
      return $this->parentDropIDs;
    }

    /**
     * @param ArrayOflong $parentDropIDs
     * @return \FatTail\AdBook\GetPackageComponentDrops
     */
    public function setParentDropIDs($parentDropIDs)
    {
      $this->parentDropIDs = $parentDropIDs;
      return $this;
    }

}

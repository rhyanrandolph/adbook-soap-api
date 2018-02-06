<?php

namespace FatTail\AdBook;

class ReactivateCancelledDrops
{

    /**
     * @var ArrayOflong $DropIds
     */
    protected $DropIds = null;

    /**
     * @param ArrayOflong $DropIds
     */
    public function __construct($DropIds)
    {
      $this->DropIds = $DropIds;
    }

    /**
     * @return ArrayOflong
     */
    public function getDropIds()
    {
      return $this->DropIds;
    }

    /**
     * @param ArrayOflong $DropIds
     * @return \FatTail\AdBook\ReactivateCancelledDrops
     */
    public function setDropIds($DropIds)
    {
      $this->DropIds = $DropIds;
      return $this;
    }

}

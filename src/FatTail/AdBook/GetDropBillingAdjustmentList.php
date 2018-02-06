<?php

namespace FatTail\AdBook;

class GetDropBillingAdjustmentList
{

    /**
     * @var ArrayOflong $DropIDs
     */
    protected $DropIDs = null;

    /**
     * @param ArrayOflong $DropIDs
     */
    public function __construct($DropIDs)
    {
      $this->DropIDs = $DropIDs;
    }

    /**
     * @return ArrayOflong
     */
    public function getDropIDs()
    {
      return $this->DropIDs;
    }

    /**
     * @param ArrayOflong $DropIDs
     * @return \FatTail\AdBook\GetDropBillingAdjustmentList
     */
    public function setDropIDs($DropIDs)
    {
      $this->DropIDs = $DropIDs;
      return $this;
    }

}

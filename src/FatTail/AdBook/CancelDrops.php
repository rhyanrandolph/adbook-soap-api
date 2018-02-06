<?php

namespace FatTail\AdBook;

class CancelDrops
{

    /**
     * @var ArrayOflong $cancelDropIds
     */
    protected $cancelDropIds = null;

    /**
     * @param ArrayOflong $cancelDropIds
     */
    public function __construct($cancelDropIds)
    {
      $this->cancelDropIds = $cancelDropIds;
    }

    /**
     * @return ArrayOflong
     */
    public function getCancelDropIds()
    {
      return $this->cancelDropIds;
    }

    /**
     * @param ArrayOflong $cancelDropIds
     * @return \FatTail\AdBook\CancelDrops
     */
    public function setCancelDropIds($cancelDropIds)
    {
      $this->cancelDropIds = $cancelDropIds;
      return $this;
    }

}

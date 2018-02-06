<?php

namespace FatTail\AdBook;

class ReactivateCancelledDropsResponse
{

    /**
     * @var ArrayOfDropReactivateCancelledResult $ReactivateCancelledDropsResult
     */
    protected $ReactivateCancelledDropsResult = null;

    /**
     * @param ArrayOfDropReactivateCancelledResult $ReactivateCancelledDropsResult
     */
    public function __construct($ReactivateCancelledDropsResult)
    {
      $this->ReactivateCancelledDropsResult = $ReactivateCancelledDropsResult;
    }

    /**
     * @return ArrayOfDropReactivateCancelledResult
     */
    public function getReactivateCancelledDropsResult()
    {
      return $this->ReactivateCancelledDropsResult;
    }

    /**
     * @param ArrayOfDropReactivateCancelledResult $ReactivateCancelledDropsResult
     * @return \FatTail\AdBook\ReactivateCancelledDropsResponse
     */
    public function setReactivateCancelledDropsResult($ReactivateCancelledDropsResult)
    {
      $this->ReactivateCancelledDropsResult = $ReactivateCancelledDropsResult;
      return $this;
    }

}

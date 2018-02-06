<?php

namespace FatTail\AdBook;

class CancelDropsResponse
{

    /**
     * @var ArrayOfDropCancelResult $CancelDropsResult
     */
    protected $CancelDropsResult = null;

    /**
     * @param ArrayOfDropCancelResult $CancelDropsResult
     */
    public function __construct($CancelDropsResult)
    {
      $this->CancelDropsResult = $CancelDropsResult;
    }

    /**
     * @return ArrayOfDropCancelResult
     */
    public function getCancelDropsResult()
    {
      return $this->CancelDropsResult;
    }

    /**
     * @param ArrayOfDropCancelResult $CancelDropsResult
     * @return \FatTail\AdBook\CancelDropsResponse
     */
    public function setCancelDropsResult($CancelDropsResult)
    {
      $this->CancelDropsResult = $CancelDropsResult;
      return $this;
    }

}

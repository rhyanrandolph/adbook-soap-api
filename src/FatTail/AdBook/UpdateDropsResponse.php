<?php

namespace FatTail\AdBook;

class UpdateDropsResponse
{

    /**
     * @var ArrayOfDropUpdateResult $UpdateDropsResult
     */
    protected $UpdateDropsResult = null;

    /**
     * @param ArrayOfDropUpdateResult $UpdateDropsResult
     */
    public function __construct($UpdateDropsResult)
    {
      $this->UpdateDropsResult = $UpdateDropsResult;
    }

    /**
     * @return ArrayOfDropUpdateResult
     */
    public function getUpdateDropsResult()
    {
      return $this->UpdateDropsResult;
    }

    /**
     * @param ArrayOfDropUpdateResult $UpdateDropsResult
     * @return \FatTail\AdBook\UpdateDropsResponse
     */
    public function setUpdateDropsResult($UpdateDropsResult)
    {
      $this->UpdateDropsResult = $UpdateDropsResult;
      return $this;
    }

}

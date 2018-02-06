<?php

namespace FatTail\AdBook;

class CreateDropsResponse
{

    /**
     * @var ArrayOfDropCreateResult $CreateDropsResult
     */
    protected $CreateDropsResult = null;

    /**
     * @param ArrayOfDropCreateResult $CreateDropsResult
     */
    public function __construct($CreateDropsResult)
    {
      $this->CreateDropsResult = $CreateDropsResult;
    }

    /**
     * @return ArrayOfDropCreateResult
     */
    public function getCreateDropsResult()
    {
      return $this->CreateDropsResult;
    }

    /**
     * @param ArrayOfDropCreateResult $CreateDropsResult
     * @return \FatTail\AdBook\CreateDropsResponse
     */
    public function setCreateDropsResult($CreateDropsResult)
    {
      $this->CreateDropsResult = $CreateDropsResult;
      return $this;
    }

}

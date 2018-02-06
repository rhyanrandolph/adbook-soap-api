<?php

namespace FatTail\AdBook;

class GetAdUnitListResponse
{

    /**
     * @var ArrayOfAdUnit $GetAdUnitListResult
     */
    protected $GetAdUnitListResult = null;

    /**
     * @param ArrayOfAdUnit $GetAdUnitListResult
     */
    public function __construct($GetAdUnitListResult)
    {
      $this->GetAdUnitListResult = $GetAdUnitListResult;
    }

    /**
     * @return ArrayOfAdUnit
     */
    public function getGetAdUnitListResult()
    {
      return $this->GetAdUnitListResult;
    }

    /**
     * @param ArrayOfAdUnit $GetAdUnitListResult
     * @return \FatTail\AdBook\GetAdUnitListResponse
     */
    public function setGetAdUnitListResult($GetAdUnitListResult)
    {
      $this->GetAdUnitListResult = $GetAdUnitListResult;
      return $this;
    }

}

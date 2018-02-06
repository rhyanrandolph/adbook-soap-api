<?php

namespace FatTail\AdBook;

class GetAvailabilityListFromReport
{

    /**
     * @var ArrayOfAvailabilityRequest $availRequestList
     */
    protected $availRequestList = null;

    /**
     * @param ArrayOfAvailabilityRequest $availRequestList
     */
    public function __construct($availRequestList)
    {
      $this->availRequestList = $availRequestList;
    }

    /**
     * @return ArrayOfAvailabilityRequest
     */
    public function getAvailRequestList()
    {
      return $this->availRequestList;
    }

    /**
     * @param ArrayOfAvailabilityRequest $availRequestList
     * @return \FatTail\AdBook\GetAvailabilityListFromReport
     */
    public function setAvailRequestList($availRequestList)
    {
      $this->availRequestList = $availRequestList;
      return $this;
    }

}

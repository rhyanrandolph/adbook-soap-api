<?php

namespace FatTail\AdBook;

class GetAvailability
{

    /**
     * @var AvailabilityRequest $availParam
     */
    protected $availParam = null;

    /**
     * @param AvailabilityRequest $availParam
     */
    public function __construct($availParam)
    {
      $this->availParam = $availParam;
    }

    /**
     * @return AvailabilityRequest
     */
    public function getAvailParam()
    {
      return $this->availParam;
    }

    /**
     * @param AvailabilityRequest $availParam
     * @return \FatTail\AdBook\GetAvailability
     */
    public function setAvailParam($availParam)
    {
      $this->availParam = $availParam;
      return $this;
    }

}

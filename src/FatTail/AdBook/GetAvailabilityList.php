<?php

namespace FatTail\AdBook;

class GetAvailabilityList
{

    /**
     * @var ArrayOfAvailabilityRequest $availParamList
     */
    protected $availParamList = null;

    /**
     * @param ArrayOfAvailabilityRequest $availParamList
     */
    public function __construct($availParamList)
    {
      $this->availParamList = $availParamList;
    }

    /**
     * @return ArrayOfAvailabilityRequest
     */
    public function getAvailParamList()
    {
      return $this->availParamList;
    }

    /**
     * @param ArrayOfAvailabilityRequest $availParamList
     * @return \FatTail\AdBook\GetAvailabilityList
     */
    public function setAvailParamList($availParamList)
    {
      $this->availParamList = $availParamList;
      return $this;
    }

}

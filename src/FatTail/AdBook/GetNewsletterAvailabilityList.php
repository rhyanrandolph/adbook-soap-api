<?php

namespace FatTail\AdBook;

class GetNewsletterAvailabilityList
{

    /**
     * @var ArrayOfNewsletterAvailabilityRequest $availParamList
     */
    protected $availParamList = null;

    /**
     * @param ArrayOfNewsletterAvailabilityRequest $availParamList
     */
    public function __construct($availParamList)
    {
      $this->availParamList = $availParamList;
    }

    /**
     * @return ArrayOfNewsletterAvailabilityRequest
     */
    public function getAvailParamList()
    {
      return $this->availParamList;
    }

    /**
     * @param ArrayOfNewsletterAvailabilityRequest $availParamList
     * @return \FatTail\AdBook\GetNewsletterAvailabilityList
     */
    public function setAvailParamList($availParamList)
    {
      $this->availParamList = $availParamList;
      return $this;
    }

}

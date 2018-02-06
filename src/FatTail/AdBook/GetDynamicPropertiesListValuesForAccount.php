<?php

namespace FatTail\AdBook;

class GetDynamicPropertiesListValuesForAccount
{

    /**
     * @var int $dynamicPropertyID
     */
    protected $dynamicPropertyID = null;

    /**
     * @param int $dynamicPropertyID
     */
    public function __construct($dynamicPropertyID)
    {
      $this->dynamicPropertyID = $dynamicPropertyID;
    }

    /**
     * @return int
     */
    public function getDynamicPropertyID()
    {
      return $this->dynamicPropertyID;
    }

    /**
     * @param int $dynamicPropertyID
     * @return \FatTail\AdBook\GetDynamicPropertiesListValuesForAccount
     */
    public function setDynamicPropertyID($dynamicPropertyID)
    {
      $this->dynamicPropertyID = $dynamicPropertyID;
      return $this;
    }

}

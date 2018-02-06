<?php

namespace FatTail\AdBook;

class GetCreativeDynamicPropertiesListValuesByPropertyID
{

    /**
     * @var int $dynamicPropertyId
     */
    protected $dynamicPropertyId = null;

    /**
     * @param int $dynamicPropertyId
     */
    public function __construct($dynamicPropertyId)
    {
      $this->dynamicPropertyId = $dynamicPropertyId;
    }

    /**
     * @return int
     */
    public function getDynamicPropertyId()
    {
      return $this->dynamicPropertyId;
    }

    /**
     * @param int $dynamicPropertyId
     * @return \FatTail\AdBook\GetCreativeDynamicPropertiesListValuesByPropertyID
     */
    public function setDynamicPropertyId($dynamicPropertyId)
    {
      $this->dynamicPropertyId = $dynamicPropertyId;
      return $this;
    }

}

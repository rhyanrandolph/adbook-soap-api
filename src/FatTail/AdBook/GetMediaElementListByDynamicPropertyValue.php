<?php

namespace FatTail\AdBook;

class GetMediaElementListByDynamicPropertyValue
{

    /**
     * @var int $dynamicPropertyId
     */
    protected $dynamicPropertyId = null;

    /**
     * @var string $dynamicPropertyValue
     */
    protected $dynamicPropertyValue = null;

    /**
     * @param int $dynamicPropertyId
     * @param string $dynamicPropertyValue
     */
    public function __construct($dynamicPropertyId, $dynamicPropertyValue)
    {
      $this->dynamicPropertyId = $dynamicPropertyId;
      $this->dynamicPropertyValue = $dynamicPropertyValue;
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
     * @return \FatTail\AdBook\GetMediaElementListByDynamicPropertyValue
     */
    public function setDynamicPropertyId($dynamicPropertyId)
    {
      $this->dynamicPropertyId = $dynamicPropertyId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDynamicPropertyValue()
    {
      return $this->dynamicPropertyValue;
    }

    /**
     * @param string $dynamicPropertyValue
     * @return \FatTail\AdBook\GetMediaElementListByDynamicPropertyValue
     */
    public function setDynamicPropertyValue($dynamicPropertyValue)
    {
      $this->dynamicPropertyValue = $dynamicPropertyValue;
      return $this;
    }

}

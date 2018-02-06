<?php

namespace FatTail\AdBook;

class SearchAgencyListByName
{

    /**
     * @var string $containsValue
     */
    protected $containsValue = null;

    /**
     * @param string $containsValue
     */
    public function __construct($containsValue)
    {
      $this->containsValue = $containsValue;
    }

    /**
     * @return string
     */
    public function getContainsValue()
    {
      return $this->containsValue;
    }

    /**
     * @param string $containsValue
     * @return \FatTail\AdBook\SearchAgencyListByName
     */
    public function setContainsValue($containsValue)
    {
      $this->containsValue = $containsValue;
      return $this;
    }

}

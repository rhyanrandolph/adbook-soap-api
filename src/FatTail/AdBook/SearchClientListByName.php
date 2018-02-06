<?php

namespace FatTail\AdBook;

class SearchClientListByName
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
     * @return \FatTail\AdBook\SearchClientListByName
     */
    public function setContainsValue($containsValue)
    {
      $this->containsValue = $containsValue;
      return $this;
    }

}

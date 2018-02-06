<?php

namespace FatTail\AdBook;

class GetAdServerEntityValues
{

    /**
     * @var int $adserverId
     */
    protected $adserverId = null;

    /**
     * @var AdserverEntityTypes $adServerEntityType
     */
    protected $adServerEntityType = null;

    /**
     * @param int $adserverId
     * @param AdserverEntityTypes $adServerEntityType
     */
    public function __construct($adserverId, $adServerEntityType)
    {
      $this->adserverId = $adserverId;
      $this->adServerEntityType = $adServerEntityType;
    }

    /**
     * @return int
     */
    public function getAdserverId()
    {
      return $this->adserverId;
    }

    /**
     * @param int $adserverId
     * @return \FatTail\AdBook\GetAdServerEntityValues
     */
    public function setAdserverId($adserverId)
    {
      $this->adserverId = $adserverId;
      return $this;
    }

    /**
     * @return AdserverEntityTypes
     */
    public function getAdServerEntityType()
    {
      return $this->adServerEntityType;
    }

    /**
     * @param AdserverEntityTypes $adServerEntityType
     * @return \FatTail\AdBook\GetAdServerEntityValues
     */
    public function setAdServerEntityType($adServerEntityType)
    {
      $this->adServerEntityType = $adServerEntityType;
      return $this;
    }

}

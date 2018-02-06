<?php

namespace FatTail\AdBook;

class BuildKeyValueExpression
{

    /**
     * @var TargetCriteriaSetOR $targetCriteriaSet
     */
    protected $targetCriteriaSet = null;

    /**
     * @var int $adserverId
     */
    protected $adserverId = null;

    /**
     * @param TargetCriteriaSetOR $targetCriteriaSet
     * @param int $adserverId
     */
    public function __construct($targetCriteriaSet, $adserverId)
    {
      $this->targetCriteriaSet = $targetCriteriaSet;
      $this->adserverId = $adserverId;
    }

    /**
     * @return TargetCriteriaSetOR
     */
    public function getTargetCriteriaSet()
    {
      return $this->targetCriteriaSet;
    }

    /**
     * @param TargetCriteriaSetOR $targetCriteriaSet
     * @return \FatTail\AdBook\BuildKeyValueExpression
     */
    public function setTargetCriteriaSet($targetCriteriaSet)
    {
      $this->targetCriteriaSet = $targetCriteriaSet;
      return $this;
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
     * @return \FatTail\AdBook\BuildKeyValueExpression
     */
    public function setAdserverId($adserverId)
    {
      $this->adserverId = $adserverId;
      return $this;
    }

}

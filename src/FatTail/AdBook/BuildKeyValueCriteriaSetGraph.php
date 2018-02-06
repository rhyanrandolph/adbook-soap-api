<?php

namespace FatTail\AdBook;

class BuildKeyValueCriteriaSetGraph
{

    /**
     * @var string $expression
     */
    protected $expression = null;

    /**
     * @var int $adserverId
     */
    protected $adserverId = null;

    /**
     * @param string $expression
     * @param int $adserverId
     */
    public function __construct($expression, $adserverId)
    {
      $this->expression = $expression;
      $this->adserverId = $adserverId;
    }

    /**
     * @return string
     */
    public function getExpression()
    {
      return $this->expression;
    }

    /**
     * @param string $expression
     * @return \FatTail\AdBook\BuildKeyValueCriteriaSetGraph
     */
    public function setExpression($expression)
    {
      $this->expression = $expression;
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
     * @return \FatTail\AdBook\BuildKeyValueCriteriaSetGraph
     */
    public function setAdserverId($adserverId)
    {
      $this->adserverId = $adserverId;
      return $this;
    }

}

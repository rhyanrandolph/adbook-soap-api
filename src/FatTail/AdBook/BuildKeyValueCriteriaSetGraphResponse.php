<?php

namespace FatTail\AdBook;

class BuildKeyValueCriteriaSetGraphResponse
{

    /**
     * @var TargetCriteriaSetOR $BuildKeyValueCriteriaSetGraphResult
     */
    protected $BuildKeyValueCriteriaSetGraphResult = null;

    /**
     * @param TargetCriteriaSetOR $BuildKeyValueCriteriaSetGraphResult
     */
    public function __construct($BuildKeyValueCriteriaSetGraphResult)
    {
      $this->BuildKeyValueCriteriaSetGraphResult = $BuildKeyValueCriteriaSetGraphResult;
    }

    /**
     * @return TargetCriteriaSetOR
     */
    public function getBuildKeyValueCriteriaSetGraphResult()
    {
      return $this->BuildKeyValueCriteriaSetGraphResult;
    }

    /**
     * @param TargetCriteriaSetOR $BuildKeyValueCriteriaSetGraphResult
     * @return \FatTail\AdBook\BuildKeyValueCriteriaSetGraphResponse
     */
    public function setBuildKeyValueCriteriaSetGraphResult($BuildKeyValueCriteriaSetGraphResult)
    {
      $this->BuildKeyValueCriteriaSetGraphResult = $BuildKeyValueCriteriaSetGraphResult;
      return $this;
    }

}

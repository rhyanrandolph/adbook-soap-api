<?php

namespace FatTail\AdBook;

class GetTargetingGroupListResponse
{

    /**
     * @var ArrayOfTargetingGroup $GetTargetingGroupListResult
     */
    protected $GetTargetingGroupListResult = null;

    /**
     * @param ArrayOfTargetingGroup $GetTargetingGroupListResult
     */
    public function __construct($GetTargetingGroupListResult)
    {
      $this->GetTargetingGroupListResult = $GetTargetingGroupListResult;
    }

    /**
     * @return ArrayOfTargetingGroup
     */
    public function getGetTargetingGroupListResult()
    {
      return $this->GetTargetingGroupListResult;
    }

    /**
     * @param ArrayOfTargetingGroup $GetTargetingGroupListResult
     * @return \FatTail\AdBook\GetTargetingGroupListResponse
     */
    public function setGetTargetingGroupListResult($GetTargetingGroupListResult)
    {
      $this->GetTargetingGroupListResult = $GetTargetingGroupListResult;
      return $this;
    }

}

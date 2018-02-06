<?php

namespace FatTail\AdBook;

class GetTargetingElementListResponse
{

    /**
     * @var ArrayOfTargetingElement $GetTargetingElementListResult
     */
    protected $GetTargetingElementListResult = null;

    /**
     * @param ArrayOfTargetingElement $GetTargetingElementListResult
     */
    public function __construct($GetTargetingElementListResult)
    {
      $this->GetTargetingElementListResult = $GetTargetingElementListResult;
    }

    /**
     * @return ArrayOfTargetingElement
     */
    public function getGetTargetingElementListResult()
    {
      return $this->GetTargetingElementListResult;
    }

    /**
     * @param ArrayOfTargetingElement $GetTargetingElementListResult
     * @return \FatTail\AdBook\GetTargetingElementListResponse
     */
    public function setGetTargetingElementListResult($GetTargetingElementListResult)
    {
      $this->GetTargetingElementListResult = $GetTargetingElementListResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetThirdPartyMetricListResponse
{

    /**
     * @var ArrayOfThirdPartyMetric $GetThirdPartyMetricListResult
     */
    protected $GetThirdPartyMetricListResult = null;

    /**
     * @param ArrayOfThirdPartyMetric $GetThirdPartyMetricListResult
     */
    public function __construct($GetThirdPartyMetricListResult)
    {
      $this->GetThirdPartyMetricListResult = $GetThirdPartyMetricListResult;
    }

    /**
     * @return ArrayOfThirdPartyMetric
     */
    public function getGetThirdPartyMetricListResult()
    {
      return $this->GetThirdPartyMetricListResult;
    }

    /**
     * @param ArrayOfThirdPartyMetric $GetThirdPartyMetricListResult
     * @return \FatTail\AdBook\GetThirdPartyMetricListResponse
     */
    public function setGetThirdPartyMetricListResult($GetThirdPartyMetricListResult)
    {
      $this->GetThirdPartyMetricListResult = $GetThirdPartyMetricListResult;
      return $this;
    }

}

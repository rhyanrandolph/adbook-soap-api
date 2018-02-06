<?php

namespace FatTail\AdBook;

class GetMetricOutputColumnListResponse
{

    /**
     * @var ArrayOfMetricOutputColumn $GetMetricOutputColumnListResult
     */
    protected $GetMetricOutputColumnListResult = null;

    /**
     * @param ArrayOfMetricOutputColumn $GetMetricOutputColumnListResult
     */
    public function __construct($GetMetricOutputColumnListResult)
    {
      $this->GetMetricOutputColumnListResult = $GetMetricOutputColumnListResult;
    }

    /**
     * @return ArrayOfMetricOutputColumn
     */
    public function getGetMetricOutputColumnListResult()
    {
      return $this->GetMetricOutputColumnListResult;
    }

    /**
     * @param ArrayOfMetricOutputColumn $GetMetricOutputColumnListResult
     * @return \FatTail\AdBook\GetMetricOutputColumnListResponse
     */
    public function setGetMetricOutputColumnListResult($GetMetricOutputColumnListResult)
    {
      $this->GetMetricOutputColumnListResult = $GetMetricOutputColumnListResult;
      return $this;
    }

}

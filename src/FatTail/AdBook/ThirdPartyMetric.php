<?php

namespace FatTail\AdBook;

class ThirdPartyMetric extends AdBookConnectEntity
{

    /**
     * @var string $MetricName
     */
    protected $MetricName = null;

    /**
     * @var int $ThirdPartyAdServerID
     */
    protected $ThirdPartyAdServerID = null;

    /**
     * @var int $ThirdPartyMetricID
     */
    protected $ThirdPartyMetricID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMetricName()
    {
      return $this->MetricName;
    }

    /**
     * @param string $MetricName
     * @return \FatTail\AdBook\ThirdPartyMetric
     */
    public function setMetricName($MetricName)
    {
      $this->MetricName = $MetricName;
      return $this;
    }

    /**
     * @return int
     */
    public function getThirdPartyAdServerID()
    {
      return $this->ThirdPartyAdServerID;
    }

    /**
     * @param int $ThirdPartyAdServerID
     * @return \FatTail\AdBook\ThirdPartyMetric
     */
    public function setThirdPartyAdServerID($ThirdPartyAdServerID)
    {
      $this->ThirdPartyAdServerID = $ThirdPartyAdServerID;
      return $this;
    }

    /**
     * @return int
     */
    public function getThirdPartyMetricID()
    {
      return $this->ThirdPartyMetricID;
    }

    /**
     * @param int $ThirdPartyMetricID
     * @return \FatTail\AdBook\ThirdPartyMetric
     */
    public function setThirdPartyMetricID($ThirdPartyMetricID)
    {
      $this->ThirdPartyMetricID = $ThirdPartyMetricID;
      return $this;
    }

}

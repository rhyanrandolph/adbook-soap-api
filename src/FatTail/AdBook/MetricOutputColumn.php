<?php

namespace FatTail\AdBook;

class MetricOutputColumn extends AdBookConnectEntity
{

    /**
     * @var int $MetricOutputColumnID
     */
    protected $MetricOutputColumnID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getMetricOutputColumnID()
    {
      return $this->MetricOutputColumnID;
    }

    /**
     * @param int $MetricOutputColumnID
     * @return \FatTail\AdBook\MetricOutputColumn
     */
    public function setMetricOutputColumnID($MetricOutputColumnID)
    {
      $this->MetricOutputColumnID = $MetricOutputColumnID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FatTail\AdBook\MetricOutputColumn
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}

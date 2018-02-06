<?php

namespace FatTail\AdBook;

class OrderConfiguration extends AdBookConnectEntity
{

    /**
     * @var string $ConfigurationName
     */
    protected $ConfigurationName = null;

    /**
     * @var int $OrderConfigurationID
     */
    protected $OrderConfigurationID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getConfigurationName()
    {
      return $this->ConfigurationName;
    }

    /**
     * @param string $ConfigurationName
     * @return \FatTail\AdBook\OrderConfiguration
     */
    public function setConfigurationName($ConfigurationName)
    {
      $this->ConfigurationName = $ConfigurationName;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderConfigurationID()
    {
      return $this->OrderConfigurationID;
    }

    /**
     * @param int $OrderConfigurationID
     * @return \FatTail\AdBook\OrderConfiguration
     */
    public function setOrderConfigurationID($OrderConfigurationID)
    {
      $this->OrderConfigurationID = $OrderConfigurationID;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetOrderConfigurationListResponse
{

    /**
     * @var ArrayOfOrderConfiguration $GetOrderConfigurationListResult
     */
    protected $GetOrderConfigurationListResult = null;

    /**
     * @param ArrayOfOrderConfiguration $GetOrderConfigurationListResult
     */
    public function __construct($GetOrderConfigurationListResult)
    {
      $this->GetOrderConfigurationListResult = $GetOrderConfigurationListResult;
    }

    /**
     * @return ArrayOfOrderConfiguration
     */
    public function getGetOrderConfigurationListResult()
    {
      return $this->GetOrderConfigurationListResult;
    }

    /**
     * @param ArrayOfOrderConfiguration $GetOrderConfigurationListResult
     * @return \FatTail\AdBook\GetOrderConfigurationListResponse
     */
    public function setGetOrderConfigurationListResult($GetOrderConfigurationListResult)
    {
      $this->GetOrderConfigurationListResult = $GetOrderConfigurationListResult;
      return $this;
    }

}

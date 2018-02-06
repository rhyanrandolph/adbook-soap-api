<?php

namespace FatTail\AdBook;

class GetOrderStatusListResponse
{

    /**
     * @var ArrayOfOrderStatus $GetOrderStatusListResult
     */
    protected $GetOrderStatusListResult = null;

    /**
     * @param ArrayOfOrderStatus $GetOrderStatusListResult
     */
    public function __construct($GetOrderStatusListResult)
    {
      $this->GetOrderStatusListResult = $GetOrderStatusListResult;
    }

    /**
     * @return ArrayOfOrderStatus
     */
    public function getGetOrderStatusListResult()
    {
      return $this->GetOrderStatusListResult;
    }

    /**
     * @param ArrayOfOrderStatus $GetOrderStatusListResult
     * @return \FatTail\AdBook\GetOrderStatusListResponse
     */
    public function setGetOrderStatusListResult($GetOrderStatusListResult)
    {
      $this->GetOrderStatusListResult = $GetOrderStatusListResult;
      return $this;
    }

}

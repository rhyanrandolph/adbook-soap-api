<?php

namespace FatTail\AdBook;

class GetOrderListResponse
{

    /**
     * @var ArrayOfOrder $GetOrderListResult
     */
    protected $GetOrderListResult = null;

    /**
     * @param ArrayOfOrder $GetOrderListResult
     */
    public function __construct($GetOrderListResult)
    {
      $this->GetOrderListResult = $GetOrderListResult;
    }

    /**
     * @return ArrayOfOrder
     */
    public function getGetOrderListResult()
    {
      return $this->GetOrderListResult;
    }

    /**
     * @param ArrayOfOrder $GetOrderListResult
     * @return \FatTail\AdBook\GetOrderListResponse
     */
    public function setGetOrderListResult($GetOrderListResult)
    {
      $this->GetOrderListResult = $GetOrderListResult;
      return $this;
    }

}

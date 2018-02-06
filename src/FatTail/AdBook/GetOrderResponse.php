<?php

namespace FatTail\AdBook;

class GetOrderResponse
{

    /**
     * @var Order $GetOrderResult
     */
    protected $GetOrderResult = null;

    /**
     * @param Order $GetOrderResult
     */
    public function __construct($GetOrderResult)
    {
      $this->GetOrderResult = $GetOrderResult;
    }

    /**
     * @return Order
     */
    public function getGetOrderResult()
    {
      return $this->GetOrderResult;
    }

    /**
     * @param Order $GetOrderResult
     * @return \FatTail\AdBook\GetOrderResponse
     */
    public function setGetOrderResult($GetOrderResult)
    {
      $this->GetOrderResult = $GetOrderResult;
      return $this;
    }

}

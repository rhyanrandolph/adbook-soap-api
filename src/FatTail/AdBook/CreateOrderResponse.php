<?php

namespace FatTail\AdBook;

class CreateOrderResponse
{

    /**
     * @var Order $CreateOrderResult
     */
    protected $CreateOrderResult = null;

    /**
     * @param Order $CreateOrderResult
     */
    public function __construct($CreateOrderResult)
    {
      $this->CreateOrderResult = $CreateOrderResult;
    }

    /**
     * @return Order
     */
    public function getCreateOrderResult()
    {
      return $this->CreateOrderResult;
    }

    /**
     * @param Order $CreateOrderResult
     * @return \FatTail\AdBook\CreateOrderResponse
     */
    public function setCreateOrderResult($CreateOrderResult)
    {
      $this->CreateOrderResult = $CreateOrderResult;
      return $this;
    }

}

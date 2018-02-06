<?php

namespace FatTail\AdBook;

class GetDropListForOrder
{

    /**
     * @var int $orderId
     */
    protected $orderId = null;

    /**
     * @param int $orderId
     */
    public function __construct($orderId)
    {
      $this->orderId = $orderId;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return \FatTail\AdBook\GetDropListForOrder
     */
    public function setOrderId($orderId)
    {
      $this->orderId = $orderId;
      return $this;
    }

}

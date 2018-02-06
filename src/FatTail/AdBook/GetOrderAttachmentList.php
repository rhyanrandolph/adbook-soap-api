<?php

namespace FatTail\AdBook;

class GetOrderAttachmentList
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
     * @return \FatTail\AdBook\GetOrderAttachmentList
     */
    public function setOrderId($orderId)
    {
      $this->orderId = $orderId;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class UpdateOrder
{

    /**
     * @var Order $order
     */
    protected $order = null;

    /**
     * @param Order $order
     */
    public function __construct($order)
    {
      $this->order = $order;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
      return $this->order;
    }

    /**
     * @param Order $order
     * @return \FatTail\AdBook\UpdateOrder
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

}

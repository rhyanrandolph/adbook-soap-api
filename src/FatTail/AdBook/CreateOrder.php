<?php

namespace FatTail\AdBook;

class CreateOrder
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
     * @return \FatTail\AdBook\CreateOrder
     */
    public function setOrder($order)
    {
      $this->order = $order;
      return $this;
    }

}

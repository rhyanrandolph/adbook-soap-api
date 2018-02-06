<?php

namespace FatTail\AdBook;

class DeleteOrderAttachment
{

    /**
     * @var OrderAttachment $orderAttachment
     */
    protected $orderAttachment = null;

    /**
     * @param OrderAttachment $orderAttachment
     */
    public function __construct($orderAttachment)
    {
      $this->orderAttachment = $orderAttachment;
    }

    /**
     * @return OrderAttachment
     */
    public function getOrderAttachment()
    {
      return $this->orderAttachment;
    }

    /**
     * @param OrderAttachment $orderAttachment
     * @return \FatTail\AdBook\DeleteOrderAttachment
     */
    public function setOrderAttachment($orderAttachment)
    {
      $this->orderAttachment = $orderAttachment;
      return $this;
    }

}

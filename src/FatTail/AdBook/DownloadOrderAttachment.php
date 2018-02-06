<?php

namespace FatTail\AdBook;

class DownloadOrderAttachment
{

    /**
     * @var int $orderId
     */
    protected $orderId = null;

    /**
     * @var ArrayOflong $orderAttachmentIDs
     */
    protected $orderAttachmentIDs = null;

    /**
     * @param int $orderId
     * @param ArrayOflong $orderAttachmentIDs
     */
    public function __construct($orderId, $orderAttachmentIDs)
    {
      $this->orderId = $orderId;
      $this->orderAttachmentIDs = $orderAttachmentIDs;
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
     * @return \FatTail\AdBook\DownloadOrderAttachment
     */
    public function setOrderId($orderId)
    {
      $this->orderId = $orderId;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getOrderAttachmentIDs()
    {
      return $this->orderAttachmentIDs;
    }

    /**
     * @param ArrayOflong $orderAttachmentIDs
     * @return \FatTail\AdBook\DownloadOrderAttachment
     */
    public function setOrderAttachmentIDs($orderAttachmentIDs)
    {
      $this->orderAttachmentIDs = $orderAttachmentIDs;
      return $this;
    }

}

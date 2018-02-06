<?php

namespace FatTail\AdBook;

class GetOrderAttachmentsByDynamicPropertyId
{

    /**
     * @var int $orderId
     */
    protected $orderId = null;

    /**
     * @var int $dynamicPropertyId
     */
    protected $dynamicPropertyId = null;

    /**
     * @param int $orderId
     * @param int $dynamicPropertyId
     */
    public function __construct($orderId, $dynamicPropertyId)
    {
      $this->orderId = $orderId;
      $this->dynamicPropertyId = $dynamicPropertyId;
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
     * @return \FatTail\AdBook\GetOrderAttachmentsByDynamicPropertyId
     */
    public function setOrderId($orderId)
    {
      $this->orderId = $orderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDynamicPropertyId()
    {
      return $this->dynamicPropertyId;
    }

    /**
     * @param int $dynamicPropertyId
     * @return \FatTail\AdBook\GetOrderAttachmentsByDynamicPropertyId
     */
    public function setDynamicPropertyId($dynamicPropertyId)
    {
      $this->dynamicPropertyId = $dynamicPropertyId;
      return $this;
    }

}

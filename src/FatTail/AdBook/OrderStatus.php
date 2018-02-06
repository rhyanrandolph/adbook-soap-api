<?php

namespace FatTail\AdBook;

class OrderStatus extends AdBookConnectEntity
{

    /**
     * @var int $OrderStatusID
     */
    protected $OrderStatusID = null;

    /**
     * @var string $StatusName
     */
    protected $StatusName = null;

    /**
     * @var boolean $IsCancelled
     */
    protected $IsCancelled = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getOrderStatusID()
    {
      return $this->OrderStatusID;
    }

    /**
     * @param int $OrderStatusID
     * @return \FatTail\AdBook\OrderStatus
     */
    public function setOrderStatusID($OrderStatusID)
    {
      $this->OrderStatusID = $OrderStatusID;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusName()
    {
      return $this->StatusName;
    }

    /**
     * @param string $StatusName
     * @return \FatTail\AdBook\OrderStatus
     */
    public function setStatusName($StatusName)
    {
      $this->StatusName = $StatusName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCancelled()
    {
      return $this->IsCancelled;
    }

    /**
     * @param boolean $IsCancelled
     * @return \FatTail\AdBook\OrderStatus
     */
    public function setIsCancelled($IsCancelled)
    {
      $this->IsCancelled = $IsCancelled;
      return $this;
    }

}

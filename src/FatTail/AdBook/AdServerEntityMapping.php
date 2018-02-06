<?php

namespace FatTail\AdBook;

class AdServerEntityMapping extends AdBookConnectEntity
{

    /**
     * @var int $DropID
     */
    protected $DropID = null;

    /**
     * @var string $ExternalDropID
     */
    protected $ExternalDropID = null;

    /**
     * @var string $ExternalParentID
     */
    protected $ExternalParentID = null;

    /**
     * @var int $OrderID
     */
    protected $OrderID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getDropID()
    {
      return $this->DropID;
    }

    /**
     * @param int $DropID
     * @return \FatTail\AdBook\AdServerEntityMapping
     */
    public function setDropID($DropID)
    {
      $this->DropID = $DropID;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalDropID()
    {
      return $this->ExternalDropID;
    }

    /**
     * @param string $ExternalDropID
     * @return \FatTail\AdBook\AdServerEntityMapping
     */
    public function setExternalDropID($ExternalDropID)
    {
      $this->ExternalDropID = $ExternalDropID;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalParentID()
    {
      return $this->ExternalParentID;
    }

    /**
     * @param string $ExternalParentID
     * @return \FatTail\AdBook\AdServerEntityMapping
     */
    public function setExternalParentID($ExternalParentID)
    {
      $this->ExternalParentID = $ExternalParentID;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param int $OrderID
     * @return \FatTail\AdBook\AdServerEntityMapping
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

}

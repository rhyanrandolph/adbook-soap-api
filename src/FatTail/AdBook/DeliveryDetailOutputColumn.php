<?php

namespace FatTail\AdBook;

class DeliveryDetailOutputColumn extends AdBookConnectEntity
{

    /**
     * @var int $DeliveryDetailOutputColumnID
     */
    protected $DeliveryDetailOutputColumnID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getDeliveryDetailOutputColumnID()
    {
      return $this->DeliveryDetailOutputColumnID;
    }

    /**
     * @param int $DeliveryDetailOutputColumnID
     * @return \FatTail\AdBook\DeliveryDetailOutputColumn
     */
    public function setDeliveryDetailOutputColumnID($DeliveryDetailOutputColumnID)
    {
      $this->DeliveryDetailOutputColumnID = $DeliveryDetailOutputColumnID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FatTail\AdBook\DeliveryDetailOutputColumn
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}

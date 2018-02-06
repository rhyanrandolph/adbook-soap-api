<?php

namespace FatTail\AdBook;

class OrderSearchParameter extends AdBookConnectEntity
{

    /**
     * @var int $AgencyID
     */
    protected $AgencyID = null;

    /**
     * @var int $ClientID
     */
    protected $ClientID = null;

    /**
     * @var int $DropID
     */
    protected $DropID = null;

    /**
     * @var int $OrderStatusID
     */
    protected $OrderStatusID = null;

    /**
     * @var string $PONumber
     */
    protected $PONumber = null;

    /**
     * @var int $RepID
     */
    protected $RepID = null;

    /**
     * @var int $RepTypeID
     */
    protected $RepTypeID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAgencyID()
    {
      return $this->AgencyID;
    }

    /**
     * @param int $AgencyID
     * @return \FatTail\AdBook\OrderSearchParameter
     */
    public function setAgencyID($AgencyID)
    {
      $this->AgencyID = $AgencyID;
      return $this;
    }

    /**
     * @return int
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param int $ClientID
     * @return \FatTail\AdBook\OrderSearchParameter
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
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
     * @return \FatTail\AdBook\OrderSearchParameter
     */
    public function setDropID($DropID)
    {
      $this->DropID = $DropID;
      return $this;
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
     * @return \FatTail\AdBook\OrderSearchParameter
     */
    public function setOrderStatusID($OrderStatusID)
    {
      $this->OrderStatusID = $OrderStatusID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPONumber()
    {
      return $this->PONumber;
    }

    /**
     * @param string $PONumber
     * @return \FatTail\AdBook\OrderSearchParameter
     */
    public function setPONumber($PONumber)
    {
      $this->PONumber = $PONumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getRepID()
    {
      return $this->RepID;
    }

    /**
     * @param int $RepID
     * @return \FatTail\AdBook\OrderSearchParameter
     */
    public function setRepID($RepID)
    {
      $this->RepID = $RepID;
      return $this;
    }

    /**
     * @return int
     */
    public function getRepTypeID()
    {
      return $this->RepTypeID;
    }

    /**
     * @param int $RepTypeID
     * @return \FatTail\AdBook\OrderSearchParameter
     */
    public function setRepTypeID($RepTypeID)
    {
      $this->RepTypeID = $RepTypeID;
      return $this;
    }

}

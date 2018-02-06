<?php

namespace FatTail\AdBook;

class ImportFirstPartyDelivery
{

    /**
     * @var FirstPartyDelivery $delivery
     */
    protected $delivery = null;

    /**
     * @param FirstPartyDelivery $delivery
     */
    public function __construct($delivery)
    {
      $this->delivery = $delivery;
    }

    /**
     * @return FirstPartyDelivery
     */
    public function getDelivery()
    {
      return $this->delivery;
    }

    /**
     * @param FirstPartyDelivery $delivery
     * @return \FatTail\AdBook\ImportFirstPartyDelivery
     */
    public function setDelivery($delivery)
    {
      $this->delivery = $delivery;
      return $this;
    }

}

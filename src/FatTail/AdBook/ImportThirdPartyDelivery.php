<?php

namespace FatTail\AdBook;

class ImportThirdPartyDelivery
{

    /**
     * @var ArrayOfThirdPartyDeliveryQuantity $quantities
     */
    protected $quantities = null;

    /**
     * @param ArrayOfThirdPartyDeliveryQuantity $quantities
     */
    public function __construct($quantities)
    {
      $this->quantities = $quantities;
    }

    /**
     * @return ArrayOfThirdPartyDeliveryQuantity
     */
    public function getQuantities()
    {
      return $this->quantities;
    }

    /**
     * @param ArrayOfThirdPartyDeliveryQuantity $quantities
     * @return \FatTail\AdBook\ImportThirdPartyDelivery
     */
    public function setQuantities($quantities)
    {
      $this->quantities = $quantities;
      return $this;
    }

}

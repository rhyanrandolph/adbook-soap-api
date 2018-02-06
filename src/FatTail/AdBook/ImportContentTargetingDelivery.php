<?php

namespace FatTail\AdBook;

class ImportContentTargetingDelivery
{

    /**
     * @var ArrayOfContentTargetingDelivery $quantities
     */
    protected $quantities = null;

    /**
     * @param ArrayOfContentTargetingDelivery $quantities
     */
    public function __construct($quantities)
    {
      $this->quantities = $quantities;
    }

    /**
     * @return ArrayOfContentTargetingDelivery
     */
    public function getQuantities()
    {
      return $this->quantities;
    }

    /**
     * @param ArrayOfContentTargetingDelivery $quantities
     * @return \FatTail\AdBook\ImportContentTargetingDelivery
     */
    public function setQuantities($quantities)
    {
      $this->quantities = $quantities;
      return $this;
    }

}

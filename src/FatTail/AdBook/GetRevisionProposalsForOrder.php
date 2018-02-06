<?php

namespace FatTail\AdBook;

class GetRevisionProposalsForOrder
{

    /**
     * @var ArrayOflong $orderIDsList
     */
    protected $orderIDsList = null;

    /**
     * @param ArrayOflong $orderIDsList
     */
    public function __construct($orderIDsList)
    {
      $this->orderIDsList = $orderIDsList;
    }

    /**
     * @return ArrayOflong
     */
    public function getOrderIDsList()
    {
      return $this->orderIDsList;
    }

    /**
     * @param ArrayOflong $orderIDsList
     * @return \FatTail\AdBook\GetRevisionProposalsForOrder
     */
    public function setOrderIDsList($orderIDsList)
    {
      $this->orderIDsList = $orderIDsList;
      return $this;
    }

}

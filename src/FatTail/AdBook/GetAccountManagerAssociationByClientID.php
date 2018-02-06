<?php

namespace FatTail\AdBook;

class GetAccountManagerAssociationByClientID
{

    /**
     * @var ArrayOflong $clientIDsList
     */
    protected $clientIDsList = null;

    /**
     * @param ArrayOflong $clientIDsList
     */
    public function __construct($clientIDsList)
    {
      $this->clientIDsList = $clientIDsList;
    }

    /**
     * @return ArrayOflong
     */
    public function getClientIDsList()
    {
      return $this->clientIDsList;
    }

    /**
     * @param ArrayOflong $clientIDsList
     * @return \FatTail\AdBook\GetAccountManagerAssociationByClientID
     */
    public function setClientIDsList($clientIDsList)
    {
      $this->clientIDsList = $clientIDsList;
      return $this;
    }

}

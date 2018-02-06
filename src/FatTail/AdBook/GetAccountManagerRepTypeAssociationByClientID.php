<?php

namespace FatTail\AdBook;

class GetAccountManagerRepTypeAssociationByClientID
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
     * @return \FatTail\AdBook\GetAccountManagerRepTypeAssociationByClientID
     */
    public function setClientIDsList($clientIDsList)
    {
      $this->clientIDsList = $clientIDsList;
      return $this;
    }

}

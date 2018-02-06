<?php

namespace FatTail\AdBook;

class GetAccountManagerAssociationByContactID
{

    /**
     * @var ArrayOflong $contactIDsList
     */
    protected $contactIDsList = null;

    /**
     * @param ArrayOflong $contactIDsList
     */
    public function __construct($contactIDsList)
    {
      $this->contactIDsList = $contactIDsList;
    }

    /**
     * @return ArrayOflong
     */
    public function getContactIDsList()
    {
      return $this->contactIDsList;
    }

    /**
     * @param ArrayOflong $contactIDsList
     * @return \FatTail\AdBook\GetAccountManagerAssociationByContactID
     */
    public function setContactIDsList($contactIDsList)
    {
      $this->contactIDsList = $contactIDsList;
      return $this;
    }

}

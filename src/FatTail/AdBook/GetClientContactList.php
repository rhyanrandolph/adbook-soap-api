<?php

namespace FatTail\AdBook;

class GetClientContactList
{

    /**
     * @var int $clientId
     */
    protected $clientId = null;

    /**
     * @var ContactType $contactType
     */
    protected $contactType = null;

    /**
     * @param int $clientId
     * @param ContactType $contactType
     */
    public function __construct($clientId, $contactType)
    {
      $this->clientId = $clientId;
      $this->contactType = $contactType;
    }

    /**
     * @return int
     */
    public function getClientId()
    {
      return $this->clientId;
    }

    /**
     * @param int $clientId
     * @return \FatTail\AdBook\GetClientContactList
     */
    public function setClientId($clientId)
    {
      $this->clientId = $clientId;
      return $this;
    }

    /**
     * @return ContactType
     */
    public function getContactType()
    {
      return $this->contactType;
    }

    /**
     * @param ContactType $contactType
     * @return \FatTail\AdBook\GetClientContactList
     */
    public function setContactType($contactType)
    {
      $this->contactType = $contactType;
      return $this;
    }

}

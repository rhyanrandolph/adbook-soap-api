<?php

namespace FatTail\AdBook;

class CreateClientContact
{

    /**
     * @var ClientContact $clientContact
     */
    protected $clientContact = null;

    /**
     * @param ClientContact $clientContact
     */
    public function __construct($clientContact)
    {
      $this->clientContact = $clientContact;
    }

    /**
     * @return ClientContact
     */
    public function getClientContact()
    {
      return $this->clientContact;
    }

    /**
     * @param ClientContact $clientContact
     * @return \FatTail\AdBook\CreateClientContact
     */
    public function setClientContact($clientContact)
    {
      $this->clientContact = $clientContact;
      return $this;
    }

}

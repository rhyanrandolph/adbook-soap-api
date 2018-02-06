<?php

namespace FatTail\AdBook;

class PublisherContact extends AdBookConnectEntity
{

    /**
     * @var int $ContactID
     */
    protected $ContactID = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getContactID()
    {
      return $this->ContactID;
    }

    /**
     * @param int $ContactID
     * @return \FatTail\AdBook\PublisherContact
     */
    public function setContactID($ContactID)
    {
      $this->ContactID = $ContactID;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \FatTail\AdBook\PublisherContact
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \FatTail\AdBook\PublisherContact
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \FatTail\AdBook\PublisherContact
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

}

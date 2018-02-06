<?php

namespace FatTail\AdBook;

class AdServer extends AdBookConnectEntity
{

    /**
     * @var int $AdServerID
     */
    protected $AdServerID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAdServerID()
    {
      return $this->AdServerID;
    }

    /**
     * @param int $AdServerID
     * @return \FatTail\AdBook\AdServer
     */
    public function setAdServerID($AdServerID)
    {
      $this->AdServerID = $AdServerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FatTail\AdBook\AdServer
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}

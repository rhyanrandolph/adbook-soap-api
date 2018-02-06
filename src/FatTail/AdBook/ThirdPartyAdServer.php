<?php

namespace FatTail\AdBook;

class ThirdPartyAdServer extends AdBookConnectEntity
{

    /**
     * @var string $AdServerName
     */
    protected $AdServerName = null;

    /**
     * @var int $ThirdPartyAdServerID
     */
    protected $ThirdPartyAdServerID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAdServerName()
    {
      return $this->AdServerName;
    }

    /**
     * @param string $AdServerName
     * @return \FatTail\AdBook\ThirdPartyAdServer
     */
    public function setAdServerName($AdServerName)
    {
      $this->AdServerName = $AdServerName;
      return $this;
    }

    /**
     * @return int
     */
    public function getThirdPartyAdServerID()
    {
      return $this->ThirdPartyAdServerID;
    }

    /**
     * @param int $ThirdPartyAdServerID
     * @return \FatTail\AdBook\ThirdPartyAdServer
     */
    public function setThirdPartyAdServerID($ThirdPartyAdServerID)
    {
      $this->ThirdPartyAdServerID = $ThirdPartyAdServerID;
      return $this;
    }

}

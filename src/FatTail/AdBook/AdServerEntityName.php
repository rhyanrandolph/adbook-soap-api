<?php

namespace FatTail\AdBook;

class AdServerEntityName extends AdBookConnectEntity
{

    /**
     * @var string $AdServerEntityID
     */
    protected $AdServerEntityID = null;

    /**
     * @var ArrayOfAdServerEntityProperty $AdServerEntityProperties
     */
    protected $AdServerEntityProperties = null;

    /**
     * @var int $AdServerID
     */
    protected $AdServerID = null;

    /**
     * @var string $EntityName
     */
    protected $EntityName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAdServerEntityID()
    {
      return $this->AdServerEntityID;
    }

    /**
     * @param string $AdServerEntityID
     * @return \FatTail\AdBook\AdServerEntityName
     */
    public function setAdServerEntityID($AdServerEntityID)
    {
      $this->AdServerEntityID = $AdServerEntityID;
      return $this;
    }

    /**
     * @return ArrayOfAdServerEntityProperty
     */
    public function getAdServerEntityProperties()
    {
      return $this->AdServerEntityProperties;
    }

    /**
     * @param ArrayOfAdServerEntityProperty $AdServerEntityProperties
     * @return \FatTail\AdBook\AdServerEntityName
     */
    public function setAdServerEntityProperties($AdServerEntityProperties)
    {
      $this->AdServerEntityProperties = $AdServerEntityProperties;
      return $this;
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
     * @return \FatTail\AdBook\AdServerEntityName
     */
    public function setAdServerID($AdServerID)
    {
      $this->AdServerID = $AdServerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntityName()
    {
      return $this->EntityName;
    }

    /**
     * @param string $EntityName
     * @return \FatTail\AdBook\AdServerEntityName
     */
    public function setEntityName($EntityName)
    {
      $this->EntityName = $EntityName;
      return $this;
    }

}

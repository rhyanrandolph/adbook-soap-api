<?php

namespace FatTail\AdBook;

class ServedBy extends AdBookConnectEntity
{

    /**
     * @var int $ServedByID
     */
    protected $ServedByID = null;

    /**
     * @var string $ServedByName
     */
    protected $ServedByName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getServedByID()
    {
      return $this->ServedByID;
    }

    /**
     * @param int $ServedByID
     * @return \FatTail\AdBook\ServedBy
     */
    public function setServedByID($ServedByID)
    {
      $this->ServedByID = $ServedByID;
      return $this;
    }

    /**
     * @return string
     */
    public function getServedByName()
    {
      return $this->ServedByName;
    }

    /**
     * @param string $ServedByName
     * @return \FatTail\AdBook\ServedBy
     */
    public function setServedByName($ServedByName)
    {
      $this->ServedByName = $ServedByName;
      return $this;
    }

}

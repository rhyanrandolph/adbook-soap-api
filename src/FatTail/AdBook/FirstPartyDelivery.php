<?php

namespace FatTail\AdBook;

class FirstPartyDelivery extends AdBookConnectEntity
{

    /**
     * @var int $AdServerID
     */
    protected $AdServerID = null;

    /**
     * @var ArrayOfFirstPartyDeliveryQuantity $FirstPartyDeliveryQuantities
     */
    protected $FirstPartyDeliveryQuantities = null;

    /**
     * @var boolean $OverwriteExistingValues
     */
    protected $OverwriteExistingValues = null;

    /**
     * @param int $AdServerID
     * @param boolean $OverwriteExistingValues
     */
    public function __construct($AdServerID, $OverwriteExistingValues)
    {
      $this->AdServerID = $AdServerID;
      $this->OverwriteExistingValues = $OverwriteExistingValues;
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
     * @return \FatTail\AdBook\FirstPartyDelivery
     */
    public function setAdServerID($AdServerID)
    {
      $this->AdServerID = $AdServerID;
      return $this;
    }

    /**
     * @return ArrayOfFirstPartyDeliveryQuantity
     */
    public function getFirstPartyDeliveryQuantities()
    {
      return $this->FirstPartyDeliveryQuantities;
    }

    /**
     * @param ArrayOfFirstPartyDeliveryQuantity $FirstPartyDeliveryQuantities
     * @return \FatTail\AdBook\FirstPartyDelivery
     */
    public function setFirstPartyDeliveryQuantities($FirstPartyDeliveryQuantities)
    {
      $this->FirstPartyDeliveryQuantities = $FirstPartyDeliveryQuantities;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverwriteExistingValues()
    {
      return $this->OverwriteExistingValues;
    }

    /**
     * @param boolean $OverwriteExistingValues
     * @return \FatTail\AdBook\FirstPartyDelivery
     */
    public function setOverwriteExistingValues($OverwriteExistingValues)
    {
      $this->OverwriteExistingValues = $OverwriteExistingValues;
      return $this;
    }

}

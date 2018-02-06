<?php

namespace FatTail\AdBook;

class FirstPartyDeliveryUploadResult extends AdBookConnectEntity
{

    /**
     * @var float $Clicks
     */
    protected $Clicks = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var float $DropID
     */
    protected $DropID = null;

    /**
     * @var float $ImpressionsServed
     */
    protected $ImpressionsServed = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @param \DateTime $DeliveryDate
     * @param float $DropID
     */
    public function __construct(\DateTime $DeliveryDate, $DropID)
    {
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      $this->DropID = $DropID;
    }

    /**
     * @return float
     */
    public function getClicks()
    {
      return $this->Clicks;
    }

    /**
     * @param float $Clicks
     * @return \FatTail\AdBook\FirstPartyDeliveryUploadResult
     */
    public function setClicks($Clicks)
    {
      $this->Clicks = $Clicks;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
      if ($this->DeliveryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeliveryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeliveryDate
     * @return \FatTail\AdBook\FirstPartyDeliveryUploadResult
     */
    public function setDeliveryDate(\DateTime $DeliveryDate)
    {
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getDropID()
    {
      return $this->DropID;
    }

    /**
     * @param float $DropID
     * @return \FatTail\AdBook\FirstPartyDeliveryUploadResult
     */
    public function setDropID($DropID)
    {
      $this->DropID = $DropID;
      return $this;
    }

    /**
     * @return float
     */
    public function getImpressionsServed()
    {
      return $this->ImpressionsServed;
    }

    /**
     * @param float $ImpressionsServed
     * @return \FatTail\AdBook\FirstPartyDeliveryUploadResult
     */
    public function setImpressionsServed($ImpressionsServed)
    {
      $this->ImpressionsServed = $ImpressionsServed;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \FatTail\AdBook\FirstPartyDeliveryUploadResult
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}

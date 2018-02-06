<?php

namespace FatTail\AdBook;

class FirstPartyDeliveryQuantity extends AdBookConnectEntity
{

    /**
     * @var string $AdServerCreativeID
     */
    protected $AdServerCreativeID = null;

    /**
     * @var int $Clicks
     */
    protected $Clicks = null;

    /**
     * @var int $Conversions
     */
    protected $Conversions = null;

    /**
     * @var string $CreativeName
     */
    protected $CreativeName = null;

    /**
     * @var \DateTime $DeliveryDate
     */
    protected $DeliveryDate = null;

    /**
     * @var int $DropID
     */
    protected $DropID = null;

    /**
     * @var string $ExternalDropID
     */
    protected $ExternalDropID = null;

    /**
     * @var int $Impressions
     */
    protected $Impressions = null;

    /**
     * @param \DateTime $DeliveryDate
     */
    public function __construct(\DateTime $DeliveryDate)
    {
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getAdServerCreativeID()
    {
      return $this->AdServerCreativeID;
    }

    /**
     * @param string $AdServerCreativeID
     * @return \FatTail\AdBook\FirstPartyDeliveryQuantity
     */
    public function setAdServerCreativeID($AdServerCreativeID)
    {
      $this->AdServerCreativeID = $AdServerCreativeID;
      return $this;
    }

    /**
     * @return int
     */
    public function getClicks()
    {
      return $this->Clicks;
    }

    /**
     * @param int $Clicks
     * @return \FatTail\AdBook\FirstPartyDeliveryQuantity
     */
    public function setClicks($Clicks)
    {
      $this->Clicks = $Clicks;
      return $this;
    }

    /**
     * @return int
     */
    public function getConversions()
    {
      return $this->Conversions;
    }

    /**
     * @param int $Conversions
     * @return \FatTail\AdBook\FirstPartyDeliveryQuantity
     */
    public function setConversions($Conversions)
    {
      $this->Conversions = $Conversions;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreativeName()
    {
      return $this->CreativeName;
    }

    /**
     * @param string $CreativeName
     * @return \FatTail\AdBook\FirstPartyDeliveryQuantity
     */
    public function setCreativeName($CreativeName)
    {
      $this->CreativeName = $CreativeName;
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
     * @return \FatTail\AdBook\FirstPartyDeliveryQuantity
     */
    public function setDeliveryDate(\DateTime $DeliveryDate)
    {
      $this->DeliveryDate = $DeliveryDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getDropID()
    {
      return $this->DropID;
    }

    /**
     * @param int $DropID
     * @return \FatTail\AdBook\FirstPartyDeliveryQuantity
     */
    public function setDropID($DropID)
    {
      $this->DropID = $DropID;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalDropID()
    {
      return $this->ExternalDropID;
    }

    /**
     * @param string $ExternalDropID
     * @return \FatTail\AdBook\FirstPartyDeliveryQuantity
     */
    public function setExternalDropID($ExternalDropID)
    {
      $this->ExternalDropID = $ExternalDropID;
      return $this;
    }

    /**
     * @return int
     */
    public function getImpressions()
    {
      return $this->Impressions;
    }

    /**
     * @param int $Impressions
     * @return \FatTail\AdBook\FirstPartyDeliveryQuantity
     */
    public function setImpressions($Impressions)
    {
      $this->Impressions = $Impressions;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class AvailabilityRequest extends AdBookConnectEntity
{

    /**
     * @var Targeting $AvailibilityTargeting
     */
    protected $AvailibilityTargeting = null;

    /**
     * @var int $DropID
     */
    protected $DropID = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var int $MediaElementID
     */
    protected $MediaElementID = null;

    /**
     * @var boolean $OnTheFlySponsorship
     */
    protected $OnTheFlySponsorship = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var int $PriceTypeID
     */
    protected $PriceTypeID = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @param \DateTime $EndDate
     * @param int $MediaElementID
     * @param \DateTime $StartDate
     */
    public function __construct(\DateTime $EndDate, $MediaElementID, \DateTime $StartDate)
    {
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
      $this->MediaElementID = $MediaElementID;
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
    }

    /**
     * @return Targeting
     */
    public function getAvailibilityTargeting()
    {
      return $this->AvailibilityTargeting;
    }

    /**
     * @param Targeting $AvailibilityTargeting
     * @return \FatTail\AdBook\AvailabilityRequest
     */
    public function setAvailibilityTargeting($AvailibilityTargeting)
    {
      $this->AvailibilityTargeting = $AvailibilityTargeting;
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
     * @return \FatTail\AdBook\AvailabilityRequest
     */
    public function setDropID($DropID)
    {
      $this->DropID = $DropID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return \FatTail\AdBook\AvailabilityRequest
     */
    public function setEndDate(\DateTime $EndDate)
    {
      $this->EndDate = $EndDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getMediaElementID()
    {
      return $this->MediaElementID;
    }

    /**
     * @param int $MediaElementID
     * @return \FatTail\AdBook\AvailabilityRequest
     */
    public function setMediaElementID($MediaElementID)
    {
      $this->MediaElementID = $MediaElementID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnTheFlySponsorship()
    {
      return $this->OnTheFlySponsorship;
    }

    /**
     * @param boolean $OnTheFlySponsorship
     * @return \FatTail\AdBook\AvailabilityRequest
     */
    public function setOnTheFlySponsorship($OnTheFlySponsorship)
    {
      $this->OnTheFlySponsorship = $OnTheFlySponsorship;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \FatTail\AdBook\AvailabilityRequest
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriceTypeID()
    {
      return $this->PriceTypeID;
    }

    /**
     * @param int $PriceTypeID
     * @return \FatTail\AdBook\AvailabilityRequest
     */
    public function setPriceTypeID($PriceTypeID)
    {
      $this->PriceTypeID = $PriceTypeID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return \FatTail\AdBook\AvailabilityRequest
     */
    public function setStartDate(\DateTime $StartDate)
    {
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
      return $this;
    }

}

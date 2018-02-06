<?php

namespace FatTail\AdBook;

class Availability extends AdBookConnectEntity
{

    /**
     * @var int $Availability100Percent
     */
    protected $Availability100Percent = null;

    /**
     * @var int $AvailabilityOversell
     */
    protected $AvailabilityOversell = null;

    /**
     * @var int $Available
     */
    protected $Available = null;

    /**
     * @var int $DropID
     */
    protected $DropID = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var int $Forecast
     */
    protected $Forecast = null;

    /**
     * @var int $MediaElementID
     */
    protected $MediaElementID = null;

    /**
     * @var int $Partial
     */
    protected $Partial = null;

    /**
     * @var int $Preemptible
     */
    protected $Preemptible = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var int $Targeting
     */
    protected $Targeting = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getAvailability100Percent()
    {
      return $this->Availability100Percent;
    }

    /**
     * @param int $Availability100Percent
     * @return \FatTail\AdBook\Availability
     */
    public function setAvailability100Percent($Availability100Percent)
    {
      $this->Availability100Percent = $Availability100Percent;
      return $this;
    }

    /**
     * @return int
     */
    public function getAvailabilityOversell()
    {
      return $this->AvailabilityOversell;
    }

    /**
     * @param int $AvailabilityOversell
     * @return \FatTail\AdBook\Availability
     */
    public function setAvailabilityOversell($AvailabilityOversell)
    {
      $this->AvailabilityOversell = $AvailabilityOversell;
      return $this;
    }

    /**
     * @return int
     */
    public function getAvailable()
    {
      return $this->Available;
    }

    /**
     * @param int $Available
     * @return \FatTail\AdBook\Availability
     */
    public function setAvailable($Available)
    {
      $this->Available = $Available;
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
     * @return \FatTail\AdBook\Availability
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
     * @return \FatTail\AdBook\Availability
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getForecast()
    {
      return $this->Forecast;
    }

    /**
     * @param int $Forecast
     * @return \FatTail\AdBook\Availability
     */
    public function setForecast($Forecast)
    {
      $this->Forecast = $Forecast;
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
     * @return \FatTail\AdBook\Availability
     */
    public function setMediaElementID($MediaElementID)
    {
      $this->MediaElementID = $MediaElementID;
      return $this;
    }

    /**
     * @return int
     */
    public function getPartial()
    {
      return $this->Partial;
    }

    /**
     * @param int $Partial
     * @return \FatTail\AdBook\Availability
     */
    public function setPartial($Partial)
    {
      $this->Partial = $Partial;
      return $this;
    }

    /**
     * @return int
     */
    public function getPreemptible()
    {
      return $this->Preemptible;
    }

    /**
     * @param int $Preemptible
     * @return \FatTail\AdBook\Availability
     */
    public function setPreemptible($Preemptible)
    {
      $this->Preemptible = $Preemptible;
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
     * @return \FatTail\AdBook\Availability
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getTargeting()
    {
      return $this->Targeting;
    }

    /**
     * @param int $Targeting
     * @return \FatTail\AdBook\Availability
     */
    public function setTargeting($Targeting)
    {
      $this->Targeting = $Targeting;
      return $this;
    }

}

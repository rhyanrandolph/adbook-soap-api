<?php

namespace FatTail\AdBook;

class NewsletterAvailability extends AdBookConnectEntity
{

    /**
     * @var int $Available
     */
    protected $Available = null;

    /**
     * @var int $ClientID
     */
    protected $ClientID = null;

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var int $MediaElementID
     */
    protected $MediaElementID = null;

    /**
     * @var int $OrderStatusID
     */
    protected $OrderStatusID = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    
    public function __construct()
    {
    
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
     * @return \FatTail\AdBook\NewsletterAvailability
     */
    public function setAvailable($Available)
    {
      $this->Available = $Available;
      return $this;
    }

    /**
     * @return int
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param int $ClientID
     * @return \FatTail\AdBook\NewsletterAvailability
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
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
     * @return \FatTail\AdBook\NewsletterAvailability
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
    public function getMediaElementID()
    {
      return $this->MediaElementID;
    }

    /**
     * @param int $MediaElementID
     * @return \FatTail\AdBook\NewsletterAvailability
     */
    public function setMediaElementID($MediaElementID)
    {
      $this->MediaElementID = $MediaElementID;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderStatusID()
    {
      return $this->OrderStatusID;
    }

    /**
     * @param int $OrderStatusID
     * @return \FatTail\AdBook\NewsletterAvailability
     */
    public function setOrderStatusID($OrderStatusID)
    {
      $this->OrderStatusID = $OrderStatusID;
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
     * @return \FatTail\AdBook\NewsletterAvailability
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

}

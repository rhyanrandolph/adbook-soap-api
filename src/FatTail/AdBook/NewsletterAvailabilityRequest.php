<?php

namespace FatTail\AdBook;

class NewsletterAvailabilityRequest extends AdBookConnectEntity
{

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var int $MediaElementID
     */
    protected $MediaElementID = null;

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
     * @return \FatTail\AdBook\NewsletterAvailabilityRequest
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
     * @return \FatTail\AdBook\NewsletterAvailabilityRequest
     */
    public function setMediaElementID($MediaElementID)
    {
      $this->MediaElementID = $MediaElementID;
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
     * @return \FatTail\AdBook\NewsletterAvailabilityRequest
     */
    public function setStartDate(\DateTime $StartDate)
    {
      $this->StartDate = $StartDate->format(\DateTime::ATOM);
      return $this;
    }

}

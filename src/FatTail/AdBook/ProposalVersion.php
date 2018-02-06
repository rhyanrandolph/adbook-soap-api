<?php

namespace FatTail\AdBook;

class ProposalVersion extends AdBookConnectEntity
{

    /**
     * @var AcceptStatus $AcceptanceStatus
     */
    protected $AcceptanceStatus = null;

    /**
     * @var \DateTime $FinalizedDate
     */
    protected $FinalizedDate = null;

    /**
     * @var boolean $IsPrimary
     */
    protected $IsPrimary = null;

    /**
     * @var string $ProposalVersionName
     */
    protected $ProposalVersionName = null;

    /**
     * @var int $SourceOrderID
     */
    protected $SourceOrderID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AcceptStatus
     */
    public function getAcceptanceStatus()
    {
      return $this->AcceptanceStatus;
    }

    /**
     * @param AcceptStatus $AcceptanceStatus
     * @return \FatTail\AdBook\ProposalVersion
     */
    public function setAcceptanceStatus($AcceptanceStatus)
    {
      $this->AcceptanceStatus = $AcceptanceStatus;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFinalizedDate()
    {
      if ($this->FinalizedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FinalizedDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FinalizedDate
     * @return \FatTail\AdBook\ProposalVersion
     */
    public function setFinalizedDate(\DateTime $FinalizedDate = null)
    {
      if ($FinalizedDate == null) {
       $this->FinalizedDate = null;
      } else {
        $this->FinalizedDate = $FinalizedDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrimary()
    {
      return $this->IsPrimary;
    }

    /**
     * @param boolean $IsPrimary
     * @return \FatTail\AdBook\ProposalVersion
     */
    public function setIsPrimary($IsPrimary)
    {
      $this->IsPrimary = $IsPrimary;
      return $this;
    }

    /**
     * @return string
     */
    public function getProposalVersionName()
    {
      return $this->ProposalVersionName;
    }

    /**
     * @param string $ProposalVersionName
     * @return \FatTail\AdBook\ProposalVersion
     */
    public function setProposalVersionName($ProposalVersionName)
    {
      $this->ProposalVersionName = $ProposalVersionName;
      return $this;
    }

    /**
     * @return int
     */
    public function getSourceOrderID()
    {
      return $this->SourceOrderID;
    }

    /**
     * @param int $SourceOrderID
     * @return \FatTail\AdBook\ProposalVersion
     */
    public function setSourceOrderID($SourceOrderID)
    {
      $this->SourceOrderID = $SourceOrderID;
      return $this;
    }

}

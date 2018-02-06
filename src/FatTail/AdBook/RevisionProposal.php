<?php

namespace FatTail\AdBook;

class RevisionProposal extends AdBookConnectEntity
{

    /**
     * @var string $RevisionName
     */
    protected $RevisionName = null;

    /**
     * @var int $SourceOrderID
     */
    protected $SourceOrderID = null;

    /**
     * @var float $TotalBudget
     */
    protected $TotalBudget = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRevisionName()
    {
      return $this->RevisionName;
    }

    /**
     * @param string $RevisionName
     * @return \FatTail\AdBook\RevisionProposal
     */
    public function setRevisionName($RevisionName)
    {
      $this->RevisionName = $RevisionName;
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
     * @return \FatTail\AdBook\RevisionProposal
     */
    public function setSourceOrderID($SourceOrderID)
    {
      $this->SourceOrderID = $SourceOrderID;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalBudget()
    {
      return $this->TotalBudget;
    }

    /**
     * @param float $TotalBudget
     * @return \FatTail\AdBook\RevisionProposal
     */
    public function setTotalBudget($TotalBudget)
    {
      $this->TotalBudget = $TotalBudget;
      return $this;
    }

}

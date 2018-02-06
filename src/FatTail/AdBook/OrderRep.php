<?php

namespace FatTail\AdBook;

class OrderRep extends AdBookConnectEntity
{

    /**
     * @var int $RepContactId
     */
    protected $RepContactId = null;

    /**
     * @var float $RepSplit
     */
    protected $RepSplit = null;

    /**
     * @var int $RepTypeId
     */
    protected $RepTypeId = null;

    /**
     * @param int $RepContactId
     * @param int $RepTypeId
     */
    public function __construct($RepContactId, $RepTypeId)
    {
      $this->RepContactId = $RepContactId;
      $this->RepTypeId = $RepTypeId;
    }

    /**
     * @return int
     */
    public function getRepContactId()
    {
      return $this->RepContactId;
    }

    /**
     * @param int $RepContactId
     * @return \FatTail\AdBook\OrderRep
     */
    public function setRepContactId($RepContactId)
    {
      $this->RepContactId = $RepContactId;
      return $this;
    }

    /**
     * @return float
     */
    public function getRepSplit()
    {
      return $this->RepSplit;
    }

    /**
     * @param float $RepSplit
     * @return \FatTail\AdBook\OrderRep
     */
    public function setRepSplit($RepSplit)
    {
      $this->RepSplit = $RepSplit;
      return $this;
    }

    /**
     * @return int
     */
    public function getRepTypeId()
    {
      return $this->RepTypeId;
    }

    /**
     * @param int $RepTypeId
     * @return \FatTail\AdBook\OrderRep
     */
    public function setRepTypeId($RepTypeId)
    {
      $this->RepTypeId = $RepTypeId;
      return $this;
    }

}

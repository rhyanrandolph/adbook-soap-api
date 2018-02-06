<?php

namespace FatTail\AdBook;

class GetRepListForType
{

    /**
     * @var int $repTypeId
     */
    protected $repTypeId = null;

    /**
     * @param int $repTypeId
     */
    public function __construct($repTypeId)
    {
      $this->repTypeId = $repTypeId;
    }

    /**
     * @return int
     */
    public function getRepTypeId()
    {
      return $this->repTypeId;
    }

    /**
     * @param int $repTypeId
     * @return \FatTail\AdBook\GetRepListForType
     */
    public function setRepTypeId($repTypeId)
    {
      $this->repTypeId = $repTypeId;
      return $this;
    }

}

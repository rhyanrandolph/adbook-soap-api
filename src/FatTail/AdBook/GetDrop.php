<?php

namespace FatTail\AdBook;

class GetDrop
{

    /**
     * @var int $dropId
     */
    protected $dropId = null;

    /**
     * @param int $dropId
     */
    public function __construct($dropId)
    {
      $this->dropId = $dropId;
    }

    /**
     * @return int
     */
    public function getDropId()
    {
      return $this->dropId;
    }

    /**
     * @param int $dropId
     * @return \FatTail\AdBook\GetDrop
     */
    public function setDropId($dropId)
    {
      $this->dropId = $dropId;
      return $this;
    }

}

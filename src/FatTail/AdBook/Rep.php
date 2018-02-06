<?php

namespace FatTail\AdBook;

class Rep extends Contact
{

    /**
     * @var int $RepTypeID
     */
    protected $RepTypeID = null;

    /**
     * @param int $RepTypeID
     */
    public function __construct($RepTypeID)
    {
      parent::__construct();
      $this->RepTypeID = $RepTypeID;
    }

    /**
     * @return int
     */
    public function getRepTypeID()
    {
      return $this->RepTypeID;
    }

    /**
     * @param int $RepTypeID
     * @return \FatTail\AdBook\Rep
     */
    public function setRepTypeID($RepTypeID)
    {
      $this->RepTypeID = $RepTypeID;
      return $this;
    }

}

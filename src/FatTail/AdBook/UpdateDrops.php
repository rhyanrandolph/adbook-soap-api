<?php

namespace FatTail\AdBook;

class UpdateDrops
{

    /**
     * @var ArrayOfDrop $drops
     */
    protected $drops = null;

    /**
     * @param ArrayOfDrop $drops
     */
    public function __construct($drops)
    {
      $this->drops = $drops;
    }

    /**
     * @return ArrayOfDrop
     */
    public function getDrops()
    {
      return $this->drops;
    }

    /**
     * @param ArrayOfDrop $drops
     * @return \FatTail\AdBook\UpdateDrops
     */
    public function setDrops($drops)
    {
      $this->drops = $drops;
      return $this;
    }

}

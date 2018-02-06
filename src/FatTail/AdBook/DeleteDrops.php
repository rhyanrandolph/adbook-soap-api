<?php

namespace FatTail\AdBook;

class DeleteDrops
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
     * @return \FatTail\AdBook\DeleteDrops
     */
    public function setDrops($drops)
    {
      $this->drops = $drops;
      return $this;
    }

}

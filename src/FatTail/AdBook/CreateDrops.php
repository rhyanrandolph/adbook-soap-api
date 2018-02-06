<?php

namespace FatTail\AdBook;

class CreateDrops
{

    /**
     * @var ArrayOfDrop $drop
     */
    protected $drop = null;

    /**
     * @param ArrayOfDrop $drop
     */
    public function __construct($drop)
    {
      $this->drop = $drop;
    }

    /**
     * @return ArrayOfDrop
     */
    public function getDrop()
    {
      return $this->drop;
    }

    /**
     * @param ArrayOfDrop $drop
     * @return \FatTail\AdBook\CreateDrops
     */
    public function setDrop($drop)
    {
      $this->drop = $drop;
      return $this;
    }

}

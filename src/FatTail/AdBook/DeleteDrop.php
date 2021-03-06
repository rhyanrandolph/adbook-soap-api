<?php

namespace FatTail\AdBook;

class DeleteDrop
{

    /**
     * @var Drop $drop
     */
    protected $drop = null;

    /**
     * @param Drop $drop
     */
    public function __construct($drop)
    {
      $this->drop = $drop;
    }

    /**
     * @return Drop
     */
    public function getDrop()
    {
      return $this->drop;
    }

    /**
     * @param Drop $drop
     * @return \FatTail\AdBook\DeleteDrop
     */
    public function setDrop($drop)
    {
      $this->drop = $drop;
      return $this;
    }

}

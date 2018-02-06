<?php

namespace FatTail\AdBook;

class CreateCreative
{

    /**
     * @var Creative $creative
     */
    protected $creative = null;

    /**
     * @param Creative $creative
     */
    public function __construct($creative)
    {
      $this->creative = $creative;
    }

    /**
     * @return Creative
     */
    public function getCreative()
    {
      return $this->creative;
    }

    /**
     * @param Creative $creative
     * @return \FatTail\AdBook\CreateCreative
     */
    public function setCreative($creative)
    {
      $this->creative = $creative;
      return $this;
    }

}

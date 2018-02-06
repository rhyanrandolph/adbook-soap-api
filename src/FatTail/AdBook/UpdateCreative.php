<?php

namespace FatTail\AdBook;

class UpdateCreative
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
     * @return \FatTail\AdBook\UpdateCreative
     */
    public function setCreative($creative)
    {
      $this->creative = $creative;
      return $this;
    }

}

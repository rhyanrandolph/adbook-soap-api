<?php

namespace FatTail\AdBook;

class CreatePackageComponentDrops
{

    /**
     * @var ArrayOfPackageComponentDrop $componentDrops
     */
    protected $componentDrops = null;

    /**
     * @param ArrayOfPackageComponentDrop $componentDrops
     */
    public function __construct($componentDrops)
    {
      $this->componentDrops = $componentDrops;
    }

    /**
     * @return ArrayOfPackageComponentDrop
     */
    public function getComponentDrops()
    {
      return $this->componentDrops;
    }

    /**
     * @param ArrayOfPackageComponentDrop $componentDrops
     * @return \FatTail\AdBook\CreatePackageComponentDrops
     */
    public function setComponentDrops($componentDrops)
    {
      $this->componentDrops = $componentDrops;
      return $this;
    }

}

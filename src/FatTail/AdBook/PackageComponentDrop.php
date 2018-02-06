<?php

namespace FatTail\AdBook;

class PackageComponentDrop extends Drop
{

    /**
     * @var int $ParentDropID
     */
    protected $ParentDropID = null;

    /**
     * @param BillingCategory $BillingCategory
     * @param \DateTime $DropDate
     * @param \DateTime $EndDropDate
     * @param int $MediaElementID
     * @param int $OrderID
     * @param int $PriceTypeID
     * @param int $ParentDropID
     */
    public function __construct($BillingCategory, \DateTime $DropDate, \DateTime $EndDropDate, $MediaElementID, $OrderID, $PriceTypeID, $ParentDropID)
    {
      parent::__construct($BillingCategory, $DropDate, $EndDropDate, $MediaElementID, $OrderID, $PriceTypeID);
      $this->ParentDropID = $ParentDropID;
    }

    /**
     * @return int
     */
    public function getParentDropID()
    {
      return $this->ParentDropID;
    }

    /**
     * @param int $ParentDropID
     * @return \FatTail\AdBook\PackageComponentDrop
     */
    public function setParentDropID($ParentDropID)
    {
      $this->ParentDropID = $ParentDropID;
      return $this;
    }

}

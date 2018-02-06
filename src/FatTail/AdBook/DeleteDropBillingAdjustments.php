<?php

namespace FatTail\AdBook;

class DeleteDropBillingAdjustments
{

    /**
     * @var ArrayOfDropBillingAdjustment $dropBillingAdjustments
     */
    protected $dropBillingAdjustments = null;

    /**
     * @param ArrayOfDropBillingAdjustment $dropBillingAdjustments
     */
    public function __construct($dropBillingAdjustments)
    {
      $this->dropBillingAdjustments = $dropBillingAdjustments;
    }

    /**
     * @return ArrayOfDropBillingAdjustment
     */
    public function getDropBillingAdjustments()
    {
      return $this->dropBillingAdjustments;
    }

    /**
     * @param ArrayOfDropBillingAdjustment $dropBillingAdjustments
     * @return \FatTail\AdBook\DeleteDropBillingAdjustments
     */
    public function setDropBillingAdjustments($dropBillingAdjustments)
    {
      $this->dropBillingAdjustments = $dropBillingAdjustments;
      return $this;
    }

}

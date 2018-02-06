<?php

namespace FatTail\AdBook;

class UpdateDropBillingStatus
{

    /**
     * @var ArrayOfDropBillingStatusInfo $dropBillingStatusList
     */
    protected $dropBillingStatusList = null;

    /**
     * @param ArrayOfDropBillingStatusInfo $dropBillingStatusList
     */
    public function __construct($dropBillingStatusList)
    {
      $this->dropBillingStatusList = $dropBillingStatusList;
    }

    /**
     * @return ArrayOfDropBillingStatusInfo
     */
    public function getDropBillingStatusList()
    {
      return $this->dropBillingStatusList;
    }

    /**
     * @param ArrayOfDropBillingStatusInfo $dropBillingStatusList
     * @return \FatTail\AdBook\UpdateDropBillingStatus
     */
    public function setDropBillingStatusList($dropBillingStatusList)
    {
      $this->dropBillingStatusList = $dropBillingStatusList;
      return $this;
    }

}

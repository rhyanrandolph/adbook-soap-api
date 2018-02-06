<?php

namespace FatTail\AdBook;

class GetDeliveryDetailOutputColumnListResponse
{

    /**
     * @var ArrayOfDeliveryDetailOutputColumn $GetDeliveryDetailOutputColumnListResult
     */
    protected $GetDeliveryDetailOutputColumnListResult = null;

    /**
     * @param ArrayOfDeliveryDetailOutputColumn $GetDeliveryDetailOutputColumnListResult
     */
    public function __construct($GetDeliveryDetailOutputColumnListResult)
    {
      $this->GetDeliveryDetailOutputColumnListResult = $GetDeliveryDetailOutputColumnListResult;
    }

    /**
     * @return ArrayOfDeliveryDetailOutputColumn
     */
    public function getGetDeliveryDetailOutputColumnListResult()
    {
      return $this->GetDeliveryDetailOutputColumnListResult;
    }

    /**
     * @param ArrayOfDeliveryDetailOutputColumn $GetDeliveryDetailOutputColumnListResult
     * @return \FatTail\AdBook\GetDeliveryDetailOutputColumnListResponse
     */
    public function setGetDeliveryDetailOutputColumnListResult($GetDeliveryDetailOutputColumnListResult)
    {
      $this->GetDeliveryDetailOutputColumnListResult = $GetDeliveryDetailOutputColumnListResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class UpdateDropBillingStatusResponse
{

    /**
     * @var ArrayOfUpdateDropBillingStatusResult $UpdateDropBillingStatusResult
     */
    protected $UpdateDropBillingStatusResult = null;

    /**
     * @param ArrayOfUpdateDropBillingStatusResult $UpdateDropBillingStatusResult
     */
    public function __construct($UpdateDropBillingStatusResult)
    {
      $this->UpdateDropBillingStatusResult = $UpdateDropBillingStatusResult;
    }

    /**
     * @return ArrayOfUpdateDropBillingStatusResult
     */
    public function getUpdateDropBillingStatusResult()
    {
      return $this->UpdateDropBillingStatusResult;
    }

    /**
     * @param ArrayOfUpdateDropBillingStatusResult $UpdateDropBillingStatusResult
     * @return \FatTail\AdBook\UpdateDropBillingStatusResponse
     */
    public function setUpdateDropBillingStatusResult($UpdateDropBillingStatusResult)
    {
      $this->UpdateDropBillingStatusResult = $UpdateDropBillingStatusResult;
      return $this;
    }

}

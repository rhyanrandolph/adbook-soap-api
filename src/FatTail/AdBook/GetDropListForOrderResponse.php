<?php

namespace FatTail\AdBook;

class GetDropListForOrderResponse
{

    /**
     * @var ArrayOfDrop $GetDropListForOrderResult
     */
    protected $GetDropListForOrderResult = null;

    /**
     * @param ArrayOfDrop $GetDropListForOrderResult
     */
    public function __construct($GetDropListForOrderResult)
    {
      $this->GetDropListForOrderResult = $GetDropListForOrderResult;
    }

    /**
     * @return ArrayOfDrop
     */
    public function getGetDropListForOrderResult()
    {
      return $this->GetDropListForOrderResult;
    }

    /**
     * @param ArrayOfDrop $GetDropListForOrderResult
     * @return \FatTail\AdBook\GetDropListForOrderResponse
     */
    public function setGetDropListForOrderResult($GetDropListForOrderResult)
    {
      $this->GetDropListForOrderResult = $GetDropListForOrderResult;
      return $this;
    }

}

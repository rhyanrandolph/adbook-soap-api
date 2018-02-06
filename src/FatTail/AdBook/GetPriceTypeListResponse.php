<?php

namespace FatTail\AdBook;

class GetPriceTypeListResponse
{

    /**
     * @var ArrayOfPriceType $GetPriceTypeListResult
     */
    protected $GetPriceTypeListResult = null;

    /**
     * @param ArrayOfPriceType $GetPriceTypeListResult
     */
    public function __construct($GetPriceTypeListResult)
    {
      $this->GetPriceTypeListResult = $GetPriceTypeListResult;
    }

    /**
     * @return ArrayOfPriceType
     */
    public function getGetPriceTypeListResult()
    {
      return $this->GetPriceTypeListResult;
    }

    /**
     * @param ArrayOfPriceType $GetPriceTypeListResult
     * @return \FatTail\AdBook\GetPriceTypeListResponse
     */
    public function setGetPriceTypeListResult($GetPriceTypeListResult)
    {
      $this->GetPriceTypeListResult = $GetPriceTypeListResult;
      return $this;
    }

}

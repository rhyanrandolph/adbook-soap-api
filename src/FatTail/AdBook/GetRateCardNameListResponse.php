<?php

namespace FatTail\AdBook;

class GetRateCardNameListResponse
{

    /**
     * @var ArrayOfRateCardName $GetRateCardNameListResult
     */
    protected $GetRateCardNameListResult = null;

    /**
     * @param ArrayOfRateCardName $GetRateCardNameListResult
     */
    public function __construct($GetRateCardNameListResult)
    {
      $this->GetRateCardNameListResult = $GetRateCardNameListResult;
    }

    /**
     * @return ArrayOfRateCardName
     */
    public function getGetRateCardNameListResult()
    {
      return $this->GetRateCardNameListResult;
    }

    /**
     * @param ArrayOfRateCardName $GetRateCardNameListResult
     * @return \FatTail\AdBook\GetRateCardNameListResponse
     */
    public function setGetRateCardNameListResult($GetRateCardNameListResult)
    {
      $this->GetRateCardNameListResult = $GetRateCardNameListResult;
      return $this;
    }

}

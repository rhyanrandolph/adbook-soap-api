<?php

namespace FatTail\AdBook;

class GetCurrencyListResponse
{

    /**
     * @var ArrayOfCurrency $GetCurrencyListResult
     */
    protected $GetCurrencyListResult = null;

    /**
     * @param ArrayOfCurrency $GetCurrencyListResult
     */
    public function __construct($GetCurrencyListResult)
    {
      $this->GetCurrencyListResult = $GetCurrencyListResult;
    }

    /**
     * @return ArrayOfCurrency
     */
    public function getGetCurrencyListResult()
    {
      return $this->GetCurrencyListResult;
    }

    /**
     * @param ArrayOfCurrency $GetCurrencyListResult
     * @return \FatTail\AdBook\GetCurrencyListResponse
     */
    public function setGetCurrencyListResult($GetCurrencyListResult)
    {
      $this->GetCurrencyListResult = $GetCurrencyListResult;
      return $this;
    }

}

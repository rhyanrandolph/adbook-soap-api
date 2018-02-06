<?php

namespace FatTail\AdBook;

class Currency extends AdBookConnectEntity
{

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var int $CurrencyID
     */
    protected $CurrencyID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \FatTail\AdBook\Currency
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyID()
    {
      return $this->CurrencyID;
    }

    /**
     * @param int $CurrencyID
     * @return \FatTail\AdBook\Currency
     */
    public function setCurrencyID($CurrencyID)
    {
      $this->CurrencyID = $CurrencyID;
      return $this;
    }

}

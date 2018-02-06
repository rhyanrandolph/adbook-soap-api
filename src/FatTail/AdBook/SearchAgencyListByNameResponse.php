<?php

namespace FatTail\AdBook;

class SearchAgencyListByNameResponse
{

    /**
     * @var ArrayOfAgency $SearchAgencyListByNameResult
     */
    protected $SearchAgencyListByNameResult = null;

    /**
     * @param ArrayOfAgency $SearchAgencyListByNameResult
     */
    public function __construct($SearchAgencyListByNameResult)
    {
      $this->SearchAgencyListByNameResult = $SearchAgencyListByNameResult;
    }

    /**
     * @return ArrayOfAgency
     */
    public function getSearchAgencyListByNameResult()
    {
      return $this->SearchAgencyListByNameResult;
    }

    /**
     * @param ArrayOfAgency $SearchAgencyListByNameResult
     * @return \FatTail\AdBook\SearchAgencyListByNameResponse
     */
    public function setSearchAgencyListByNameResult($SearchAgencyListByNameResult)
    {
      $this->SearchAgencyListByNameResult = $SearchAgencyListByNameResult;
      return $this;
    }

}

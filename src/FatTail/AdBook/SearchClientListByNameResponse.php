<?php

namespace FatTail\AdBook;

class SearchClientListByNameResponse
{

    /**
     * @var ArrayOfClient $SearchClientListByNameResult
     */
    protected $SearchClientListByNameResult = null;

    /**
     * @param ArrayOfClient $SearchClientListByNameResult
     */
    public function __construct($SearchClientListByNameResult)
    {
      $this->SearchClientListByNameResult = $SearchClientListByNameResult;
    }

    /**
     * @return ArrayOfClient
     */
    public function getSearchClientListByNameResult()
    {
      return $this->SearchClientListByNameResult;
    }

    /**
     * @param ArrayOfClient $SearchClientListByNameResult
     * @return \FatTail\AdBook\SearchClientListByNameResponse
     */
    public function setSearchClientListByNameResult($SearchClientListByNameResult)
    {
      $this->SearchClientListByNameResult = $SearchClientListByNameResult;
      return $this;
    }

}

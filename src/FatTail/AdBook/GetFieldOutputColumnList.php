<?php

namespace FatTail\AdBook;

class GetFieldOutputColumnList
{

    /**
     * @var ArrayOfQueryParameter $queryParameters
     */
    protected $queryParameters = null;

    /**
     * @param ArrayOfQueryParameter $queryParameters
     */
    public function __construct($queryParameters)
    {
      $this->queryParameters = $queryParameters;
    }

    /**
     * @return ArrayOfQueryParameter
     */
    public function getQueryParameters()
    {
      return $this->queryParameters;
    }

    /**
     * @param ArrayOfQueryParameter $queryParameters
     * @return \FatTail\AdBook\GetFieldOutputColumnList
     */
    public function setQueryParameters($queryParameters)
    {
      $this->queryParameters = $queryParameters;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetQueryParameterList
{

    /**
     * @var QueryParameterType $queryParameterType
     */
    protected $queryParameterType = null;

    /**
     * @param QueryParameterType $queryParameterType
     */
    public function __construct($queryParameterType)
    {
      $this->queryParameterType = $queryParameterType;
    }

    /**
     * @return QueryParameterType
     */
    public function getQueryParameterType()
    {
      return $this->queryParameterType;
    }

    /**
     * @param QueryParameterType $queryParameterType
     * @return \FatTail\AdBook\GetQueryParameterList
     */
    public function setQueryParameterType($queryParameterType)
    {
      $this->queryParameterType = $queryParameterType;
      return $this;
    }

}

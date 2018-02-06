<?php

namespace FatTail\AdBook;

class GetQueryFilterValueList
{

    /**
     * @var QueryFilterType $queryFilterType
     */
    protected $queryFilterType = null;

    /**
     * @param QueryFilterType $queryFilterType
     */
    public function __construct($queryFilterType)
    {
      $this->queryFilterType = $queryFilterType;
    }

    /**
     * @return QueryFilterType
     */
    public function getQueryFilterType()
    {
      return $this->queryFilterType;
    }

    /**
     * @param QueryFilterType $queryFilterType
     * @return \FatTail\AdBook\GetQueryFilterValueList
     */
    public function setQueryFilterType($queryFilterType)
    {
      $this->queryFilterType = $queryFilterType;
      return $this;
    }

}

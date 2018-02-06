<?php

namespace FatTail\AdBook;

class QueryFilter extends AdBookConnectEntity
{

    /**
     * @var ArrayOfKeyValuePairOfstringstring $FilterDictionary
     */
    protected $FilterDictionary = null;

    /**
     * @var ArrayOflong $FilterIDList
     */
    protected $FilterIDList = null;

    /**
     * @var QueryFilterType $FilterType
     */
    protected $FilterType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfKeyValuePairOfstringstring
     */
    public function getFilterDictionary()
    {
      return $this->FilterDictionary;
    }

    /**
     * @param ArrayOfKeyValuePairOfstringstring $FilterDictionary
     * @return \FatTail\AdBook\QueryFilter
     */
    public function setFilterDictionary($FilterDictionary)
    {
      $this->FilterDictionary = $FilterDictionary;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getFilterIDList()
    {
      return $this->FilterIDList;
    }

    /**
     * @param ArrayOflong $FilterIDList
     * @return \FatTail\AdBook\QueryFilter
     */
    public function setFilterIDList($FilterIDList)
    {
      $this->FilterIDList = $FilterIDList;
      return $this;
    }

    /**
     * @return QueryFilterType
     */
    public function getFilterType()
    {
      return $this->FilterType;
    }

    /**
     * @param QueryFilterType $FilterType
     * @return \FatTail\AdBook\QueryFilter
     */
    public function setFilterType($FilterType)
    {
      $this->FilterType = $FilterType;
      return $this;
    }

}

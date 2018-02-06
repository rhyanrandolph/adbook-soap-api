<?php

namespace FatTail\AdBook;

class QueryFilterValue extends AdBookConnectEntity
{

    /**
     * @var int $FilterID
     */
    protected $FilterID = null;

    /**
     * @var QueryFilterType $FilterType
     */
    protected $FilterType = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getFilterID()
    {
      return $this->FilterID;
    }

    /**
     * @param int $FilterID
     * @return \FatTail\AdBook\QueryFilterValue
     */
    public function setFilterID($FilterID)
    {
      $this->FilterID = $FilterID;
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
     * @return \FatTail\AdBook\QueryFilterValue
     */
    public function setFilterType($FilterType)
    {
      $this->FilterType = $FilterType;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \FatTail\AdBook\QueryFilterValue
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}

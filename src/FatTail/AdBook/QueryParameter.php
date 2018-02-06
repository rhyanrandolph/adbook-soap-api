<?php

namespace FatTail\AdBook;

class QueryParameter extends AdBookConnectEntity
{

    /**
     * @var QueryParameterType $ParameterType
     */
    protected $ParameterType = null;

    /**
     * @var string $ParameterValue
     */
    protected $ParameterValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QueryParameterType
     */
    public function getParameterType()
    {
      return $this->ParameterType;
    }

    /**
     * @param QueryParameterType $ParameterType
     * @return \FatTail\AdBook\QueryParameter
     */
    public function setParameterType($ParameterType)
    {
      $this->ParameterType = $ParameterType;
      return $this;
    }

    /**
     * @return string
     */
    public function getParameterValue()
    {
      return $this->ParameterValue;
    }

    /**
     * @param string $ParameterValue
     * @return \FatTail\AdBook\QueryParameter
     */
    public function setParameterValue($ParameterValue)
    {
      $this->ParameterValue = $ParameterValue;
      return $this;
    }

}

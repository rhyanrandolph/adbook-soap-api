<?php

namespace FatTail\AdBook;

class TargetCriteria extends AdBookConnectEntity
{

    /**
     * @var ComparisonOperators $ComparisionOperator
     */
    protected $ComparisionOperator = null;

    /**
     * @var TargetKey $Key
     */
    protected $Key = null;

    /**
     * @var ArrayOfTargetValue $Values
     */
    protected $Values = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ComparisonOperators
     */
    public function getComparisionOperator()
    {
      return $this->ComparisionOperator;
    }

    /**
     * @param ComparisonOperators $ComparisionOperator
     * @return \FatTail\AdBook\TargetCriteria
     */
    public function setComparisionOperator($ComparisionOperator)
    {
      $this->ComparisionOperator = $ComparisionOperator;
      return $this;
    }

    /**
     * @return TargetKey
     */
    public function getKey()
    {
      return $this->Key;
    }

    /**
     * @param TargetKey $Key
     * @return \FatTail\AdBook\TargetCriteria
     */
    public function setKey($Key)
    {
      $this->Key = $Key;
      return $this;
    }

    /**
     * @return ArrayOfTargetValue
     */
    public function getValues()
    {
      return $this->Values;
    }

    /**
     * @param ArrayOfTargetValue $Values
     * @return \FatTail\AdBook\TargetCriteria
     */
    public function setValues($Values)
    {
      $this->Values = $Values;
      return $this;
    }

}

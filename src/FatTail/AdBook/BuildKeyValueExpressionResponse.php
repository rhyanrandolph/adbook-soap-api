<?php

namespace FatTail\AdBook;

class BuildKeyValueExpressionResponse
{

    /**
     * @var string $BuildKeyValueExpressionResult
     */
    protected $BuildKeyValueExpressionResult = null;

    /**
     * @param string $BuildKeyValueExpressionResult
     */
    public function __construct($BuildKeyValueExpressionResult)
    {
      $this->BuildKeyValueExpressionResult = $BuildKeyValueExpressionResult;
    }

    /**
     * @return string
     */
    public function getBuildKeyValueExpressionResult()
    {
      return $this->BuildKeyValueExpressionResult;
    }

    /**
     * @param string $BuildKeyValueExpressionResult
     * @return \FatTail\AdBook\BuildKeyValueExpressionResponse
     */
    public function setBuildKeyValueExpressionResult($BuildKeyValueExpressionResult)
    {
      $this->BuildKeyValueExpressionResult = $BuildKeyValueExpressionResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class CreateOrderLevelCustomTaskResponse
{

    /**
     * @var CreateOrderLevelCustomTaskResult $CreateOrderLevelCustomTaskResult
     */
    protected $CreateOrderLevelCustomTaskResult = null;

    /**
     * @param CreateOrderLevelCustomTaskResult $CreateOrderLevelCustomTaskResult
     */
    public function __construct($CreateOrderLevelCustomTaskResult)
    {
      $this->CreateOrderLevelCustomTaskResult = $CreateOrderLevelCustomTaskResult;
    }

    /**
     * @return CreateOrderLevelCustomTaskResult
     */
    public function getCreateOrderLevelCustomTaskResult()
    {
      return $this->CreateOrderLevelCustomTaskResult;
    }

    /**
     * @param CreateOrderLevelCustomTaskResult $CreateOrderLevelCustomTaskResult
     * @return \FatTail\AdBook\CreateOrderLevelCustomTaskResponse
     */
    public function setCreateOrderLevelCustomTaskResult($CreateOrderLevelCustomTaskResult)
    {
      $this->CreateOrderLevelCustomTaskResult = $CreateOrderLevelCustomTaskResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class CreateDropLevelCustomTaskResponse
{

    /**
     * @var CreateDropLevelCustomTaskResult $CreateDropLevelCustomTaskResult
     */
    protected $CreateDropLevelCustomTaskResult = null;

    /**
     * @param CreateDropLevelCustomTaskResult $CreateDropLevelCustomTaskResult
     */
    public function __construct($CreateDropLevelCustomTaskResult)
    {
      $this->CreateDropLevelCustomTaskResult = $CreateDropLevelCustomTaskResult;
    }

    /**
     * @return CreateDropLevelCustomTaskResult
     */
    public function getCreateDropLevelCustomTaskResult()
    {
      return $this->CreateDropLevelCustomTaskResult;
    }

    /**
     * @param CreateDropLevelCustomTaskResult $CreateDropLevelCustomTaskResult
     * @return \FatTail\AdBook\CreateDropLevelCustomTaskResponse
     */
    public function setCreateDropLevelCustomTaskResult($CreateDropLevelCustomTaskResult)
    {
      $this->CreateDropLevelCustomTaskResult = $CreateDropLevelCustomTaskResult;
      return $this;
    }

}

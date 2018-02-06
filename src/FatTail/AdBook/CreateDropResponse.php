<?php

namespace FatTail\AdBook;

class CreateDropResponse
{

    /**
     * @var Drop $CreateDropResult
     */
    protected $CreateDropResult = null;

    /**
     * @param Drop $CreateDropResult
     */
    public function __construct($CreateDropResult)
    {
      $this->CreateDropResult = $CreateDropResult;
    }

    /**
     * @return Drop
     */
    public function getCreateDropResult()
    {
      return $this->CreateDropResult;
    }

    /**
     * @param Drop $CreateDropResult
     * @return \FatTail\AdBook\CreateDropResponse
     */
    public function setCreateDropResult($CreateDropResult)
    {
      $this->CreateDropResult = $CreateDropResult;
      return $this;
    }

}

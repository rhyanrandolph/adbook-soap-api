<?php

namespace FatTail\AdBook;

class CreateCreativeResponse
{

    /**
     * @var Creative $CreateCreativeResult
     */
    protected $CreateCreativeResult = null;

    /**
     * @param Creative $CreateCreativeResult
     */
    public function __construct($CreateCreativeResult)
    {
      $this->CreateCreativeResult = $CreateCreativeResult;
    }

    /**
     * @return Creative
     */
    public function getCreateCreativeResult()
    {
      return $this->CreateCreativeResult;
    }

    /**
     * @param Creative $CreateCreativeResult
     * @return \FatTail\AdBook\CreateCreativeResponse
     */
    public function setCreateCreativeResult($CreateCreativeResult)
    {
      $this->CreateCreativeResult = $CreateCreativeResult;
      return $this;
    }

}

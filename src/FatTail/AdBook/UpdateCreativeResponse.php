<?php

namespace FatTail\AdBook;

class UpdateCreativeResponse
{

    /**
     * @var Creative $UpdateCreativeResult
     */
    protected $UpdateCreativeResult = null;

    /**
     * @param Creative $UpdateCreativeResult
     */
    public function __construct($UpdateCreativeResult)
    {
      $this->UpdateCreativeResult = $UpdateCreativeResult;
    }

    /**
     * @return Creative
     */
    public function getUpdateCreativeResult()
    {
      return $this->UpdateCreativeResult;
    }

    /**
     * @param Creative $UpdateCreativeResult
     * @return \FatTail\AdBook\UpdateCreativeResponse
     */
    public function setUpdateCreativeResult($UpdateCreativeResult)
    {
      $this->UpdateCreativeResult = $UpdateCreativeResult;
      return $this;
    }

}

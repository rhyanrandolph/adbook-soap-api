<?php

namespace FatTail\AdBook;

class GetCreativeResponse
{

    /**
     * @var Creative $GetCreativeResult
     */
    protected $GetCreativeResult = null;

    /**
     * @param Creative $GetCreativeResult
     */
    public function __construct($GetCreativeResult)
    {
      $this->GetCreativeResult = $GetCreativeResult;
    }

    /**
     * @return Creative
     */
    public function getGetCreativeResult()
    {
      return $this->GetCreativeResult;
    }

    /**
     * @param Creative $GetCreativeResult
     * @return \FatTail\AdBook\GetCreativeResponse
     */
    public function setGetCreativeResult($GetCreativeResult)
    {
      $this->GetCreativeResult = $GetCreativeResult;
      return $this;
    }

}

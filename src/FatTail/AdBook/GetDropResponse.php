<?php

namespace FatTail\AdBook;

class GetDropResponse
{

    /**
     * @var Drop $GetDropResult
     */
    protected $GetDropResult = null;

    /**
     * @param Drop $GetDropResult
     */
    public function __construct($GetDropResult)
    {
      $this->GetDropResult = $GetDropResult;
    }

    /**
     * @return Drop
     */
    public function getGetDropResult()
    {
      return $this->GetDropResult;
    }

    /**
     * @param Drop $GetDropResult
     * @return \FatTail\AdBook\GetDropResponse
     */
    public function setGetDropResult($GetDropResult)
    {
      $this->GetDropResult = $GetDropResult;
      return $this;
    }

}

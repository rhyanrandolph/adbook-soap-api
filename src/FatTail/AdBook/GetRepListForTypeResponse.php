<?php

namespace FatTail\AdBook;

class GetRepListForTypeResponse
{

    /**
     * @var ArrayOfRep $GetRepListForTypeResult
     */
    protected $GetRepListForTypeResult = null;

    /**
     * @param ArrayOfRep $GetRepListForTypeResult
     */
    public function __construct($GetRepListForTypeResult)
    {
      $this->GetRepListForTypeResult = $GetRepListForTypeResult;
    }

    /**
     * @return ArrayOfRep
     */
    public function getGetRepListForTypeResult()
    {
      return $this->GetRepListForTypeResult;
    }

    /**
     * @param ArrayOfRep $GetRepListForTypeResult
     * @return \FatTail\AdBook\GetRepListForTypeResponse
     */
    public function setGetRepListForTypeResult($GetRepListForTypeResult)
    {
      $this->GetRepListForTypeResult = $GetRepListForTypeResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetRepListResponse
{

    /**
     * @var ArrayOfRep $GetRepListResult
     */
    protected $GetRepListResult = null;

    /**
     * @param ArrayOfRep $GetRepListResult
     */
    public function __construct($GetRepListResult)
    {
      $this->GetRepListResult = $GetRepListResult;
    }

    /**
     * @return ArrayOfRep
     */
    public function getGetRepListResult()
    {
      return $this->GetRepListResult;
    }

    /**
     * @param ArrayOfRep $GetRepListResult
     * @return \FatTail\AdBook\GetRepListResponse
     */
    public function setGetRepListResult($GetRepListResult)
    {
      $this->GetRepListResult = $GetRepListResult;
      return $this;
    }

}

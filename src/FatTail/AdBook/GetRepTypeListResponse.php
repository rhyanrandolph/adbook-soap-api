<?php

namespace FatTail\AdBook;

class GetRepTypeListResponse
{

    /**
     * @var ArrayOfRepType $GetRepTypeListResult
     */
    protected $GetRepTypeListResult = null;

    /**
     * @param ArrayOfRepType $GetRepTypeListResult
     */
    public function __construct($GetRepTypeListResult)
    {
      $this->GetRepTypeListResult = $GetRepTypeListResult;
    }

    /**
     * @return ArrayOfRepType
     */
    public function getGetRepTypeListResult()
    {
      return $this->GetRepTypeListResult;
    }

    /**
     * @param ArrayOfRepType $GetRepTypeListResult
     * @return \FatTail\AdBook\GetRepTypeListResponse
     */
    public function setGetRepTypeListResult($GetRepTypeListResult)
    {
      $this->GetRepTypeListResult = $GetRepTypeListResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetCreativeListResponse
{

    /**
     * @var ArrayOfCreative $GetCreativeListResult
     */
    protected $GetCreativeListResult = null;

    /**
     * @param ArrayOfCreative $GetCreativeListResult
     */
    public function __construct($GetCreativeListResult)
    {
      $this->GetCreativeListResult = $GetCreativeListResult;
    }

    /**
     * @return ArrayOfCreative
     */
    public function getGetCreativeListResult()
    {
      return $this->GetCreativeListResult;
    }

    /**
     * @param ArrayOfCreative $GetCreativeListResult
     * @return \FatTail\AdBook\GetCreativeListResponse
     */
    public function setGetCreativeListResult($GetCreativeListResult)
    {
      $this->GetCreativeListResult = $GetCreativeListResult;
      return $this;
    }

}

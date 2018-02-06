<?php

namespace FatTail\AdBook;

class GetServedByListResponse
{

    /**
     * @var ArrayOfServedBy $GetServedByListResult
     */
    protected $GetServedByListResult = null;

    /**
     * @param ArrayOfServedBy $GetServedByListResult
     */
    public function __construct($GetServedByListResult)
    {
      $this->GetServedByListResult = $GetServedByListResult;
    }

    /**
     * @return ArrayOfServedBy
     */
    public function getGetServedByListResult()
    {
      return $this->GetServedByListResult;
    }

    /**
     * @param ArrayOfServedBy $GetServedByListResult
     * @return \FatTail\AdBook\GetServedByListResponse
     */
    public function setGetServedByListResult($GetServedByListResult)
    {
      $this->GetServedByListResult = $GetServedByListResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetQueryFilterValueListResponse
{

    /**
     * @var ArrayOfQueryFilterValue $GetQueryFilterValueListResult
     */
    protected $GetQueryFilterValueListResult = null;

    /**
     * @param ArrayOfQueryFilterValue $GetQueryFilterValueListResult
     */
    public function __construct($GetQueryFilterValueListResult)
    {
      $this->GetQueryFilterValueListResult = $GetQueryFilterValueListResult;
    }

    /**
     * @return ArrayOfQueryFilterValue
     */
    public function getGetQueryFilterValueListResult()
    {
      return $this->GetQueryFilterValueListResult;
    }

    /**
     * @param ArrayOfQueryFilterValue $GetQueryFilterValueListResult
     * @return \FatTail\AdBook\GetQueryFilterValueListResponse
     */
    public function setGetQueryFilterValueListResult($GetQueryFilterValueListResult)
    {
      $this->GetQueryFilterValueListResult = $GetQueryFilterValueListResult;
      return $this;
    }

}

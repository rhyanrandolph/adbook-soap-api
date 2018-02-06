<?php

namespace FatTail\AdBook;

class GetQueryParameterListResponse
{

    /**
     * @var ArrayOfQueryParameter $GetQueryParameterListResult
     */
    protected $GetQueryParameterListResult = null;

    /**
     * @param ArrayOfQueryParameter $GetQueryParameterListResult
     */
    public function __construct($GetQueryParameterListResult)
    {
      $this->GetQueryParameterListResult = $GetQueryParameterListResult;
    }

    /**
     * @return ArrayOfQueryParameter
     */
    public function getGetQueryParameterListResult()
    {
      return $this->GetQueryParameterListResult;
    }

    /**
     * @param ArrayOfQueryParameter $GetQueryParameterListResult
     * @return \FatTail\AdBook\GetQueryParameterListResponse
     */
    public function setGetQueryParameterListResult($GetQueryParameterListResult)
    {
      $this->GetQueryParameterListResult = $GetQueryParameterListResult;
      return $this;
    }

}

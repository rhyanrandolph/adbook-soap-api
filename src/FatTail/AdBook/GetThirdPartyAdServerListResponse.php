<?php

namespace FatTail\AdBook;

class GetThirdPartyAdServerListResponse
{

    /**
     * @var ArrayOfThirdPartyAdServer $GetThirdPartyAdServerListResult
     */
    protected $GetThirdPartyAdServerListResult = null;

    /**
     * @param ArrayOfThirdPartyAdServer $GetThirdPartyAdServerListResult
     */
    public function __construct($GetThirdPartyAdServerListResult)
    {
      $this->GetThirdPartyAdServerListResult = $GetThirdPartyAdServerListResult;
    }

    /**
     * @return ArrayOfThirdPartyAdServer
     */
    public function getGetThirdPartyAdServerListResult()
    {
      return $this->GetThirdPartyAdServerListResult;
    }

    /**
     * @param ArrayOfThirdPartyAdServer $GetThirdPartyAdServerListResult
     * @return \FatTail\AdBook\GetThirdPartyAdServerListResponse
     */
    public function setGetThirdPartyAdServerListResult($GetThirdPartyAdServerListResult)
    {
      $this->GetThirdPartyAdServerListResult = $GetThirdPartyAdServerListResult;
      return $this;
    }

}

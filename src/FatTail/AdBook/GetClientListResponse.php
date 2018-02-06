<?php

namespace FatTail\AdBook;

class GetClientListResponse
{

    /**
     * @var ArrayOfClient $GetClientListResult
     */
    protected $GetClientListResult = null;

    /**
     * @param ArrayOfClient $GetClientListResult
     */
    public function __construct($GetClientListResult)
    {
      $this->GetClientListResult = $GetClientListResult;
    }

    /**
     * @return ArrayOfClient
     */
    public function getGetClientListResult()
    {
      return $this->GetClientListResult;
    }

    /**
     * @param ArrayOfClient $GetClientListResult
     * @return \FatTail\AdBook\GetClientListResponse
     */
    public function setGetClientListResult($GetClientListResult)
    {
      $this->GetClientListResult = $GetClientListResult;
      return $this;
    }

}

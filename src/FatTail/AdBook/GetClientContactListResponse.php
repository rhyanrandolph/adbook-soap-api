<?php

namespace FatTail\AdBook;

class GetClientContactListResponse
{

    /**
     * @var ArrayOfClientContact $GetClientContactListResult
     */
    protected $GetClientContactListResult = null;

    /**
     * @param ArrayOfClientContact $GetClientContactListResult
     */
    public function __construct($GetClientContactListResult)
    {
      $this->GetClientContactListResult = $GetClientContactListResult;
    }

    /**
     * @return ArrayOfClientContact
     */
    public function getGetClientContactListResult()
    {
      return $this->GetClientContactListResult;
    }

    /**
     * @param ArrayOfClientContact $GetClientContactListResult
     * @return \FatTail\AdBook\GetClientContactListResponse
     */
    public function setGetClientContactListResult($GetClientContactListResult)
    {
      $this->GetClientContactListResult = $GetClientContactListResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetPublisherContactListForCustomTasksResponse
{

    /**
     * @var ArrayOfPublisherContact $GetPublisherContactListForCustomTasksResult
     */
    protected $GetPublisherContactListForCustomTasksResult = null;

    /**
     * @param ArrayOfPublisherContact $GetPublisherContactListForCustomTasksResult
     */
    public function __construct($GetPublisherContactListForCustomTasksResult)
    {
      $this->GetPublisherContactListForCustomTasksResult = $GetPublisherContactListForCustomTasksResult;
    }

    /**
     * @return ArrayOfPublisherContact
     */
    public function getGetPublisherContactListForCustomTasksResult()
    {
      return $this->GetPublisherContactListForCustomTasksResult;
    }

    /**
     * @param ArrayOfPublisherContact $GetPublisherContactListForCustomTasksResult
     * @return \FatTail\AdBook\GetPublisherContactListForCustomTasksResponse
     */
    public function setGetPublisherContactListForCustomTasksResult($GetPublisherContactListForCustomTasksResult)
    {
      $this->GetPublisherContactListForCustomTasksResult = $GetPublisherContactListForCustomTasksResult;
      return $this;
    }

}

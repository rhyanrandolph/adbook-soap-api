<?php

namespace FatTail\AdBook;

class DeleteDropsResponse
{

    /**
     * @var ArrayOfDropDeleteResult $DeleteDropsResult
     */
    protected $DeleteDropsResult = null;

    /**
     * @param ArrayOfDropDeleteResult $DeleteDropsResult
     */
    public function __construct($DeleteDropsResult)
    {
      $this->DeleteDropsResult = $DeleteDropsResult;
    }

    /**
     * @return ArrayOfDropDeleteResult
     */
    public function getDeleteDropsResult()
    {
      return $this->DeleteDropsResult;
    }

    /**
     * @param ArrayOfDropDeleteResult $DeleteDropsResult
     * @return \FatTail\AdBook\DeleteDropsResponse
     */
    public function setDeleteDropsResult($DeleteDropsResult)
    {
      $this->DeleteDropsResult = $DeleteDropsResult;
      return $this;
    }

}

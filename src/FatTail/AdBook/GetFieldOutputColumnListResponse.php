<?php

namespace FatTail\AdBook;

class GetFieldOutputColumnListResponse
{

    /**
     * @var ArrayOfFieldOutputColumn $GetFieldOutputColumnListResult
     */
    protected $GetFieldOutputColumnListResult = null;

    /**
     * @param ArrayOfFieldOutputColumn $GetFieldOutputColumnListResult
     */
    public function __construct($GetFieldOutputColumnListResult)
    {
      $this->GetFieldOutputColumnListResult = $GetFieldOutputColumnListResult;
    }

    /**
     * @return ArrayOfFieldOutputColumn
     */
    public function getGetFieldOutputColumnListResult()
    {
      return $this->GetFieldOutputColumnListResult;
    }

    /**
     * @param ArrayOfFieldOutputColumn $GetFieldOutputColumnListResult
     * @return \FatTail\AdBook\GetFieldOutputColumnListResponse
     */
    public function setGetFieldOutputColumnListResult($GetFieldOutputColumnListResult)
    {
      $this->GetFieldOutputColumnListResult = $GetFieldOutputColumnListResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class DeletePackageComponentDropsResponse
{

    /**
     * @var ArrayOfPackageComponentDropDeleteResult $DeletePackageComponentDropsResult
     */
    protected $DeletePackageComponentDropsResult = null;

    /**
     * @param ArrayOfPackageComponentDropDeleteResult $DeletePackageComponentDropsResult
     */
    public function __construct($DeletePackageComponentDropsResult)
    {
      $this->DeletePackageComponentDropsResult = $DeletePackageComponentDropsResult;
    }

    /**
     * @return ArrayOfPackageComponentDropDeleteResult
     */
    public function getDeletePackageComponentDropsResult()
    {
      return $this->DeletePackageComponentDropsResult;
    }

    /**
     * @param ArrayOfPackageComponentDropDeleteResult $DeletePackageComponentDropsResult
     * @return \FatTail\AdBook\DeletePackageComponentDropsResponse
     */
    public function setDeletePackageComponentDropsResult($DeletePackageComponentDropsResult)
    {
      $this->DeletePackageComponentDropsResult = $DeletePackageComponentDropsResult;
      return $this;
    }

}

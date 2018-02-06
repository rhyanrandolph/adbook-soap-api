<?php

namespace FatTail\AdBook;

class GetAccountManagerRepTypeAssociationByRepTypeID
{

    /**
     * @var ArrayOflong $repTypeIDsList
     */
    protected $repTypeIDsList = null;

    /**
     * @param ArrayOflong $repTypeIDsList
     */
    public function __construct($repTypeIDsList)
    {
      $this->repTypeIDsList = $repTypeIDsList;
    }

    /**
     * @return ArrayOflong
     */
    public function getRepTypeIDsList()
    {
      return $this->repTypeIDsList;
    }

    /**
     * @param ArrayOflong $repTypeIDsList
     * @return \FatTail\AdBook\GetAccountManagerRepTypeAssociationByRepTypeID
     */
    public function setRepTypeIDsList($repTypeIDsList)
    {
      $this->repTypeIDsList = $repTypeIDsList;
      return $this;
    }

}

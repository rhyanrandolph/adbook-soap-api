<?php

namespace FatTail\AdBook;

class GetMediaElementProductList
{

    /**
     * @var int $mediaElementID
     */
    protected $mediaElementID = null;

    /**
     * @param int $mediaElementID
     */
    public function __construct($mediaElementID)
    {
      $this->mediaElementID = $mediaElementID;
    }

    /**
     * @return int
     */
    public function getMediaElementID()
    {
      return $this->mediaElementID;
    }

    /**
     * @param int $mediaElementID
     * @return \FatTail\AdBook\GetMediaElementProductList
     */
    public function setMediaElementID($mediaElementID)
    {
      $this->mediaElementID = $mediaElementID;
      return $this;
    }

}

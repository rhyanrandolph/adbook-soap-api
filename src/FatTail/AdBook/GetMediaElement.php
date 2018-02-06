<?php

namespace FatTail\AdBook;

class GetMediaElement
{

    /**
     * @var int $mediaElementId
     */
    protected $mediaElementId = null;

    /**
     * @param int $mediaElementId
     */
    public function __construct($mediaElementId)
    {
      $this->mediaElementId = $mediaElementId;
    }

    /**
     * @return int
     */
    public function getMediaElementId()
    {
      return $this->mediaElementId;
    }

    /**
     * @param int $mediaElementId
     * @return \FatTail\AdBook\GetMediaElement
     */
    public function setMediaElementId($mediaElementId)
    {
      $this->mediaElementId = $mediaElementId;
      return $this;
    }

}

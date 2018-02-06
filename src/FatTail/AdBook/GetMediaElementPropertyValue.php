<?php

namespace FatTail\AdBook;

class GetMediaElementPropertyValue
{

    /**
     * @var int $mediaElementId
     */
    protected $mediaElementId = null;

    /**
     * @var int $mediaElementPropertyId
     */
    protected $mediaElementPropertyId = null;

    /**
     * @param int $mediaElementId
     * @param int $mediaElementPropertyId
     */
    public function __construct($mediaElementId, $mediaElementPropertyId)
    {
      $this->mediaElementId = $mediaElementId;
      $this->mediaElementPropertyId = $mediaElementPropertyId;
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
     * @return \FatTail\AdBook\GetMediaElementPropertyValue
     */
    public function setMediaElementId($mediaElementId)
    {
      $this->mediaElementId = $mediaElementId;
      return $this;
    }

    /**
     * @return int
     */
    public function getMediaElementPropertyId()
    {
      return $this->mediaElementPropertyId;
    }

    /**
     * @param int $mediaElementPropertyId
     * @return \FatTail\AdBook\GetMediaElementPropertyValue
     */
    public function setMediaElementPropertyId($mediaElementPropertyId)
    {
      $this->mediaElementPropertyId = $mediaElementPropertyId;
      return $this;
    }

}

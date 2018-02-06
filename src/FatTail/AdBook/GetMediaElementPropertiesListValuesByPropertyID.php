<?php

namespace FatTail\AdBook;

class GetMediaElementPropertiesListValuesByPropertyID
{

    /**
     * @var int $mediaElementPropertyId
     */
    protected $mediaElementPropertyId = null;

    /**
     * @param int $mediaElementPropertyId
     */
    public function __construct($mediaElementPropertyId)
    {
      $this->mediaElementPropertyId = $mediaElementPropertyId;
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
     * @return \FatTail\AdBook\GetMediaElementPropertiesListValuesByPropertyID
     */
    public function setMediaElementPropertyId($mediaElementPropertyId)
    {
      $this->mediaElementPropertyId = $mediaElementPropertyId;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetMediaElementListForParent
{

    /**
     * @var int $mediaElementParentId
     */
    protected $mediaElementParentId = null;

    /**
     * @var MediaType $mediaTypeFilter
     */
    protected $mediaTypeFilter = null;

    /**
     * @param int $mediaElementParentId
     * @param MediaType $mediaTypeFilter
     */
    public function __construct($mediaElementParentId, $mediaTypeFilter)
    {
      $this->mediaElementParentId = $mediaElementParentId;
      $this->mediaTypeFilter = $mediaTypeFilter;
    }

    /**
     * @return int
     */
    public function getMediaElementParentId()
    {
      return $this->mediaElementParentId;
    }

    /**
     * @param int $mediaElementParentId
     * @return \FatTail\AdBook\GetMediaElementListForParent
     */
    public function setMediaElementParentId($mediaElementParentId)
    {
      $this->mediaElementParentId = $mediaElementParentId;
      return $this;
    }

    /**
     * @return MediaType
     */
    public function getMediaTypeFilter()
    {
      return $this->mediaTypeFilter;
    }

    /**
     * @param MediaType $mediaTypeFilter
     * @return \FatTail\AdBook\GetMediaElementListForParent
     */
    public function setMediaTypeFilter($mediaTypeFilter)
    {
      $this->mediaTypeFilter = $mediaTypeFilter;
      return $this;
    }

}

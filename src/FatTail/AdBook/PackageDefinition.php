<?php

namespace FatTail\AdBook;

class PackageDefinition extends AdBookConnectEntity
{

    /**
     * @var int $Impressions
     */
    protected $Impressions = null;

    /**
     * @var int $MediaElementID
     */
    protected $MediaElementID = null;

    /**
     * @var MediaType $MediaType
     */
    protected $MediaType = null;

    /**
     * @var int $NewsletterMax
     */
    protected $NewsletterMax = null;

    /**
     * @var int $NewsletterMin
     */
    protected $NewsletterMin = null;

    /**
     * @var string $Path
     */
    protected $Path = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getImpressions()
    {
      return $this->Impressions;
    }

    /**
     * @param int $Impressions
     * @return \FatTail\AdBook\PackageDefinition
     */
    public function setImpressions($Impressions)
    {
      $this->Impressions = $Impressions;
      return $this;
    }

    /**
     * @return int
     */
    public function getMediaElementID()
    {
      return $this->MediaElementID;
    }

    /**
     * @param int $MediaElementID
     * @return \FatTail\AdBook\PackageDefinition
     */
    public function setMediaElementID($MediaElementID)
    {
      $this->MediaElementID = $MediaElementID;
      return $this;
    }

    /**
     * @return MediaType
     */
    public function getMediaType()
    {
      return $this->MediaType;
    }

    /**
     * @param MediaType $MediaType
     * @return \FatTail\AdBook\PackageDefinition
     */
    public function setMediaType($MediaType)
    {
      $this->MediaType = $MediaType;
      return $this;
    }

    /**
     * @return int
     */
    public function getNewsletterMax()
    {
      return $this->NewsletterMax;
    }

    /**
     * @param int $NewsletterMax
     * @return \FatTail\AdBook\PackageDefinition
     */
    public function setNewsletterMax($NewsletterMax)
    {
      $this->NewsletterMax = $NewsletterMax;
      return $this;
    }

    /**
     * @return int
     */
    public function getNewsletterMin()
    {
      return $this->NewsletterMin;
    }

    /**
     * @param int $NewsletterMin
     * @return \FatTail\AdBook\PackageDefinition
     */
    public function setNewsletterMin($NewsletterMin)
    {
      $this->NewsletterMin = $NewsletterMin;
      return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
      return $this->Path;
    }

    /**
     * @param string $Path
     * @return \FatTail\AdBook\PackageDefinition
     */
    public function setPath($Path)
    {
      $this->Path = $Path;
      return $this;
    }

}

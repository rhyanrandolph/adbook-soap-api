<?php

namespace FatTail\AdBook;

class GetPositionPricingForRateCardByPosition
{

    /**
     * @var int $rateCardNameID
     */
    protected $rateCardNameID = null;

    /**
     * @var int $mediaElementID
     */
    protected $mediaElementID = null;

    /**
     * @param int $rateCardNameID
     * @param int $mediaElementID
     */
    public function __construct($rateCardNameID, $mediaElementID)
    {
      $this->rateCardNameID = $rateCardNameID;
      $this->mediaElementID = $mediaElementID;
    }

    /**
     * @return int
     */
    public function getRateCardNameID()
    {
      return $this->rateCardNameID;
    }

    /**
     * @param int $rateCardNameID
     * @return \FatTail\AdBook\GetPositionPricingForRateCardByPosition
     */
    public function setRateCardNameID($rateCardNameID)
    {
      $this->rateCardNameID = $rateCardNameID;
      return $this;
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
     * @return \FatTail\AdBook\GetPositionPricingForRateCardByPosition
     */
    public function setMediaElementID($mediaElementID)
    {
      $this->mediaElementID = $mediaElementID;
      return $this;
    }

}

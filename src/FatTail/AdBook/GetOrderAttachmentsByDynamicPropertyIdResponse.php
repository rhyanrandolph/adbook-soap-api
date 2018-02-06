<?php

namespace FatTail\AdBook;

class GetOrderAttachmentsByDynamicPropertyIdResponse
{

    /**
     * @var ArrayOfOrderAttachment $GetOrderAttachmentsByDynamicPropertyIdResult
     */
    protected $GetOrderAttachmentsByDynamicPropertyIdResult = null;

    /**
     * @param ArrayOfOrderAttachment $GetOrderAttachmentsByDynamicPropertyIdResult
     */
    public function __construct($GetOrderAttachmentsByDynamicPropertyIdResult)
    {
      $this->GetOrderAttachmentsByDynamicPropertyIdResult = $GetOrderAttachmentsByDynamicPropertyIdResult;
    }

    /**
     * @return ArrayOfOrderAttachment
     */
    public function getGetOrderAttachmentsByDynamicPropertyIdResult()
    {
      return $this->GetOrderAttachmentsByDynamicPropertyIdResult;
    }

    /**
     * @param ArrayOfOrderAttachment $GetOrderAttachmentsByDynamicPropertyIdResult
     * @return \FatTail\AdBook\GetOrderAttachmentsByDynamicPropertyIdResponse
     */
    public function setGetOrderAttachmentsByDynamicPropertyIdResult($GetOrderAttachmentsByDynamicPropertyIdResult)
    {
      $this->GetOrderAttachmentsByDynamicPropertyIdResult = $GetOrderAttachmentsByDynamicPropertyIdResult;
      return $this;
    }

}

<?php

namespace FatTail\AdBook;

class GetOrderAttachmentListResponse
{

    /**
     * @var ArrayOfOrderAttachment $GetOrderAttachmentListResult
     */
    protected $GetOrderAttachmentListResult = null;

    /**
     * @param ArrayOfOrderAttachment $GetOrderAttachmentListResult
     */
    public function __construct($GetOrderAttachmentListResult)
    {
      $this->GetOrderAttachmentListResult = $GetOrderAttachmentListResult;
    }

    /**
     * @return ArrayOfOrderAttachment
     */
    public function getGetOrderAttachmentListResult()
    {
      return $this->GetOrderAttachmentListResult;
    }

    /**
     * @param ArrayOfOrderAttachment $GetOrderAttachmentListResult
     * @return \FatTail\AdBook\GetOrderAttachmentListResponse
     */
    public function setGetOrderAttachmentListResult($GetOrderAttachmentListResult)
    {
      $this->GetOrderAttachmentListResult = $GetOrderAttachmentListResult;
      return $this;
    }

}

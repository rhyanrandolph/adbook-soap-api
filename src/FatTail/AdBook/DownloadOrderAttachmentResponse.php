<?php

namespace FatTail\AdBook;

class DownloadOrderAttachmentResponse
{

    /**
     * @var ArrayOfOrderAttachment $DownloadOrderAttachmentResult
     */
    protected $DownloadOrderAttachmentResult = null;

    /**
     * @param ArrayOfOrderAttachment $DownloadOrderAttachmentResult
     */
    public function __construct($DownloadOrderAttachmentResult)
    {
      $this->DownloadOrderAttachmentResult = $DownloadOrderAttachmentResult;
    }

    /**
     * @return ArrayOfOrderAttachment
     */
    public function getDownloadOrderAttachmentResult()
    {
      return $this->DownloadOrderAttachmentResult;
    }

    /**
     * @param ArrayOfOrderAttachment $DownloadOrderAttachmentResult
     * @return \FatTail\AdBook\DownloadOrderAttachmentResponse
     */
    public function setDownloadOrderAttachmentResult($DownloadOrderAttachmentResult)
    {
      $this->DownloadOrderAttachmentResult = $DownloadOrderAttachmentResult;
      return $this;
    }

}

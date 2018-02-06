<?php

namespace FatTail\AdBook;

class UploadOrderAttachment
{

    /**
     * @var OrderAttachment $attachment
     */
    protected $attachment = null;

    /**
     * @param OrderAttachment $attachment
     */
    public function __construct($attachment)
    {
      $this->attachment = $attachment;
    }

    /**
     * @return OrderAttachment
     */
    public function getAttachment()
    {
      return $this->attachment;
    }

    /**
     * @param OrderAttachment $attachment
     * @return \FatTail\AdBook\UploadOrderAttachment
     */
    public function setAttachment($attachment)
    {
      $this->attachment = $attachment;
      return $this;
    }

}

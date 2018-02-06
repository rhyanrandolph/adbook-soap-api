<?php

namespace FatTail\AdBook;

class OrderAttachment extends AdBookConnectEntity
{

    /**
     * @var string $Content
     */
    protected $Content = null;

    /**
     * @var string $Filename
     */
    protected $Filename = null;

    /**
     * @var int $OrderAttachmentID
     */
    protected $OrderAttachmentID = null;

    /**
     * @var int $OrderID
     */
    protected $OrderID = null;

    /**
     * @var int $DynamicPropertyId
     */
    protected $DynamicPropertyId = null;

    /**
     * @param int $OrderID
     */
    public function __construct($OrderID)
    {
      $this->OrderID = $OrderID;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param string $Content
     * @return \FatTail\AdBook\OrderAttachment
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return string
     */
    public function getFilename()
    {
      return $this->Filename;
    }

    /**
     * @param string $Filename
     * @return \FatTail\AdBook\OrderAttachment
     */
    public function setFilename($Filename)
    {
      $this->Filename = $Filename;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderAttachmentID()
    {
      return $this->OrderAttachmentID;
    }

    /**
     * @param int $OrderAttachmentID
     * @return \FatTail\AdBook\OrderAttachment
     */
    public function setOrderAttachmentID($OrderAttachmentID)
    {
      $this->OrderAttachmentID = $OrderAttachmentID;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderID()
    {
      return $this->OrderID;
    }

    /**
     * @param int $OrderID
     * @return \FatTail\AdBook\OrderAttachment
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return int
     */
    public function getDynamicPropertyId()
    {
      return $this->DynamicPropertyId;
    }

    /**
     * @param int $DynamicPropertyId
     * @return \FatTail\AdBook\OrderAttachment
     */
    public function setDynamicPropertyId($DynamicPropertyId)
    {
      $this->DynamicPropertyId = $DynamicPropertyId;
      return $this;
    }

}

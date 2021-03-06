<?php

namespace FatTail\AdBook;

class OrderCustomTask extends AdBookConnectEntity
{

    /**
     * @var int $CustomTaskID
     */
    protected $CustomTaskID = null;

    /**
     * @var string $CustomTaskName
     */
    protected $CustomTaskName = null;

    /**
     * @var string $CustomTaskNotes
     */
    protected $CustomTaskNotes = null;

    /**
     * @var ArrayOflong $EmailRecipientContactIDs
     */
    protected $EmailRecipientContactIDs = null;

    /**
     * @var ArrayOfstring $EmailRecipientEmailAddresses
     */
    protected $EmailRecipientEmailAddresses = null;

    /**
     * @var ArrayOflong $EmailRecipientRepTypeIDs
     */
    protected $EmailRecipientRepTypeIDs = null;

    /**
     * @var int $OrderID
     */
    protected $OrderID = null;

    /**
     * @var ArrayOflong $OwnerContactIDs
     */
    protected $OwnerContactIDs = null;

    /**
     * @var ArrayOflong $OwnerRepTypeIDs
     */
    protected $OwnerRepTypeIDs = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCustomTaskID()
    {
      return $this->CustomTaskID;
    }

    /**
     * @param int $CustomTaskID
     * @return \FatTail\AdBook\OrderCustomTask
     */
    public function setCustomTaskID($CustomTaskID)
    {
      $this->CustomTaskID = $CustomTaskID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomTaskName()
    {
      return $this->CustomTaskName;
    }

    /**
     * @param string $CustomTaskName
     * @return \FatTail\AdBook\OrderCustomTask
     */
    public function setCustomTaskName($CustomTaskName)
    {
      $this->CustomTaskName = $CustomTaskName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomTaskNotes()
    {
      return $this->CustomTaskNotes;
    }

    /**
     * @param string $CustomTaskNotes
     * @return \FatTail\AdBook\OrderCustomTask
     */
    public function setCustomTaskNotes($CustomTaskNotes)
    {
      $this->CustomTaskNotes = $CustomTaskNotes;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getEmailRecipientContactIDs()
    {
      return $this->EmailRecipientContactIDs;
    }

    /**
     * @param ArrayOflong $EmailRecipientContactIDs
     * @return \FatTail\AdBook\OrderCustomTask
     */
    public function setEmailRecipientContactIDs($EmailRecipientContactIDs)
    {
      $this->EmailRecipientContactIDs = $EmailRecipientContactIDs;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getEmailRecipientEmailAddresses()
    {
      return $this->EmailRecipientEmailAddresses;
    }

    /**
     * @param ArrayOfstring $EmailRecipientEmailAddresses
     * @return \FatTail\AdBook\OrderCustomTask
     */
    public function setEmailRecipientEmailAddresses($EmailRecipientEmailAddresses)
    {
      $this->EmailRecipientEmailAddresses = $EmailRecipientEmailAddresses;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getEmailRecipientRepTypeIDs()
    {
      return $this->EmailRecipientRepTypeIDs;
    }

    /**
     * @param ArrayOflong $EmailRecipientRepTypeIDs
     * @return \FatTail\AdBook\OrderCustomTask
     */
    public function setEmailRecipientRepTypeIDs($EmailRecipientRepTypeIDs)
    {
      $this->EmailRecipientRepTypeIDs = $EmailRecipientRepTypeIDs;
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
     * @return \FatTail\AdBook\OrderCustomTask
     */
    public function setOrderID($OrderID)
    {
      $this->OrderID = $OrderID;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getOwnerContactIDs()
    {
      return $this->OwnerContactIDs;
    }

    /**
     * @param ArrayOflong $OwnerContactIDs
     * @return \FatTail\AdBook\OrderCustomTask
     */
    public function setOwnerContactIDs($OwnerContactIDs)
    {
      $this->OwnerContactIDs = $OwnerContactIDs;
      return $this;
    }

    /**
     * @return ArrayOflong
     */
    public function getOwnerRepTypeIDs()
    {
      return $this->OwnerRepTypeIDs;
    }

    /**
     * @param ArrayOflong $OwnerRepTypeIDs
     * @return \FatTail\AdBook\OrderCustomTask
     */
    public function setOwnerRepTypeIDs($OwnerRepTypeIDs)
    {
      $this->OwnerRepTypeIDs = $OwnerRepTypeIDs;
      return $this;
    }

}

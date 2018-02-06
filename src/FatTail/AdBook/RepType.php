<?php

namespace FatTail\AdBook;

class RepType extends AdBookConnectEntity
{

    /**
     * @var string $RepTypeCode
     */
    protected $RepTypeCode = null;

    /**
     * @var int $RepTypeID
     */
    protected $RepTypeID = null;

    /**
     * @var string $RepTypeName
     */
    protected $RepTypeName = null;

    /**
     * @var boolean $IsAccountManagerRepType
     */
    protected $IsAccountManagerRepType = null;

    /**
     * @var boolean $IsOrderManagerRepType
     */
    protected $IsOrderManagerRepType = null;

    /**
     * @var int $AccountManagerRepTypeId
     */
    protected $AccountManagerRepTypeId = null;

    /**
     * @var boolean $CustomTaskEnabled
     */
    protected $CustomTaskEnabled = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getRepTypeCode()
    {
      return $this->RepTypeCode;
    }

    /**
     * @param string $RepTypeCode
     * @return \FatTail\AdBook\RepType
     */
    public function setRepTypeCode($RepTypeCode)
    {
      $this->RepTypeCode = $RepTypeCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getRepTypeID()
    {
      return $this->RepTypeID;
    }

    /**
     * @param int $RepTypeID
     * @return \FatTail\AdBook\RepType
     */
    public function setRepTypeID($RepTypeID)
    {
      $this->RepTypeID = $RepTypeID;
      return $this;
    }

    /**
     * @return string
     */
    public function getRepTypeName()
    {
      return $this->RepTypeName;
    }

    /**
     * @param string $RepTypeName
     * @return \FatTail\AdBook\RepType
     */
    public function setRepTypeName($RepTypeName)
    {
      $this->RepTypeName = $RepTypeName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAccountManagerRepType()
    {
      return $this->IsAccountManagerRepType;
    }

    /**
     * @param boolean $IsAccountManagerRepType
     * @return \FatTail\AdBook\RepType
     */
    public function setIsAccountManagerRepType($IsAccountManagerRepType)
    {
      $this->IsAccountManagerRepType = $IsAccountManagerRepType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsOrderManagerRepType()
    {
      return $this->IsOrderManagerRepType;
    }

    /**
     * @param boolean $IsOrderManagerRepType
     * @return \FatTail\AdBook\RepType
     */
    public function setIsOrderManagerRepType($IsOrderManagerRepType)
    {
      $this->IsOrderManagerRepType = $IsOrderManagerRepType;
      return $this;
    }

    /**
     * @return int
     */
    public function getAccountManagerRepTypeId()
    {
      return $this->AccountManagerRepTypeId;
    }

    /**
     * @param int $AccountManagerRepTypeId
     * @return \FatTail\AdBook\RepType
     */
    public function setAccountManagerRepTypeId($AccountManagerRepTypeId)
    {
      $this->AccountManagerRepTypeId = $AccountManagerRepTypeId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCustomTaskEnabled()
    {
      return $this->CustomTaskEnabled;
    }

    /**
     * @param boolean $CustomTaskEnabled
     * @return \FatTail\AdBook\RepType
     */
    public function setCustomTaskEnabled($CustomTaskEnabled)
    {
      $this->CustomTaskEnabled = $CustomTaskEnabled;
      return $this;
    }

}

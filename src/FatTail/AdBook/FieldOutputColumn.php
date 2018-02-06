<?php

namespace FatTail\AdBook;

class FieldOutputColumn extends AdBookConnectEntity
{

    /**
     * @var FieldOutputColumnLevel $DetailLevel
     */
    protected $DetailLevel = null;

    /**
     * @var string $FieldOutputColumnName
     */
    protected $FieldOutputColumnName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FieldOutputColumnLevel
     */
    public function getDetailLevel()
    {
      return $this->DetailLevel;
    }

    /**
     * @param FieldOutputColumnLevel $DetailLevel
     * @return \FatTail\AdBook\FieldOutputColumn
     */
    public function setDetailLevel($DetailLevel)
    {
      $this->DetailLevel = $DetailLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getFieldOutputColumnName()
    {
      return $this->FieldOutputColumnName;
    }

    /**
     * @param string $FieldOutputColumnName
     * @return \FatTail\AdBook\FieldOutputColumn
     */
    public function setFieldOutputColumnName($FieldOutputColumnName)
    {
      $this->FieldOutputColumnName = $FieldOutputColumnName;
      return $this;
    }

}

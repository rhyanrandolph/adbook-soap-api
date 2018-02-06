<?php

namespace FatTail\AdBook;

class AdServerEntityProperty extends AdBookConnectEntity
{

    /**
     * @var string $AdServerEntityPropertyName
     */
    protected $AdServerEntityPropertyName = null;

    /**
     * @var string $AdServerEntityPropertyValue
     */
    protected $AdServerEntityPropertyValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAdServerEntityPropertyName()
    {
      return $this->AdServerEntityPropertyName;
    }

    /**
     * @param string $AdServerEntityPropertyName
     * @return \FatTail\AdBook\AdServerEntityProperty
     */
    public function setAdServerEntityPropertyName($AdServerEntityPropertyName)
    {
      $this->AdServerEntityPropertyName = $AdServerEntityPropertyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdServerEntityPropertyValue()
    {
      return $this->AdServerEntityPropertyValue;
    }

    /**
     * @param string $AdServerEntityPropertyValue
     * @return \FatTail\AdBook\AdServerEntityProperty
     */
    public function setAdServerEntityPropertyValue($AdServerEntityPropertyValue)
    {
      $this->AdServerEntityPropertyValue = $AdServerEntityPropertyValue;
      return $this;
    }

}

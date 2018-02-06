<?php

namespace FatTail\AdBook;

class GetClientContactResponse
{

    /**
     * @var ClientContact $GetClientContactResult
     */
    protected $GetClientContactResult = null;

    /**
     * @param ClientContact $GetClientContactResult
     */
    public function __construct($GetClientContactResult)
    {
      $this->GetClientContactResult = $GetClientContactResult;
    }

    /**
     * @return ClientContact
     */
    public function getGetClientContactResult()
    {
      return $this->GetClientContactResult;
    }

    /**
     * @param ClientContact $GetClientContactResult
     * @return \FatTail\AdBook\GetClientContactResponse
     */
    public function setGetClientContactResult($GetClientContactResult)
    {
      $this->GetClientContactResult = $GetClientContactResult;
      return $this;
    }

}

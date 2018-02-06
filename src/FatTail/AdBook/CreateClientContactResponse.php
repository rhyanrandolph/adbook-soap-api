<?php

namespace FatTail\AdBook;

class CreateClientContactResponse
{

    /**
     * @var ClientContact $CreateClientContactResult
     */
    protected $CreateClientContactResult = null;

    /**
     * @param ClientContact $CreateClientContactResult
     */
    public function __construct($CreateClientContactResult)
    {
      $this->CreateClientContactResult = $CreateClientContactResult;
    }

    /**
     * @return ClientContact
     */
    public function getCreateClientContactResult()
    {
      return $this->CreateClientContactResult;
    }

    /**
     * @param ClientContact $CreateClientContactResult
     * @return \FatTail\AdBook\CreateClientContactResponse
     */
    public function setCreateClientContactResult($CreateClientContactResult)
    {
      $this->CreateClientContactResult = $CreateClientContactResult;
      return $this;
    }

}

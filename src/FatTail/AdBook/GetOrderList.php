<?php

namespace FatTail\AdBook;

class GetOrderList
{

    /**
     * @var OrderSearchParameter $parameters
     */
    protected $parameters = null;

    /**
     * @param OrderSearchParameter $parameters
     */
    public function __construct($parameters)
    {
      $this->parameters = $parameters;
    }

    /**
     * @return OrderSearchParameter
     */
    public function getParameters()
    {
      return $this->parameters;
    }

    /**
     * @param OrderSearchParameter $parameters
     * @return \FatTail\AdBook\GetOrderList
     */
    public function setParameters($parameters)
    {
      $this->parameters = $parameters;
      return $this;
    }

}

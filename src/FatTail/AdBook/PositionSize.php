<?php

namespace FatTail\AdBook;

class PositionSize
{

    /**
     * @var int $Height
     */
    protected $Height = null;

    /**
     * @var int $Width
     */
    protected $Width = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param int $Height
     * @return \FatTail\AdBook\PositionSize
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param int $Width
     * @return \FatTail\AdBook\PositionSize
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

}

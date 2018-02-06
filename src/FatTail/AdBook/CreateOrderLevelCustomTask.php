<?php

namespace FatTail\AdBook;

class CreateOrderLevelCustomTask
{

    /**
     * @var OrderCustomTask $customTask
     */
    protected $customTask = null;

    /**
     * @param OrderCustomTask $customTask
     */
    public function __construct($customTask)
    {
      $this->customTask = $customTask;
    }

    /**
     * @return OrderCustomTask
     */
    public function getCustomTask()
    {
      return $this->customTask;
    }

    /**
     * @param OrderCustomTask $customTask
     * @return \FatTail\AdBook\CreateOrderLevelCustomTask
     */
    public function setCustomTask($customTask)
    {
      $this->customTask = $customTask;
      return $this;
    }

}

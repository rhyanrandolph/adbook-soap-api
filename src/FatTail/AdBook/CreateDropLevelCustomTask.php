<?php

namespace FatTail\AdBook;

class CreateDropLevelCustomTask
{

    /**
     * @var DropCustomTask $customTask
     */
    protected $customTask = null;

    /**
     * @param DropCustomTask $customTask
     */
    public function __construct($customTask)
    {
      $this->customTask = $customTask;
    }

    /**
     * @return DropCustomTask
     */
    public function getCustomTask()
    {
      return $this->customTask;
    }

    /**
     * @param DropCustomTask $customTask
     * @return \FatTail\AdBook\CreateDropLevelCustomTask
     */
    public function setCustomTask($customTask)
    {
      $this->customTask = $customTask;
      return $this;
    }

}

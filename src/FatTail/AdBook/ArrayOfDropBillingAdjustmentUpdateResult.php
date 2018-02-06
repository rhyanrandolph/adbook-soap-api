<?php

namespace FatTail\AdBook;

class ArrayOfDropBillingAdjustmentUpdateResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DropBillingAdjustmentUpdateResult[] $DropBillingAdjustmentUpdateResult
     */
    protected $DropBillingAdjustmentUpdateResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DropBillingAdjustmentUpdateResult[]
     */
    public function getDropBillingAdjustmentUpdateResult()
    {
      return $this->DropBillingAdjustmentUpdateResult;
    }

    /**
     * @param DropBillingAdjustmentUpdateResult[] $DropBillingAdjustmentUpdateResult
     * @return \FatTail\AdBook\ArrayOfDropBillingAdjustmentUpdateResult
     */
    public function setDropBillingAdjustmentUpdateResult(array $DropBillingAdjustmentUpdateResult = null)
    {
      $this->DropBillingAdjustmentUpdateResult = $DropBillingAdjustmentUpdateResult;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->DropBillingAdjustmentUpdateResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DropBillingAdjustmentUpdateResult
     */
    public function offsetGet($offset)
    {
      return $this->DropBillingAdjustmentUpdateResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DropBillingAdjustmentUpdateResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DropBillingAdjustmentUpdateResult[] = $value;
      } else {
        $this->DropBillingAdjustmentUpdateResult[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DropBillingAdjustmentUpdateResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DropBillingAdjustmentUpdateResult Return the current element
     */
    public function current()
    {
      return current($this->DropBillingAdjustmentUpdateResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DropBillingAdjustmentUpdateResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DropBillingAdjustmentUpdateResult);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->DropBillingAdjustmentUpdateResult);
    }

    /**
     * Countable implementation
     *
     * @return DropBillingAdjustmentUpdateResult Return count of elements
     */
    public function count()
    {
      return count($this->DropBillingAdjustmentUpdateResult);
    }

}

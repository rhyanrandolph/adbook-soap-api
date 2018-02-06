<?php

namespace FatTail\AdBook;

class ArrayOfDropBillingAdjustmentCreateResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DropBillingAdjustmentCreateResult[] $DropBillingAdjustmentCreateResult
     */
    protected $DropBillingAdjustmentCreateResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DropBillingAdjustmentCreateResult[]
     */
    public function getDropBillingAdjustmentCreateResult()
    {
      return $this->DropBillingAdjustmentCreateResult;
    }

    /**
     * @param DropBillingAdjustmentCreateResult[] $DropBillingAdjustmentCreateResult
     * @return \FatTail\AdBook\ArrayOfDropBillingAdjustmentCreateResult
     */
    public function setDropBillingAdjustmentCreateResult(array $DropBillingAdjustmentCreateResult = null)
    {
      $this->DropBillingAdjustmentCreateResult = $DropBillingAdjustmentCreateResult;
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
      return isset($this->DropBillingAdjustmentCreateResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DropBillingAdjustmentCreateResult
     */
    public function offsetGet($offset)
    {
      return $this->DropBillingAdjustmentCreateResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DropBillingAdjustmentCreateResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DropBillingAdjustmentCreateResult[] = $value;
      } else {
        $this->DropBillingAdjustmentCreateResult[$offset] = $value;
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
      unset($this->DropBillingAdjustmentCreateResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DropBillingAdjustmentCreateResult Return the current element
     */
    public function current()
    {
      return current($this->DropBillingAdjustmentCreateResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DropBillingAdjustmentCreateResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DropBillingAdjustmentCreateResult);
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
      reset($this->DropBillingAdjustmentCreateResult);
    }

    /**
     * Countable implementation
     *
     * @return DropBillingAdjustmentCreateResult Return count of elements
     */
    public function count()
    {
      return count($this->DropBillingAdjustmentCreateResult);
    }

}

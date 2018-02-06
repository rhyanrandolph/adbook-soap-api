<?php

namespace FatTail\AdBook;

class ArrayOfDropBillingAdjustmentDeleteResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DropBillingAdjustmentDeleteResult[] $DropBillingAdjustmentDeleteResult
     */
    protected $DropBillingAdjustmentDeleteResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DropBillingAdjustmentDeleteResult[]
     */
    public function getDropBillingAdjustmentDeleteResult()
    {
      return $this->DropBillingAdjustmentDeleteResult;
    }

    /**
     * @param DropBillingAdjustmentDeleteResult[] $DropBillingAdjustmentDeleteResult
     * @return \FatTail\AdBook\ArrayOfDropBillingAdjustmentDeleteResult
     */
    public function setDropBillingAdjustmentDeleteResult(array $DropBillingAdjustmentDeleteResult = null)
    {
      $this->DropBillingAdjustmentDeleteResult = $DropBillingAdjustmentDeleteResult;
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
      return isset($this->DropBillingAdjustmentDeleteResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DropBillingAdjustmentDeleteResult
     */
    public function offsetGet($offset)
    {
      return $this->DropBillingAdjustmentDeleteResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DropBillingAdjustmentDeleteResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DropBillingAdjustmentDeleteResult[] = $value;
      } else {
        $this->DropBillingAdjustmentDeleteResult[$offset] = $value;
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
      unset($this->DropBillingAdjustmentDeleteResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DropBillingAdjustmentDeleteResult Return the current element
     */
    public function current()
    {
      return current($this->DropBillingAdjustmentDeleteResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DropBillingAdjustmentDeleteResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DropBillingAdjustmentDeleteResult);
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
      reset($this->DropBillingAdjustmentDeleteResult);
    }

    /**
     * Countable implementation
     *
     * @return DropBillingAdjustmentDeleteResult Return count of elements
     */
    public function count()
    {
      return count($this->DropBillingAdjustmentDeleteResult);
    }

}

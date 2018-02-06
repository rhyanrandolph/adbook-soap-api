<?php

namespace FatTail\AdBook;

class ArrayOfDropBillingAdjustment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DropBillingAdjustment[] $DropBillingAdjustment
     */
    protected $DropBillingAdjustment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DropBillingAdjustment[]
     */
    public function getDropBillingAdjustment()
    {
      return $this->DropBillingAdjustment;
    }

    /**
     * @param DropBillingAdjustment[] $DropBillingAdjustment
     * @return \FatTail\AdBook\ArrayOfDropBillingAdjustment
     */
    public function setDropBillingAdjustment(array $DropBillingAdjustment = null)
    {
      $this->DropBillingAdjustment = $DropBillingAdjustment;
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
      return isset($this->DropBillingAdjustment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DropBillingAdjustment
     */
    public function offsetGet($offset)
    {
      return $this->DropBillingAdjustment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DropBillingAdjustment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DropBillingAdjustment[] = $value;
      } else {
        $this->DropBillingAdjustment[$offset] = $value;
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
      unset($this->DropBillingAdjustment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DropBillingAdjustment Return the current element
     */
    public function current()
    {
      return current($this->DropBillingAdjustment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DropBillingAdjustment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DropBillingAdjustment);
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
      reset($this->DropBillingAdjustment);
    }

    /**
     * Countable implementation
     *
     * @return DropBillingAdjustment Return count of elements
     */
    public function count()
    {
      return count($this->DropBillingAdjustment);
    }

}

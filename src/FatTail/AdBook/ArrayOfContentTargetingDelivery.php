<?php

namespace FatTail\AdBook;

class ArrayOfContentTargetingDelivery implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ContentTargetingDelivery[] $ContentTargetingDelivery
     */
    protected $ContentTargetingDelivery = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContentTargetingDelivery[]
     */
    public function getContentTargetingDelivery()
    {
      return $this->ContentTargetingDelivery;
    }

    /**
     * @param ContentTargetingDelivery[] $ContentTargetingDelivery
     * @return \FatTail\AdBook\ArrayOfContentTargetingDelivery
     */
    public function setContentTargetingDelivery(array $ContentTargetingDelivery = null)
    {
      $this->ContentTargetingDelivery = $ContentTargetingDelivery;
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
      return isset($this->ContentTargetingDelivery[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ContentTargetingDelivery
     */
    public function offsetGet($offset)
    {
      return $this->ContentTargetingDelivery[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ContentTargetingDelivery $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ContentTargetingDelivery[] = $value;
      } else {
        $this->ContentTargetingDelivery[$offset] = $value;
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
      unset($this->ContentTargetingDelivery[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ContentTargetingDelivery Return the current element
     */
    public function current()
    {
      return current($this->ContentTargetingDelivery);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ContentTargetingDelivery);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ContentTargetingDelivery);
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
      reset($this->ContentTargetingDelivery);
    }

    /**
     * Countable implementation
     *
     * @return ContentTargetingDelivery Return count of elements
     */
    public function count()
    {
      return count($this->ContentTargetingDelivery);
    }

}

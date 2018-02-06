<?php

namespace FatTail\AdBook;

class ArrayOfAvailabilityRequest implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AvailabilityRequest[] $AvailabilityRequest
     */
    protected $AvailabilityRequest = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityRequest[]
     */
    public function getAvailabilityRequest()
    {
      return $this->AvailabilityRequest;
    }

    /**
     * @param AvailabilityRequest[] $AvailabilityRequest
     * @return \FatTail\AdBook\ArrayOfAvailabilityRequest
     */
    public function setAvailabilityRequest(array $AvailabilityRequest = null)
    {
      $this->AvailabilityRequest = $AvailabilityRequest;
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
      return isset($this->AvailabilityRequest[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AvailabilityRequest
     */
    public function offsetGet($offset)
    {
      return $this->AvailabilityRequest[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AvailabilityRequest $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AvailabilityRequest[] = $value;
      } else {
        $this->AvailabilityRequest[$offset] = $value;
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
      unset($this->AvailabilityRequest[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AvailabilityRequest Return the current element
     */
    public function current()
    {
      return current($this->AvailabilityRequest);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AvailabilityRequest);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AvailabilityRequest);
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
      reset($this->AvailabilityRequest);
    }

    /**
     * Countable implementation
     *
     * @return AvailabilityRequest Return count of elements
     */
    public function count()
    {
      return count($this->AvailabilityRequest);
    }

}

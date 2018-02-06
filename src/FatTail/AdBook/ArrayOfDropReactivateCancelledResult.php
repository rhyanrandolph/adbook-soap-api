<?php

namespace FatTail\AdBook;

class ArrayOfDropReactivateCancelledResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DropReactivateCancelledResult[] $DropReactivateCancelledResult
     */
    protected $DropReactivateCancelledResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DropReactivateCancelledResult[]
     */
    public function getDropReactivateCancelledResult()
    {
      return $this->DropReactivateCancelledResult;
    }

    /**
     * @param DropReactivateCancelledResult[] $DropReactivateCancelledResult
     * @return \FatTail\AdBook\ArrayOfDropReactivateCancelledResult
     */
    public function setDropReactivateCancelledResult(array $DropReactivateCancelledResult = null)
    {
      $this->DropReactivateCancelledResult = $DropReactivateCancelledResult;
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
      return isset($this->DropReactivateCancelledResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DropReactivateCancelledResult
     */
    public function offsetGet($offset)
    {
      return $this->DropReactivateCancelledResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DropReactivateCancelledResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DropReactivateCancelledResult[] = $value;
      } else {
        $this->DropReactivateCancelledResult[$offset] = $value;
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
      unset($this->DropReactivateCancelledResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DropReactivateCancelledResult Return the current element
     */
    public function current()
    {
      return current($this->DropReactivateCancelledResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DropReactivateCancelledResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DropReactivateCancelledResult);
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
      reset($this->DropReactivateCancelledResult);
    }

    /**
     * Countable implementation
     *
     * @return DropReactivateCancelledResult Return count of elements
     */
    public function count()
    {
      return count($this->DropReactivateCancelledResult);
    }

}

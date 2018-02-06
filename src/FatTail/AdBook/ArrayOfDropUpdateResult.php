<?php

namespace FatTail\AdBook;

class ArrayOfDropUpdateResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DropUpdateResult[] $DropUpdateResult
     */
    protected $DropUpdateResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DropUpdateResult[]
     */
    public function getDropUpdateResult()
    {
      return $this->DropUpdateResult;
    }

    /**
     * @param DropUpdateResult[] $DropUpdateResult
     * @return \FatTail\AdBook\ArrayOfDropUpdateResult
     */
    public function setDropUpdateResult(array $DropUpdateResult = null)
    {
      $this->DropUpdateResult = $DropUpdateResult;
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
      return isset($this->DropUpdateResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DropUpdateResult
     */
    public function offsetGet($offset)
    {
      return $this->DropUpdateResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DropUpdateResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DropUpdateResult[] = $value;
      } else {
        $this->DropUpdateResult[$offset] = $value;
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
      unset($this->DropUpdateResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DropUpdateResult Return the current element
     */
    public function current()
    {
      return current($this->DropUpdateResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DropUpdateResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DropUpdateResult);
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
      reset($this->DropUpdateResult);
    }

    /**
     * Countable implementation
     *
     * @return DropUpdateResult Return count of elements
     */
    public function count()
    {
      return count($this->DropUpdateResult);
    }

}

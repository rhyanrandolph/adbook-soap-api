<?php

namespace FatTail\AdBook;

class ArrayOfDropCancelResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DropCancelResult[] $DropCancelResult
     */
    protected $DropCancelResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DropCancelResult[]
     */
    public function getDropCancelResult()
    {
      return $this->DropCancelResult;
    }

    /**
     * @param DropCancelResult[] $DropCancelResult
     * @return \FatTail\AdBook\ArrayOfDropCancelResult
     */
    public function setDropCancelResult(array $DropCancelResult = null)
    {
      $this->DropCancelResult = $DropCancelResult;
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
      return isset($this->DropCancelResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DropCancelResult
     */
    public function offsetGet($offset)
    {
      return $this->DropCancelResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DropCancelResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DropCancelResult[] = $value;
      } else {
        $this->DropCancelResult[$offset] = $value;
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
      unset($this->DropCancelResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DropCancelResult Return the current element
     */
    public function current()
    {
      return current($this->DropCancelResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DropCancelResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DropCancelResult);
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
      reset($this->DropCancelResult);
    }

    /**
     * Countable implementation
     *
     * @return DropCancelResult Return count of elements
     */
    public function count()
    {
      return count($this->DropCancelResult);
    }

}

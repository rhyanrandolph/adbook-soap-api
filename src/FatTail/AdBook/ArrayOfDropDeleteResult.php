<?php

namespace FatTail\AdBook;

class ArrayOfDropDeleteResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DropDeleteResult[] $DropDeleteResult
     */
    protected $DropDeleteResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DropDeleteResult[]
     */
    public function getDropDeleteResult()
    {
      return $this->DropDeleteResult;
    }

    /**
     * @param DropDeleteResult[] $DropDeleteResult
     * @return \FatTail\AdBook\ArrayOfDropDeleteResult
     */
    public function setDropDeleteResult(array $DropDeleteResult = null)
    {
      $this->DropDeleteResult = $DropDeleteResult;
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
      return isset($this->DropDeleteResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DropDeleteResult
     */
    public function offsetGet($offset)
    {
      return $this->DropDeleteResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DropDeleteResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DropDeleteResult[] = $value;
      } else {
        $this->DropDeleteResult[$offset] = $value;
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
      unset($this->DropDeleteResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DropDeleteResult Return the current element
     */
    public function current()
    {
      return current($this->DropDeleteResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DropDeleteResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DropDeleteResult);
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
      reset($this->DropDeleteResult);
    }

    /**
     * Countable implementation
     *
     * @return DropDeleteResult Return count of elements
     */
    public function count()
    {
      return count($this->DropDeleteResult);
    }

}

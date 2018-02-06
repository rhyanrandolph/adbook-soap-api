<?php

namespace FatTail\AdBook;

class ArrayOfCreative implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Creative[] $Creative
     */
    protected $Creative = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Creative[]
     */
    public function getCreative()
    {
      return $this->Creative;
    }

    /**
     * @param Creative[] $Creative
     * @return \FatTail\AdBook\ArrayOfCreative
     */
    public function setCreative(array $Creative = null)
    {
      $this->Creative = $Creative;
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
      return isset($this->Creative[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Creative
     */
    public function offsetGet($offset)
    {
      return $this->Creative[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Creative $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Creative[] = $value;
      } else {
        $this->Creative[$offset] = $value;
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
      unset($this->Creative[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Creative Return the current element
     */
    public function current()
    {
      return current($this->Creative);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Creative);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Creative);
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
      reset($this->Creative);
    }

    /**
     * Countable implementation
     *
     * @return Creative Return count of elements
     */
    public function count()
    {
      return count($this->Creative);
    }

}

<?php

namespace FatTail\AdBook;

class ArrayOfQueryFilterValue implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QueryFilterValue[] $QueryFilterValue
     */
    protected $QueryFilterValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QueryFilterValue[]
     */
    public function getQueryFilterValue()
    {
      return $this->QueryFilterValue;
    }

    /**
     * @param QueryFilterValue[] $QueryFilterValue
     * @return \FatTail\AdBook\ArrayOfQueryFilterValue
     */
    public function setQueryFilterValue(array $QueryFilterValue = null)
    {
      $this->QueryFilterValue = $QueryFilterValue;
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
      return isset($this->QueryFilterValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QueryFilterValue
     */
    public function offsetGet($offset)
    {
      return $this->QueryFilterValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QueryFilterValue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QueryFilterValue[] = $value;
      } else {
        $this->QueryFilterValue[$offset] = $value;
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
      unset($this->QueryFilterValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QueryFilterValue Return the current element
     */
    public function current()
    {
      return current($this->QueryFilterValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QueryFilterValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QueryFilterValue);
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
      reset($this->QueryFilterValue);
    }

    /**
     * Countable implementation
     *
     * @return QueryFilterValue Return count of elements
     */
    public function count()
    {
      return count($this->QueryFilterValue);
    }

}

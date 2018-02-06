<?php

namespace FatTail\AdBook;

class ArrayOfQueryFilter implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var QueryFilter[] $QueryFilter
     */
    protected $QueryFilter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return QueryFilter[]
     */
    public function getQueryFilter()
    {
      return $this->QueryFilter;
    }

    /**
     * @param QueryFilter[] $QueryFilter
     * @return \FatTail\AdBook\ArrayOfQueryFilter
     */
    public function setQueryFilter(array $QueryFilter = null)
    {
      $this->QueryFilter = $QueryFilter;
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
      return isset($this->QueryFilter[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return QueryFilter
     */
    public function offsetGet($offset)
    {
      return $this->QueryFilter[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param QueryFilter $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->QueryFilter[] = $value;
      } else {
        $this->QueryFilter[$offset] = $value;
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
      unset($this->QueryFilter[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return QueryFilter Return the current element
     */
    public function current()
    {
      return current($this->QueryFilter);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->QueryFilter);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->QueryFilter);
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
      reset($this->QueryFilter);
    }

    /**
     * Countable implementation
     *
     * @return QueryFilter Return count of elements
     */
    public function count()
    {
      return count($this->QueryFilter);
    }

}

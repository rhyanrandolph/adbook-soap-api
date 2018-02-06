<?php

namespace FatTail\AdBook;

class ArrayOfCreativeAssignment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var CreativeAssignment[] $CreativeAssignment
     */
    protected $CreativeAssignment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CreativeAssignment[]
     */
    public function getCreativeAssignment()
    {
      return $this->CreativeAssignment;
    }

    /**
     * @param CreativeAssignment[] $CreativeAssignment
     * @return \FatTail\AdBook\ArrayOfCreativeAssignment
     */
    public function setCreativeAssignment(array $CreativeAssignment = null)
    {
      $this->CreativeAssignment = $CreativeAssignment;
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
      return isset($this->CreativeAssignment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return CreativeAssignment
     */
    public function offsetGet($offset)
    {
      return $this->CreativeAssignment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param CreativeAssignment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->CreativeAssignment[] = $value;
      } else {
        $this->CreativeAssignment[$offset] = $value;
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
      unset($this->CreativeAssignment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CreativeAssignment Return the current element
     */
    public function current()
    {
      return current($this->CreativeAssignment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->CreativeAssignment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->CreativeAssignment);
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
      reset($this->CreativeAssignment);
    }

    /**
     * Countable implementation
     *
     * @return CreativeAssignment Return count of elements
     */
    public function count()
    {
      return count($this->CreativeAssignment);
    }

}

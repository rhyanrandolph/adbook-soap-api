<?php

namespace FatTail\AdBook;

class ArrayOfAgency implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Agency[] $Agency
     */
    protected $Agency = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Agency[]
     */
    public function getAgency()
    {
      return $this->Agency;
    }

    /**
     * @param Agency[] $Agency
     * @return \FatTail\AdBook\ArrayOfAgency
     */
    public function setAgency(array $Agency = null)
    {
      $this->Agency = $Agency;
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
      return isset($this->Agency[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Agency
     */
    public function offsetGet($offset)
    {
      return $this->Agency[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Agency $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Agency[] = $value;
      } else {
        $this->Agency[$offset] = $value;
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
      unset($this->Agency[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Agency Return the current element
     */
    public function current()
    {
      return current($this->Agency);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Agency);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Agency);
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
      reset($this->Agency);
    }

    /**
     * Countable implementation
     *
     * @return Agency Return count of elements
     */
    public function count()
    {
      return count($this->Agency);
    }

}

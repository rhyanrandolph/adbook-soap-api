<?php

namespace FatTail\AdBook;

class ArrayOfTargetCriteria implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TargetCriteria[] $TargetCriteria
     */
    protected $TargetCriteria = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TargetCriteria[]
     */
    public function getTargetCriteria()
    {
      return $this->TargetCriteria;
    }

    /**
     * @param TargetCriteria[] $TargetCriteria
     * @return \FatTail\AdBook\ArrayOfTargetCriteria
     */
    public function setTargetCriteria(array $TargetCriteria = null)
    {
      $this->TargetCriteria = $TargetCriteria;
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
      return isset($this->TargetCriteria[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TargetCriteria
     */
    public function offsetGet($offset)
    {
      return $this->TargetCriteria[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TargetCriteria $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TargetCriteria[] = $value;
      } else {
        $this->TargetCriteria[$offset] = $value;
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
      unset($this->TargetCriteria[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TargetCriteria Return the current element
     */
    public function current()
    {
      return current($this->TargetCriteria);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TargetCriteria);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TargetCriteria);
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
      reset($this->TargetCriteria);
    }

    /**
     * Countable implementation
     *
     * @return TargetCriteria Return count of elements
     */
    public function count()
    {
      return count($this->TargetCriteria);
    }

}

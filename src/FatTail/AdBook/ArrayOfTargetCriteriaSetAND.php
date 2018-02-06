<?php

namespace FatTail\AdBook;

class ArrayOfTargetCriteriaSetAND implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TargetCriteriaSetAND[] $TargetCriteriaSetAND
     */
    protected $TargetCriteriaSetAND = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TargetCriteriaSetAND[]
     */
    public function getTargetCriteriaSetAND()
    {
      return $this->TargetCriteriaSetAND;
    }

    /**
     * @param TargetCriteriaSetAND[] $TargetCriteriaSetAND
     * @return \FatTail\AdBook\ArrayOfTargetCriteriaSetAND
     */
    public function setTargetCriteriaSetAND(array $TargetCriteriaSetAND = null)
    {
      $this->TargetCriteriaSetAND = $TargetCriteriaSetAND;
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
      return isset($this->TargetCriteriaSetAND[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TargetCriteriaSetAND
     */
    public function offsetGet($offset)
    {
      return $this->TargetCriteriaSetAND[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TargetCriteriaSetAND $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TargetCriteriaSetAND[] = $value;
      } else {
        $this->TargetCriteriaSetAND[$offset] = $value;
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
      unset($this->TargetCriteriaSetAND[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TargetCriteriaSetAND Return the current element
     */
    public function current()
    {
      return current($this->TargetCriteriaSetAND);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TargetCriteriaSetAND);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TargetCriteriaSetAND);
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
      reset($this->TargetCriteriaSetAND);
    }

    /**
     * Countable implementation
     *
     * @return TargetCriteriaSetAND Return count of elements
     */
    public function count()
    {
      return count($this->TargetCriteriaSetAND);
    }

}

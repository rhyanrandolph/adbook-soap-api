<?php

namespace FatTail\AdBook;

class ArrayOfTargetValue implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TargetValue[] $TargetValue
     */
    protected $TargetValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TargetValue[]
     */
    public function getTargetValue()
    {
      return $this->TargetValue;
    }

    /**
     * @param TargetValue[] $TargetValue
     * @return \FatTail\AdBook\ArrayOfTargetValue
     */
    public function setTargetValue(array $TargetValue = null)
    {
      $this->TargetValue = $TargetValue;
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
      return isset($this->TargetValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TargetValue
     */
    public function offsetGet($offset)
    {
      return $this->TargetValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TargetValue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TargetValue[] = $value;
      } else {
        $this->TargetValue[$offset] = $value;
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
      unset($this->TargetValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TargetValue Return the current element
     */
    public function current()
    {
      return current($this->TargetValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TargetValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TargetValue);
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
      reset($this->TargetValue);
    }

    /**
     * Countable implementation
     *
     * @return TargetValue Return count of elements
     */
    public function count()
    {
      return count($this->TargetValue);
    }

}

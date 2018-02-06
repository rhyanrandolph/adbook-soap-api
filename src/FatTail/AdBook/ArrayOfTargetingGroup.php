<?php

namespace FatTail\AdBook;

class ArrayOfTargetingGroup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TargetingGroup[] $TargetingGroup
     */
    protected $TargetingGroup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TargetingGroup[]
     */
    public function getTargetingGroup()
    {
      return $this->TargetingGroup;
    }

    /**
     * @param TargetingGroup[] $TargetingGroup
     * @return \FatTail\AdBook\ArrayOfTargetingGroup
     */
    public function setTargetingGroup(array $TargetingGroup = null)
    {
      $this->TargetingGroup = $TargetingGroup;
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
      return isset($this->TargetingGroup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TargetingGroup
     */
    public function offsetGet($offset)
    {
      return $this->TargetingGroup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TargetingGroup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TargetingGroup[] = $value;
      } else {
        $this->TargetingGroup[$offset] = $value;
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
      unset($this->TargetingGroup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TargetingGroup Return the current element
     */
    public function current()
    {
      return current($this->TargetingGroup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TargetingGroup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TargetingGroup);
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
      reset($this->TargetingGroup);
    }

    /**
     * Countable implementation
     *
     * @return TargetingGroup Return count of elements
     */
    public function count()
    {
      return count($this->TargetingGroup);
    }

}

<?php

namespace FatTail\AdBook;

class ArrayOfTargetingPackage implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TargetingPackage[] $TargetingPackage
     */
    protected $TargetingPackage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TargetingPackage[]
     */
    public function getTargetingPackage()
    {
      return $this->TargetingPackage;
    }

    /**
     * @param TargetingPackage[] $TargetingPackage
     * @return \FatTail\AdBook\ArrayOfTargetingPackage
     */
    public function setTargetingPackage(array $TargetingPackage = null)
    {
      $this->TargetingPackage = $TargetingPackage;
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
      return isset($this->TargetingPackage[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TargetingPackage
     */
    public function offsetGet($offset)
    {
      return $this->TargetingPackage[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TargetingPackage $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TargetingPackage[] = $value;
      } else {
        $this->TargetingPackage[$offset] = $value;
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
      unset($this->TargetingPackage[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TargetingPackage Return the current element
     */
    public function current()
    {
      return current($this->TargetingPackage);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TargetingPackage);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TargetingPackage);
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
      reset($this->TargetingPackage);
    }

    /**
     * Countable implementation
     *
     * @return TargetingPackage Return count of elements
     */
    public function count()
    {
      return count($this->TargetingPackage);
    }

}

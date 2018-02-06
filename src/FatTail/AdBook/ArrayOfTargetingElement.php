<?php

namespace FatTail\AdBook;

class ArrayOfTargetingElement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var TargetingElement[] $TargetingElement
     */
    protected $TargetingElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TargetingElement[]
     */
    public function getTargetingElement()
    {
      return $this->TargetingElement;
    }

    /**
     * @param TargetingElement[] $TargetingElement
     * @return \FatTail\AdBook\ArrayOfTargetingElement
     */
    public function setTargetingElement(array $TargetingElement = null)
    {
      $this->TargetingElement = $TargetingElement;
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
      return isset($this->TargetingElement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return TargetingElement
     */
    public function offsetGet($offset)
    {
      return $this->TargetingElement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param TargetingElement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->TargetingElement[] = $value;
      } else {
        $this->TargetingElement[$offset] = $value;
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
      unset($this->TargetingElement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return TargetingElement Return the current element
     */
    public function current()
    {
      return current($this->TargetingElement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->TargetingElement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->TargetingElement);
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
      reset($this->TargetingElement);
    }

    /**
     * Countable implementation
     *
     * @return TargetingElement Return count of elements
     */
    public function count()
    {
      return count($this->TargetingElement);
    }

}

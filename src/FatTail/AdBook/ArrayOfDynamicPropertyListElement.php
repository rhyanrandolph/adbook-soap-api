<?php

namespace FatTail\AdBook;

class ArrayOfDynamicPropertyListElement implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DynamicPropertyListElement[] $DynamicPropertyListElement
     */
    protected $DynamicPropertyListElement = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DynamicPropertyListElement[]
     */
    public function getDynamicPropertyListElement()
    {
      return $this->DynamicPropertyListElement;
    }

    /**
     * @param DynamicPropertyListElement[] $DynamicPropertyListElement
     * @return \FatTail\AdBook\ArrayOfDynamicPropertyListElement
     */
    public function setDynamicPropertyListElement(array $DynamicPropertyListElement = null)
    {
      $this->DynamicPropertyListElement = $DynamicPropertyListElement;
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
      return isset($this->DynamicPropertyListElement[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DynamicPropertyListElement
     */
    public function offsetGet($offset)
    {
      return $this->DynamicPropertyListElement[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DynamicPropertyListElement $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DynamicPropertyListElement[] = $value;
      } else {
        $this->DynamicPropertyListElement[$offset] = $value;
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
      unset($this->DynamicPropertyListElement[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DynamicPropertyListElement Return the current element
     */
    public function current()
    {
      return current($this->DynamicPropertyListElement);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DynamicPropertyListElement);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DynamicPropertyListElement);
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
      reset($this->DynamicPropertyListElement);
    }

    /**
     * Countable implementation
     *
     * @return DynamicPropertyListElement Return count of elements
     */
    public function count()
    {
      return count($this->DynamicPropertyListElement);
    }

}

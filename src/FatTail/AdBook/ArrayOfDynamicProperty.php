<?php

namespace FatTail\AdBook;

class ArrayOfDynamicProperty implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DynamicProperty[] $DynamicProperty
     */
    protected $DynamicProperty = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DynamicProperty[]
     */
    public function getDynamicProperty()
    {
      return $this->DynamicProperty;
    }

    /**
     * @param DynamicProperty[] $DynamicProperty
     * @return \FatTail\AdBook\ArrayOfDynamicProperty
     */
    public function setDynamicProperty(array $DynamicProperty = null)
    {
      $this->DynamicProperty = $DynamicProperty;
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
      return isset($this->DynamicProperty[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DynamicProperty
     */
    public function offsetGet($offset)
    {
      return $this->DynamicProperty[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DynamicProperty $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DynamicProperty[] = $value;
      } else {
        $this->DynamicProperty[$offset] = $value;
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
      unset($this->DynamicProperty[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DynamicProperty Return the current element
     */
    public function current()
    {
      return current($this->DynamicProperty);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DynamicProperty);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DynamicProperty);
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
      reset($this->DynamicProperty);
    }

    /**
     * Countable implementation
     *
     * @return DynamicProperty Return count of elements
     */
    public function count()
    {
      return count($this->DynamicProperty);
    }

}

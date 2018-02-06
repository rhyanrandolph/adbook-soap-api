<?php

namespace FatTail\AdBook;

class ArrayOfMediaElementPropertyValue implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var MediaElementPropertyValue[] $MediaElementPropertyValue
     */
    protected $MediaElementPropertyValue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MediaElementPropertyValue[]
     */
    public function getMediaElementPropertyValue()
    {
      return $this->MediaElementPropertyValue;
    }

    /**
     * @param MediaElementPropertyValue[] $MediaElementPropertyValue
     * @return \FatTail\AdBook\ArrayOfMediaElementPropertyValue
     */
    public function setMediaElementPropertyValue(array $MediaElementPropertyValue = null)
    {
      $this->MediaElementPropertyValue = $MediaElementPropertyValue;
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
      return isset($this->MediaElementPropertyValue[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return MediaElementPropertyValue
     */
    public function offsetGet($offset)
    {
      return $this->MediaElementPropertyValue[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param MediaElementPropertyValue $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->MediaElementPropertyValue[] = $value;
      } else {
        $this->MediaElementPropertyValue[$offset] = $value;
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
      unset($this->MediaElementPropertyValue[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return MediaElementPropertyValue Return the current element
     */
    public function current()
    {
      return current($this->MediaElementPropertyValue);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->MediaElementPropertyValue);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->MediaElementPropertyValue);
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
      reset($this->MediaElementPropertyValue);
    }

    /**
     * Countable implementation
     *
     * @return MediaElementPropertyValue Return count of elements
     */
    public function count()
    {
      return count($this->MediaElementPropertyValue);
    }

}
